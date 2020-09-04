<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Tofi | Contact</title>
        <link href="sty.css" rel="stylesheet">
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
     <li><a href="./faq.php">HELP</a></li>
     <div class="sub-menu-1">
      <ul>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>
      <li><a href="login.php">Login</li>
</ul>

</div>
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



<!-- CONTACT FORM-->



​<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text2], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  display: flex;
  justify-content: center;
  box-sizing: border-box;
  background-color: #169A11;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

input[type=email]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #ffffff;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.center {
  margin: auto;
  width: 40%;
  border: 3px solid #FFFFFF;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.cu{
  text-align: center;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2></h2>
<p></p>

<div class="container">
  <div style="text-align:center">
    <p class="cu" style="color: orange;font-size: 40px">CONTACT US</p>
    <p></p>
  </div>
  <div class="row">



    <div class="center">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text2" id="fname" name="firstname" placeholder="Your name..">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Email">

        <label for="question">Question</label>
        <textarea id="question" name="question" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>



















<!-- FOOTER-->

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



</body><!--Close 'body' -->
</html><!--Close 'html' -->
