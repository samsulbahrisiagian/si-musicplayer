<?php

include "app/Category.php";

$id =  $_GET['id'];

$category = new Category();
$row = $category->edit($id);

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
            <h2>Edit Category</h2>
        </center>
        <form method="POST" action="categoryproses.php">
            <table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#FFA07A" align="center">
                <tr>
                    <td>Nama Kategori</td>
                    <td><input type="text" name="name" value="<?= $row['cat_name']; ?>"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td><input type="text" name="text" value="<?= $row['cat_text']; ?>"></td>
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