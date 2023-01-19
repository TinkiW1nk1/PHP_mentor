<?php
include 'app/iImport.php';
include 'app/DbImport.php';
include "app/ReportImport.php";

include 'newUser.php';
/*if(!empty($_POST)){
    $add = new DbImport();
    $add->dataInsert($_POST);
}*/

//*****************создание БД**********************************
/*$host = "mysql:host=localhost";
$login = 'root';
$pass = 'root';
$connect = new \PDO($host, $login, $pass);*/
/*$sql = "CREATE DATABASE Dz";*/


/*$host = "mysql:host=localhost;dbname=dz";
$login = 'root';
$pass = 'root';
$connect = new \PDO($host, $login, $pass);*/

/* ********************Индекс для поля email************* */
/*$sql = "CREATE UNIQUE INDEX user_email_index ON user (email)";*/

/* *******индекс для запроса SELECT * FROM `users` WHERE `age` > 15************** */
//$sql = "CREATE INDEX user_age_15_index ON user (age)";/
//$connect->query($sql);


//*********************Создание таблицы*******************************
/*$sql = "CREATE TABLE `dz`.`user`
 ( `id` INT NOT NULL AUTO_INCREMENT ,
 `name` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
 `email` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
 `age` INT(3) NOT NULL ,
 `reg_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`))
 ENGINE = InnoDB";

if ($connect->query($sql) === TRUE) {
    echo "Database created successfully";

} else {
    echo "Error creating database: " . $connect->error;
}*/


