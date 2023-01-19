<?php

class DbImport implements iImport
{
    private string $table = 'user';

    public function dataInsert(array $data)
    {
        $connect = $this->dbconnect();
        $sql = "INSERT INTO $this->table ( `name`, `email`, `age` ) VALUE ( :name, :email, :age )";
        var_dump($data);
        $sth = $connect->prepare($sql);
        $name = $data['name'];
        $email = $data['email'];
        $age = $data['age'];
        $sth->bindParam('name', $name);
        $sth->bindParam('email', $email);
        $sth->bindParam('age', $age, PDO::PARAM_INT);
        $sth->execute();
    }


    private function dbconnect()
    {
        try {
            $connect = new PDO('mysql:host=localhost;dbname=dz', 'root', 'root');
            return $connect;
            echo "OK";
        } catch (\PDOException $e) {
                echo $e->getMessage();
        }
    }

}