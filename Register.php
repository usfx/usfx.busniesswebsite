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
$passwordHASH = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO Login_Table (Username, Password, Type) VALUES ('$username', '$passwordHASH', '1')";

if($conn->query($sql) === TRUE)
{
    $_SESSION['user'] = $_POST['username'];
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

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

