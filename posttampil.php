<?php
require_once "app/Post.php";

$post = new Post();
$rows = $post->tampil();
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
                <a class="tambah" href="postinput.php">Tambah</a>
                <table>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Post</th>
                        <th>Slug</th>
                        <th>Title</th>
                        <th>Post Text</th>
                        <th>Nama Cat</th>
                        <th>Aksi</th>

                    </tr>
                    <?php

                    $no = 1;

                    ?>
                    <?php foreach ($rows as $row) {    ?>

                        <tr>
                            <td><?php echo $no++ ?>;</td>
                            <td><?php echo $row['post_date']; ?></td>
                            <td><?php echo $row['slug']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['post_text']; ?></td>
                            <td><?php echo $row['cat_name']; ?></td>
                            <td><a class="edit" href="Postedit.php?id=<?php echo $row['id']; ?>">Edit</a>
                                <a onclick="return confirm('Are You Sure')" class="delete" href="postproses.php?delete-id=<?php echo $row['id']; ?>">Delete</td>
                            </td>
                        </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </center>

        
   <div class="footer">
            <center>Copyright &copy; Fioza Store Album 2020. Programed by Samsul Bahri Siagian</center>
        </div>

    </div>
</body>