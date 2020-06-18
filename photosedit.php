<?php

include "app/Photos.php";

$id =  $_GET['id'];

$photos = new Photos();
$row = $photos->edit($id);

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
                <a href="photostampil.php">Photos</a>
                <a href="albumtampil.php">Album</a>
                <a href="logout.php">LogOut</a>

            </div>
        </center>
        <center>
            <h2>Edit Photos</h2>
        </center>
        <form method="POST" action="photosproses.php">
            <table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#FFA07A" align="center">
                <tr>
                    <td>Waktu</td>
                    <td><input type="date" name="name" value="<?= $row['photo_date']; ?>"></td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td><input type="text" name="text" value="<?= $row['title']; ?>"></td>
                </tr>
                <tr>
                    <td>Teks Photo</td>
                    <td><input type="text" name="text" value="<?= $row['photo_text']; ?>"></td>
                </tr>
                <tr>
                    <td>No Urut</td>
                    <td><input type="text" name="text" value="<?= $row['post_id']; ?>"></td>
                </tr>


                <tr>
                    <td></td>
                    <td><input type="submit" name="edit" value="EDIT"></td>
                </tr>
            </table>
        </form>
        
   <div class="footer">
            <center>Copyright &copy; Fioza Store Album 2020. Programed by Samsul Bahri Siagian</center>
        </div>