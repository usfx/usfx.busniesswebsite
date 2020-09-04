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

  <link rel="stylesheet" href="sty.css">

  <title>Tofi | About</title>

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

  <div class="third">
    <p class="f1 downtext"> Enter your barcode:</p>
    <input type="text">
    <input type="button" class="button" value="Get Value">>
  </div>

  <div class="forth">
    <p class="sp" style="color: orange;font-size: 30px" height="12px">ABOUT US</p>
    <br>
    <p class="sp" style="font-size:20px">We can help you to de-clutter, reorganize and make some extra cash. Whether you’re purging your old PlayStation games or leaving your CD collection in the past, just use Ziffit to get an instant quote. The process couldn’t be simpler. It’s FAST, FREE and EASY.<BR><BR>

    Firstly, gather items that you’ve deemed surplus to requirements. Next, enter the barcode or ISBN of your items, click Get Value and we will make an offer. Now box up your items. Send your trade it’s FREE.
    If your box is less than 10kg (don’t worry, we will work this out for you) send your items through one of over 5,000 Collect+ shops across the country. This is convenient and completely free. For larger trades, we do offer a courier collection service. This is also provided free of charge, with further details provided during the checkout process. Quick payments your way.<BR><BR>
    Once your items have been received and checked, we will pay you directly via bank transfer, Paypal, cheque or with new Instant Cash Voucher. Should your items be damaged or faulty, we will inform you immediately and provide a revised quote if necessary. That’s it. Simplicity is the key for us here at Ziffit. We want you to get the very best prices for your old stuff without all the usual hassle. Find it, add it, trade it, send it – that’s Ziffit. To find out more about how it all works please visit our FAQs page or contact one of our friendly team. We’re also on Facebook and Twitter if you ever have a question or just want to say hello. So, what are you waiting for? Just enter your barcodes and ISBN and start making cash now!
    </p>
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
