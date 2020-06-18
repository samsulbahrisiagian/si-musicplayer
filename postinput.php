<?php
include_once('app/Controller.php');
include_once('app/Category.php');

$category = new Category();
$rowCategory = $category->tampil();

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
            <h2>ADD Post</h2>
        </center>
        <form method="POST" action="postproses.php">
            <table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#DCFFFB" align="center">
                <tr>
                    <td>Tanggal Post</td>
                    <td><input type="date" name="post_date"></td>
                </tr>
                <tr>
                    <td>Slug</td>
                    <td><input type="text" name="slug"></td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td>Post Text</td>
                    <td><input type="text" name="post_text"></td>
                </tr>
                <tr>
                    <td>Cat Name</td>
                    <td><select name="cat_id" id="">
                            <?php
                            foreach ($rowCategory as $row) { ?>
                                <option value="<?= $row['cat_id']; ?>"><?= $row['cat_id']; ?></option>


                            <?php } ?>
                        </select></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
           <div class="footer">
            <center>Copyright &copy; Fioza Store Album 2020. Programed by Samsul Bahri Siagian</center>
        </div>