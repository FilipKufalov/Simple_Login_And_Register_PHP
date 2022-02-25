<?php
   include('config.php');
   ob_start();
   session_start();

   // Checking whether the session is already there or not if, true then header redirect it to the home page directly 
   if(isset($_SESSION['login_user']))   
    {
        header("Location:index.php"); 
    }

   if($_SERVER["REQUEST_METHOD"] == "POST") {

   $username = mysqli_real_escape_string($db,$_POST['username']);
   $password = mysqli_real_escape_string($db,$_POST['password']);

   $sqllogin = "SELECT * FROM members WHERE username = '$username' AND password = '$password'";
   $result = mysqli_query($db, $sqllogin);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $check = mysqli_num_rows($result);

   if ($check == 1){
        $_SESSION['login_user'] = $username;
        header("location: index.php");
   }else{
        $message = "Your username or password is incorrect!";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post">
        <label>Username:</label><br>
        <input type="text" name="username" require><br>
        <label>Password:</label><br>
        <input type="password" name="password" require><br><br>
        <input type="submit" value="Login"></input>
    </form>
</body>
</html>