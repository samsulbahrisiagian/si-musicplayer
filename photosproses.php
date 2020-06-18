<?php
include_once "app/Controller.php";
include_once "app/Photos.php";



$photos = new Photos();

if (isset($_POST['simpan'])) {
    $photos->input();
    header("location:photostampil.php");
}

if (isset($_POST['edit'])) {
    if ($photos->update()) {


        echo "<script>alert('Success');</script>";
        echo "<script>location='photostampil.php';</script>";
    } else {
        echo "<script>alert('Failed');</script>";
    }
}

if ($_GET['delete-id']) {
    $photos->delete($_GET['delete-id']);
    header("location:photostampil.php");
}
