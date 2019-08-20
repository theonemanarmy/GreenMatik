<?php

class Database{
    public static function connect(){
        $connection = new mysqli("localhost", "root", "", "greenmatikOriginal");
        $connection->query("SET NAMES 'utf8'");

        return $connection;
    }
}