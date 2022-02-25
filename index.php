<?php
    session_start();

    // If session is not set then redirect to Login Page
    if(!isset($_SESSION['login_user'])) 
    {
        header("Location:login.php");  
    }
       echo "Welcome, ";
       echo $_SESSION['login_user'];
       echo "<br><a href='signout.php'>Sign Out</a> "; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>

</body>
</html>