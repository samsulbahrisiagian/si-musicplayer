<?php
include_once "app/Controller.php";
include_once "app/Album.php";



$album = new Album();

if (isset($_POST['simpan'])) {
    $album->input();
    header("location:albumtampil.php");
}

if (isset($_POST['btn-update'])) {
    $album->update();
    header("location:albumtampil.php");
}
if ($_GET['delete-id']) {
    $album->delete($_GET['delete-id']);
    header("location:albumtampil.php");
}
