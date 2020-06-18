<?php

include_once("Controller.php");

class Users extends Controller
{
    public function __construct()
    {
        $this->db = new Controller();
        $this->db = $this->db->Connect();
    }

    public function input()
    {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $eksekusi = "INSERT INTO tb_user (nama, username, password) VALUES (:nama, :username, :password)";

        $stmt = $this->db->prepare($eksekusi);
        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        return false;
    }

    public function tampil()
    {
        $eksekusi = "SELECT * FROM tb_user";
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
        $eksekusi = "SELECT * FROM tb_user WHERE id=:id";
        $stmt = $this->db->prepare($eksekusi);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $eksekusi = "UPDATE tb_user set nama=:nama, username=:username, password=:password WHERE id=:id";
        $stmt = $this->db->prepare($eksekusi);
        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":id", $id);

        $stmt->execute();

        return false;
    }
    public function delete($id)
    {

        $sql = "DELETE FROM tb_user WHERE id=:id";
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
