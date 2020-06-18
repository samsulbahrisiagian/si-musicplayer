<?php
include "app/Category.php";

$category = new Category();
$rows = $category->tampil();
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
            <div class="isi">
                <a class="tambah" href="categoryinput.php">Tambah</a>
                <table>
                    <tr>

                        <th>Nama Category</th>
                        <th>Deskripsi</th>

                        <th>Aksi</th>

                    </tr>
                    <?php foreach ($rows as $row) {

                    ?>

                        <tr>

                            <td><?php echo $row['cat_name']; ?></td>
                            <td><?php echo $row['cat_text']; ?></td>

                            <td><a class="edit" href="categoryedit.php?id=<?php echo $row['cat_id']; ?>">Edit</a>
                                <a onclick="return confirm('Are You Sure')" class="delete" href="categoryproses.php?delete-id=<?php echo $row['cat_id']; ?>">Delete</>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </center>
       
   <div class="footer">
            <center>Copyright &copy; Fioza Store Album 2020. Programed by Samsul Bahri Siagian</center>
        </div>

    </div>
</body>