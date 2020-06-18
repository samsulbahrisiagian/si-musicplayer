<?php

class Controller
{

    protected  $db;

    public function Connect()
    {



        return new PDO("mysql:host=localhost;dbname=databaseuts", "root", "");
    }
}
