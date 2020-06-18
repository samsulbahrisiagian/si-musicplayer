<?php
require_once "app/Album.php";

$album = new Album();
$rows = $album->tampil();
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
            <div class="isi">
                <a class="tambah" href="albuminput.php">Tambah</a>
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama Album</th>
                        <th>Teks Album</th>
                        <th>No Photo</th>
                        <th>Aksi</th>

                    </tr>
                    <?php

                    $no = 1;

                    ?>
                    <?php foreach ($rows as $row) {    ?>
                        
                            <td><?php echo $no++ ?>;</td>
                            <td><?php echo $row['album_name']; ?></td>
                            <td><?php echo $row['album_text']; ?></td>
                            <td><?php echo $row['photo_id']; ?></td>
                            <td><a class="edit" href="albumedit.php?id=<?php echo $row['id']; ?>">Edit</a>
                                <a onclick="return confirm('Are You Sure')" class="delete" href="albumproses.php?delete-id=<?php echo $row['id']; ?>">Delete</td>
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