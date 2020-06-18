<?php

include_once("Controller.php");

class Photos extends Controller
{
    public function __construct()
    {
        $this->db = new Controller();
        $this->db = $this->db->Connect();
    }

    public function input()
    {

        $photo_date = $_POST['photo_date'];
        $title = $_POST['title'];
         $photo_text = $_POST['photo_text'];
        $post_id = $_POST['post_id'];

        $sql = "INSERT INTO tb_photos (photo_date, title, photo_text, post_id) VALUES (:photo_date, :title, :photo_text, :post_id)";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":photo_date", $photo_date);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":photo_text", $photo_text);
        $stmt->bindParam(":post_id", $post_id);
        $stmt->execute();

        return false;
    }
    public function tampil()
    {
        $eksekusi = "SELECT * FROM tb_photos JOIN tb_post ON tb_photos.id = tb_post.cat_id";
        $stmt = $this->db->prepare($eksekusi);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM tb_photos WHERE id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $row = $stmt->fetch();
        return $row;
    }

    public function update()
    {
        $catname = $_POST['name'];
        $cattext = $_POST['text'];
        $id = (isset($_POST['id']) ? $_POST['id'] : '');

        $sql = "UPDATE tb_photos SET photo_date=:photo_date, title=:title, photo_text=:photo_text, post_id=:post_id WHERE id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":photo_date", $photodate);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":photo_text", $phototext);
        $stmt->bindParam(":post_id", $postid);
        $stmt->bindParam(":id", $id);

        $stmt->execute();

        return false;
    }
    public function delete($id)
    {

        $sql = "DELETE FROM tb_photos WHERE id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return false;
    }
}
