<?php
session_start();
$servername = ""; 
$username = "";
$password = "";
$dbname = "";

//Checking connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Checking connection
if($conn->connect_error)
{
    die("<br />Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="Tofi_T.png"
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
<title>Tofi | Home</title>


<!--connecting html with css -->
<link rel="stylesheet" href="sty.css">
<link rel="stylesheet" href="logos.css">
</head>

<body>

<div class="header" >
  <img class="tofiImage" src="images/tofi.jpg" alt="Tofi" width="100" height="70" style="margin:0px 45%">
  <div class="menu-bar">
    <ul>
     <li class="active"><a href="index.php">HOME</a></li>
     <li><a href="sellitems.php">SELL ITEMS</a></li>
     <li><a href="howitworks.php">HOW IT WORKS</a></li>
     <li><a href="about.php">ABOUT US</a></li>
     <li><a href="./faq.php">HELP</a>
     <div class="sub-menu-1">
      <ul>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>
  </li>
  <?php
  $data = $conn->query("SELECT * FROM Login_Table WHERE UserID = '" . $_SESSION["user"] . "'")->fetch_assoc();
  if($data["Username"] == NULL)
  {
        echo '<li><a href="login.php">Log in</a></li>';
  }
  else
  {
      echo '<li><a href="logout.php">Log out</a></li>';
  }    
  ?>
</ul>

</div>
</div>

    <div class="user">
        <p style="text-align: CENTER;"><?php 
                                        $data = $conn->query("SELECT * FROM Login_Table WHERE UserID = '" . $_SESSION["user"] . "'")->fetch_assoc();
                                        if($data["Username"] == NULL)
                                        {
                                            echo "Not Logged In!!";
                                        }
                                        else
                                        {
                                            echo "User: " . $data["Username"];
                                        }
                                        ?></p>
    </div>

<div class="middle">
<div class="column">
    <p class="f1 down"> GET CASH FOR YOUR "JUNK"!</p>
    <p class="left">Exchange your unwanted items for some cash. you got it? We want it!</p>

</div>
<div class="column">
    <img src="images/phone.png">
</div>
</div>



<div class="third">
<p class="f1 downtext"> Enter your barcode:</p>
<input type="text">
<input type="button" class="button" value="Get Value">
</div>


<div>
<div class="normaltext">
<p class="sp" style="color:orange;font-size: 40px">From "junk" to money in 4 easy steps</p>
  </div>

<div class="gallery">
  <a target="_blank" href="images/barcode.jpg">
    <img src="images/barcode.jpg" alt="barcode" width="100" height="50">
  </a>
  <div class="desc"> Scan or enter your barcodes in the "Sell Items" page to get a price</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/emptybox.jpg">
    <img src="images/emptybox.jpg" alt="emptybox" width="100" height="50">
  </a>
  <div class="desc"> Complete the onlikne process and load up your items</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/delivery.jpg">
    <img src="images/delivery.jpg" alt="delivery" width="100" height="50">
  </a>
  <div class="desc"> Use our FREE dispatch service to deliver your items</div>
</div>

<div class="gallery">
  <a target="_blank" href="images/currency.jpg">
    <img src="images/currency.jpg" alt="currency" width="100" height="50">
  </a>
  <div class="desc"> Get PAID within 1-3 days via PayPal or bank transfer</div>
</div>
</div>




  <div class="fifth">

    <div class="secondline">
    <div class="column">
    <img src="images/reviews.png">
    </div>

    <div class="column">
      <img src="images/reviews.png">
    </div>
</div>
</div>

<div class="footer1">
        <div class="quickmenu"><h3>Information</h3>
          <ul style="list-style:none;">
            <a href="about.html"><li>About Us</li></a>
            <a href="howitworks.html"><li>Information</li></a>
            <a href="contact.html"><li>Contact Us</li></a>
            <a href="#"><li>Terms & Conditions</li></a>

          </ul>
          </div>
          <div class="quickmenu"><h3>Service</h3>
            <ul style="list-style:none;">
              <a href="about.html"><li>About Us</li></a>
              <a href="howitworks.html"><li>Information</li></a>
              <a href="contact.html"><li>Contact Us</li></a>
              <a href="#"><li>Terms & Conditions</li></a>

            </ul>
            </div>
            <div class="quickmenu"><h3>Extras</h3>
              <ul style="list-style:none;">
                <a href="about.html"><li>About Us</li></a>
                <a href="howitworks.html"><li>Information</li></a>
                <a href="contact.html"><li>Contact Us</li></a>
                <a href="#"><li>Terms & Conditions</li></a>

              </ul>
              </div>
              <div class="quickmenu"><h3>My Account</h3>
                <ul style="list-style:none;">
                  <a href="about.html"><li>About Us</li></a>
                  <a href="howitworks.html"><li>Information</li></a>
                  <a href="contact.html"><li>Contact Us</li></a>
                  <a href="#"><li>Terms & Conditions</li></a>

                </ul>
                </div>
          <div class="quickmenu"><h3>Useful Links</h3>
            <ul style="list-style:none;">
              <a href="about.html"><li>About Us</li></a>
              <a href="howitworks.html"><li>Information</li></a>
              <a href="contact.html"><li>Contact Us</li></a>
              <a href="#"><li>Terms & Conditions</li></a>

            </ul>
            </div>
            <div class="quickmenu"><h3>Our Offers</h3>
              <ul style="list-style:none;">
                <a href="about.html"><li>About Us</li></a>
                <a href="howitworks.html"><li>Information</li></a>
                <a href="contact.html"><li>Contact Us</li></a>
                <a href="#"><li>Terms & Conditions</li></a>

              </ul>
              </div>





        </div>
        <div class="footer2">
          <i style="font-size:24px;" class="fab">&#xf1f0;</i>
          <i style="font-size:24px;" class="fab">&#xf1f4;</i>
          <i style="font-size:24px;" class="fab">&#xf1f5;</i>
          <i style="font-size:24px;" class="fab">&#xf1f3;</i>
        </div>
   </body>
</html>
