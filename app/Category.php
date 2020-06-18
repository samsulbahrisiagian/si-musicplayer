<?php

include_once("Controller.php");

class Category extends Controller
{
    public function __construct()
    {
        $this->db = new Controller();
        $this->db = $this->db->Connect();
    }

    public function input()
    {

        $cat_name = $_POST['cat_name'];
        $cat_text = $_POST['cat_text'];

        $sql = "INSERT INTO tb_category (cat_name, cat_text) VALUES (:cat_name, :cat_text)";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":cat_name", $cat_name);
        $stmt->bindParam(":cat_text", $cat_text);
        $stmt->execute();

        return false;
    }
    public function tampil()
    {
        $sql = "SELECT * FROM tb_category";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($row = $stmt->fetch()) {
            $data[] = $row;
        }

        return $data;
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM tb_category WHERE cat_id=:cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();
        return $row;
    }

    public function update()
    {
        $catname = $_POST['name'];
        $cattext = $_POST['text'];
        $id = (isset($_POST['cat_id']) ? $_POST['cat_id'] : '');

        $sql = "UPDATE tb_category SET cat_name=:cat_name, cat_text=:cat_text WHERE cat_id=:cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_name", $catname);
        $stmt->bindParam(":cat_text", $cattext);
        $stmt->bindParam(":cat_id", $id);

        $stmt->execute();

        return false;
    }
    public function delete($id)
    {

        $sql = "DELETE FROM tb_category WHERE cat_id=:cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_id", $id);
        $stmt->execute();

        return false;
    }
}
