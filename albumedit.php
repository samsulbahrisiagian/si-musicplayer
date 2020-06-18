<?php

include "app/Album.php";

$id = $_GET['id'];

$album = new Album();
$row = $album->edit($id);


?>

<?php
include_once('app/Controller.php');
include_once('app/Photos.php');

$photos = new Photos();
$rowPhotos = $photos->tampil();

?>

<center>
    
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
            <h2>Edit Album</h2>
        </center>
        <form method="POST" action="albumproses.php">
            <table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="FFA07A" align="center">
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="id" value="<?= $row['id']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Album</td>
                    <td><input type="text" name="album_name" value="<?= $row['album_name']; ?>"></td>
                </tr>
                <tr>
                    <td>Teks Album</td>
                    <td><input type="text" name="album_text" value="<?= $row['album_text']; ?>"></td>
                </tr>
                 <tr>
                    <td>Photo Id</td>
                    <td><select name="photo_id" id="">
                            <?php
                            foreach ($rowPhotos as $row) { ?>
                                <option value="<?= $row['id']; ?>"><?= $row['id']; ?></option>


                            <?php } ?>
                        </select>

                    </td>
                </tr>


                <tr>
                    <td></td></td>
                </tr>


                <tr>
                    <td></td>
                    <td><input type="submit" name="btn-update" value="UPDATE"></td>
                </tr>
            </table>
        </form>
           <div class="footer">
            <center>Copyright &copy; Fioza Store Album 2020. Programed by Samsul Bahri Siagian</center>
        </div>