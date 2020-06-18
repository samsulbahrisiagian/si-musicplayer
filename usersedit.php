<?php

include "app/Users.php";

$id = $_GET['id'];

$users = new Users();
$row = $users->edit($id);


?>



<link href="images/avatar.ico" rel="shortcut icon">
<link rel="stylesheet"href="css/style.css">

<body>

    <div class="utama">
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
        <center>
            <h2>Edit Users</h2>
        </center>
        <form method="POST" action="usersproses.php">
            <table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#DCFFFB" align="center">
                
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="id" value="<?= $row['id']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?= $row['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="<?= $row['username']; ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password" value="<?= $row['password']; ?>"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="btn-edit" value="UPDATE"></td>
                </tr>
            </table>
        </form>
           <div class="footer">
            <center>Copyright &copy; Fioza Store Album 2020. Programed by Samsul Bahri Siagian</center>
        </div>