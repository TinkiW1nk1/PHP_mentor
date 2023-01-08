<?php
include 'iImport.php';
include 'DbImport.php';
include "ReportImport.php";
$data = [
    ['name' => 'Tom', 'Age' => 25,'email' => 'test@gmail.com'],
    ['name' => 'Oleg', 'Age' => 45,'email' => 'test2@gmail.com'],
    ['name' => 'Nikita', 'Age' => 35,'email' => 'test3@gmail.com'],
];
function debug( $arr){
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";
}

/*$importDb = new DbImport();
$importDb->dataInsert($data);*/

$report = new ReportImport();
$report->dataInsert($data);
//*****************создание БД**********************************
/*$host = 'localhost';
$login = 'root';
$pass = 'root';
$connect = new mysqli($host, $login, $pass);
$sql = "CREATE DATABASE Dz";
if ($connect->query($sql) === TRUE) {
    echo "Database created successfully";

} else {
    echo "Error creating database: " . $connect->error;
}

$connect->close();*/

//*********************Создание таблицы*******************************
/*$host = 'localhost';
$db = 'Dz';
$login = 'root';
$pass = 'root';
$connect = new mysqli($host, $login, $pass, $db);
$sql = "CREATE TABLE Users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
age INT(2) NOT NULL,
email VARCHAR(50)
)";
if($connect->query($sql) === true){
    echo "Table Create";
}else{
    echo 'Error';
}*/