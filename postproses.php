<?php

include_once "app/Controller.php";
include_once('app/Post.php');


$post = new Post();

if ($_POST['simpan']) {
    $post->input();
    header("location:posttampil.php");
}


if ($_POST['edit']) {
    $post->update();
    header("location:posttampil");

}




if ($_POST['delete-id']) {
    $post->delete();
    header("location:posttampil.php");
}