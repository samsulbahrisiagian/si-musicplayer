<?php
include_once "app/Controller.php";
include_once "app/Category.php";



$category = new Category();

if (isset($_POST['simpan'])) {
    $category->input();
    header("location:categorytampil.php");
}

if (isset($_POST['edit'])) {
    if ($category->update()) {


        echo "<script>alert('Success');</script>";
        echo "<script>location='categorytampil.php';</script>";
    } else {
        echo "<script>alert('Failed');</script>";
    }
}

if ($_GET['delete-id']) {
    $category->delete($_GET['delete-id']);
    header("location:categorytampil.php");
}
