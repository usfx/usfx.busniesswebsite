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
  
<title>About</title>

<link rel="stylesheet" href="sty.css">



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
    <p class="f1 down"> GET CASH FOR YOUR STUFF</p>
    <p class="left">We buy your unwanted books<br>CDs.DVDs and games</p>

</div>
<div class="column">
    <img src="images/phone.png">
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
          <h3>&copy;2020 TOFI.com ALl Rights Reserved.</h3>
        </div>

</body>








</html>
