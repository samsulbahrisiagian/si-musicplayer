<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="images/avatar.ico" rel="shortcut icon">t
    <title>My Gallery</title>
    <link rel="stylesheet"href="css/style.css">
</head>

<body>
    <div class="">
        <div class="kepala">
            <center><img src="layout/assets/images/header.png" alt=""></center>
        </div>
        <center>
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="userstampil.php">Users</a>
                <a href="categorytampil.php">Category</a>
                <a href="posttampil.php">Post</a>
                <a href="photostampil.php">Phost</a>
                <a href="albumtampil.php">Album</a>
                <a href="logout.php">LogOut</a>
            </div>
        </center>
        <div class="isi">
            <?php
            if (isset($_GET['page'])) {
                include $_GET['page'] . ".php";
            } else {
                include "main.php";
            }

            ?>
        </div>
        <div class="footer">
            <center>Copyright &copy; Fioza Store Album 2020. Programed by Samsul Bahri Siagian</center>
        </div>
    </div>
</body>

</html>