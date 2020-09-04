<?php
    session_start();
        //check login
    if(isset($_SESSION["user"]))
    {
        
    }
    else
    {
    header("location: login.php");
    }
    
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

<title>Tofi | Sell Items</title>


<!--connecting html with css -->
<link rel="stylesheet" href="sty.css">
<link rel="stylesheet" href="logos.css">
<link rel="stylesheet" href="sellitems.css">
<link rel="icon" type="image/png" href="Tofi_T.png">

<script>
function isNumber(evt)
{
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>

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



<p class="sb" style="color:orange;font-size: 27px">Sell your Books!</p><br>

    
    <form action="quote.php" method="post" name="bookForm" onkeypress="return isNumber(event)">
        <label>Enter Your Barcode: </label>
        <input type="text" class="textfield" id="ISBN" name="ISBN" />
        <br>
        <label>Enter Amount: </label>
        <input type="text" name="Amount" />
        <br>
        <input type="submit" value="Get Quote" />
    </form>



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
