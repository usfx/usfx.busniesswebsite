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

$username = $_POST['username'];
$password = $_POST['password'];

$UserCheck = $conn->query("SELECT * FROM Login_Table WHERE Username = '" . $username . "'");

$CheckPass = $UserCheck->fetch_assoc() ["Password"];
$hash = $CheckPass;


if(isset($username) && isset($password))
{
    
    if(isset($CheckPass))
    {
        
        if(password_verify($password, $CheckPass))
        {

            $data = $conn->query("SELECT * FROM Login_Table WHERE Username = '" . $username . "'")->fetch_assoc();
            $_SESSION["user"] = $data["UserID"];
            $_SESSION["type"] = $data["Type"];    
            
            if($_SESSION["type"] == "1")
            {
                header("location: index.php");
                die();
            }
        }
    }
}
?>

