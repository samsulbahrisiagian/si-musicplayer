<?php

include_once("Controller.php");

class Post extends Controller
{
    public function __construct()
    {
        $this->db = new Controller();
        $this->db = $this->db->Connect();
    }

    public function input()
    {

        $post_date = $_POST['post_date'];
        $slug = $_POST['slug'];
        $title = $_POST['title'];
        $post_text = $_POST['post_text'];
        $cat_id = $_POST['cat_id'];


        $eksekusi = "INSERT INTO tb_post (post_date, slug, title, post_text, cat_id) VALUES (:post_date, :slug, :title, :post_text, :cat_id)";

        $stmt = $this->db->prepare($eksekusi);
        $stmt->bindParam(":post_date", $post_date);
        $stmt->bindParam(":slug", $slug);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":post_text", $post_text);
        $stmt->bindParam(":cat_id", $cat_id);
        $stmt->execute();

        return false;
    }
    
    public function edit($id)
    {
        $sql = "SELECT * FROM tb_post WHERE id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $row = $stmt->fetch();
        return $row;
    }

    public function tampil()
    {
        $eksekusi = "SELECT * FROM tb_post JOIN tb_category ON tb_post.id = tb_category.cat_id";
        $stmt = $this->db->prepare($eksekusi);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_post WHERE id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return false;
    }
}
