<?php
include "app/Users.php";

$users = new Users();
$rows = $users->tampil();
?>

<!DOCTYPE html>
<html>
<head>
    
<link href="images/avatar.ico" rel="shortcut icon">
    <title>UserAdmin</title>
</head>

   <link rel="stylesheet"href="css/style.css">


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
        <center>
            <div class="isi">
                <a class="tambah" href="usersinput.php">Tambah</a>
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>

                    </tr>
                    <?php foreach ($rows as $row) {
                        $no = 1;
                    ?>

                        <tr>
                            <td><?php echo $no++ ?>;</td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><a class="edit" href="usersedit.php?id=<?php echo $row['id']; ?>">Edit</a>
                                <a onclick="return confirm('Are You Sure')" class="delete" href="usersproses.php?delete-id=<?php echo $row['id']; ?>">Delete</>
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
</html>
