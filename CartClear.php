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
    
    $ClearData = $conn->query("DELETE FROM " . $_SESSION["user"] . "_Cart");
    
    if($conn->query($ClearData) === TRUE)
    {
        header("location: Cart.php");
        die();
    }
    else
    {
        header("location: Cart.php");
        die();
    }
?>