<?php

include_once("Controller.php");

class Album extends Controller
{
    public function __construct()
    {
        $this->db = new Controller();
        $this->db = $this->db->Connect();
    }

    public function input()
    {
        $album_name = $_POST['album_name'];
        $album_text = $_POST['album_text'];
        $photo_id = $_POST['photo_id'];
        

        $eksekusi = "INSERT INTO tb_album (album_name, album_text, photo_id) VALUES (:album_name, :album_text, :photo_id)";

        $stmt = $this->db->prepare($eksekusi);
        $stmt->bindParam(":album_name", $album_name);
        $stmt->bindParam(":album_text", $album_text);
        $stmt->bindParam(":photo_id", $photo_id);
        $stmt->execute();

        return false;
    }


    public function listphotos()
    {
        $sql = "SELECT * FROM tb_photos";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($row = $stmt->fetch()) {
            $data[] = $row;
        }

        return $data;
    }

    public function tampil()
    {
        $eksekusi = "SELECT * FROM tb_album";
        $stmt = $this->db->prepare($eksekusi);
        $stmt->execute();

        $data = [];

        while ($row = $stmt->fetch()) {
            $data[] = $row;
        }

        return $data;
    }
    public function edit($id)
    {
        $eksekusi = "SELECT * FROM tb_album WHERE id=:id";
        $stmt = $this->db->prepare($eksekusi);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
      
        $album_name = $_POST['album_name'];
        $album_text = $_POST['album_text'];
        $photo_id = $_POST['photo_id'];
        $id = $_POST['id'];

        $sql = "UPDATE tb_album set album_name=:album_name, album_text=:album_text, photo_id=:photo_id WHERE id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":albu_name", $album_name);
        $stmt->bindParam(":album_text", $album_text);
        $stmt->bindParam(":photo_id", $photo_id);
        $stmt->bindParam(":id", $id);

        $stmt->execute();

        return false;
    }
    
    public function delete($id)
    {

        $sql = "DELETE FROM tb_album WHERE id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return false;
    }

    public function Login($username, $password)
    {
        if (!empty($username) && !empty($password)) {
            $st = $this->db->prepare("select * from tb_user where username=? AND password=?");
            $st->bindParam(1, $username);
            $st->bindParam(2, $password);
            $st->execute();
            $data = $st->fetchAll();
            foreach ($data as $rows_user) {
                $_SESSION['id'] = $rows_user['id'];
                $_SESSION['username'] = $rows_user['username'];
                $_SESSION['password'] = $rows_user['password'];
                $_SESSION['nama'] = $rows_user['nama'];
            }


            if ($st->rowCount() == 1) {

                echo "<script>alert('Login Has Been Success');</script>";
                echo "<script>location='index.php';</script>";
            } else {
                echo "<script>alert('Incorrect Your Email And Password');</script>";
                echo "<script>location='login.php';</script>";
            }
        } else {
            echo "<script>alert('Please Input Your Password And Email');</script>";
            echo "<script>location='login.php';</script>";
        }
    }
}
