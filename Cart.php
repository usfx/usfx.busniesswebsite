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
    
    $ISBN = $_POST[ISBN];
    
    //Checking connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    //Checking connection
    if($conn->connect_error)
    {
        die("<br />Connection failed: " . $conn->connect_error);
    }
    
    $GetData = $conn->query("SELECT * FROM " . $_SESSION["user"] . "_Cart");
    
    $OverallTotal = array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Tofi | <?php 
$data = $conn->query("SELECT * FROM Login_Table WHERE UserID = '" . $_SESSION["user"] . "'")->fetch_assoc();
if($data["Username"] !== NULL)
                                        {
                                            echo $data["Username"] . " ";
                                        }

?>Cart</title>


<!--connecting html with css -->
<link rel="stylesheet" href="sty.css">
<link rel="stylesheet" href="logos.css">
<link rel="stylesheet" href="sellitems.css">
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
<br>
<br>
<p style="text-align: CENTER;">
<?php
    if($GetData->num_rows > 0)
    {
        while($row = $GetData->fetch_assoc())
        {
            $total = $row["Price"] * $row["Amount"];
            echo "Title: " . $row["Title"] . "<br>" . "Author: " . $row["Author"] . "<br>" . "Price: £" . $row["Price"] . ".00" . "<br>" . "Quantity: " . $row["Amount"] . "<br>" . "Total: £" . $total . ".00" . "<br><br><br>";
        
            $OverallTotal[] = $row["Price"] * $row["Amount"];
        }
        echo "Overall Total: £";
        print_r(array_sum($OverallTotal));
        echo ".00";
    }
?>
</p>
<form method="post" action="CartClear.php" style="text-align: CENTER;">
    <input type="submit" value="Clear Cart" />
</form>
</body>
</html>