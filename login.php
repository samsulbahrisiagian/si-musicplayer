<?php
session_start();
require_once "app/Users.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $object  = new Users();
    $object->Login($username, $password);
}

?>
<!DOCTYPE html>
<html>
<head>
    
<link href="images/avatar.ico" rel="shortcut icon">
    <title>Login Fioza Album</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>

<div class="formlogin">
        
       
    <h2>Silakan Login</h2>
    <img src="images/avatar.png" class="user">
    <form method="POST" action="">
    <table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="grey" align="center">
        
           <p>Username</p>
            <input type="text" name="username" placeholder="Masukkan Username">
        
            <p>Password</p>
            <input type="password" name="password" placeholder="Masukkan Password">

        
            
            <input type="submit" name="submit" value="SIMPAN">
             <input type="reset" name = "" value="Reset">
    </table>
</form>
</div>

</body>
</html>

