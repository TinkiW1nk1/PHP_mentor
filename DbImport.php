<?php

class DbImport implements iImport
{
    public function dataInsert(array $data)
    {
        $dsn = 'mysql:dbname=Dz;host=127.0.0.1';
        $login = 'root';
        $pass = 'root';
        $conn = new \PDO($dsn, $login, $pass);
        foreach ($data as $user){
            $sql = "INSERT INTO `users` (`firstname`, `age`, `email`) VALUES ('" . $user['name'] . "', '" . $user['Age'] . "', '" . $user['email'] . "')";
            $conn->query($sql);
        }
    }
}