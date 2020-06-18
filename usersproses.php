<?php
include_once "app/Controller.php";
include_once "app/Users.php";

$users = new Users();

if ($_POST['simpan']) {
    $users->input();
    header("location:userstampil.php");
}

if ($_POST['btn-edit']) {
    $users->update();
    header("location:userstampil.php");
}

if ($_GET['delete-id']) {
    $users->delete($_GET['delete-id']);
    header("location:userstampil.php");
}
