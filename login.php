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
  <link rel="stylesheet" href="logos.css">
  
  <script>
    var inputElems = document.getElementsByTagName("input");
    for(var i = 0; i < inputElems.length; i++)
    {
        var elem= inputElems[i];
        if(elem.nodeName == "INPUT" && /(?:^|\s+)alphanumericOnly(?:\s+|$)/.test(elem.className)
        {
            elem.onkeyup = function()
            {
                this.value = this.value.replace(/[^a-zA-Z0-9]/g, '');
            }
        }
    }
    
    function required(inputtx)
    {
        if(inputtx.value.length == 0)
        {
            alert("message");
            return false;
        }
        return true;
    }
  </script>
  
  <title>Tofi | Log In</title>
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
  <li><a href="login.php">Login</a></li>
  </ul>
  </div>
</div>
<?php echo $_SESSION["user"]; ?>
<form action="SignIn.php" method="post" name="login" onsubmit="required()">
    
    <label>Username</label>
    <input type="text" name="username" class="alphanumericOnly" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9]/g, '')"/><br><br>
    <label>Password</label>
    <input type="password" name="password" class="alphanumericOnly" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9]/g, '')">
    <br><br>
    <input type="submit" value="Login">
</form>

<form action="Register.php" method="post">
    <label>Username</label>
    <input type="text" name="username" class="alphanumericOnly" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9]/g, '')"><br><br>
    <label>Password</label>
    <input type="password" name="password" class="alphanumericOnly" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9]/g, '')">
    <br><br>
    <input type="submit" value="Register">
</form>
</body>
</html>
