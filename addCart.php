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
    $var = "test";
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
    
    $createTable = "CREATE TABLE " . $_SESSION["user"] . "_Cart (ItemID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Title VARCHAR(100) NOT NULL, Author VARCHAR(100) NOT NULL, Price INT(5) NOT NULL, Amount INT(4) NOT NULL)";
    if($conn->query($createTable) === TRUE)
    {
        
    }
    else
    {
        
    }
    $data = $conn->query("SELECT * FROM Login_Table WHERE UserID = '" . $_SESSION["user"] . "'")->fetch_assoc();
    if($data["Username" == NULL])
    {
        hearder("location: login.php");
        die();
    }
    else
    {
        
        $val = "SELECT * FROM " . $_SESSION["user"] . "_Cart";
        if($conn->query($val) === TRUE)
        {
            echo "true";
            $insertData = "INSERT INTO " . $_SESSION["user"] . "_Cart (Title, Author, Price, Amount) VALUES ('$_SESSION[Title]', '$_SESSION[Author]', '" . $_SESSION[Price] . "', '" . $_SESSION[Amount] . "')";
            if($conn->query($insertData) === TRUE)
            {
                header("location: Cart.php");
                die();
            }
            else
            {
                echo "No: " . $insertData . "<br>" . $conn->error;
            }
        }
        else
        {
            $insertData = "INSERT INTO " . $_SESSION["user"] . "_Cart (Title, Author, Price, Amount) VALUES ('$_SESSION[Title]', '$_SESSION[Author]', '" . $_SESSION[Price] . "', '" . $_SESSION[Amount] . "')";
            if($conn->query($insertData) === TRUE)
            {
                
                header("location: Cart.php");
                die();
            }
            else
            {
                echo "No: " . $insertData . "<br>" . $conn->error;
            }
        }
    }
?>