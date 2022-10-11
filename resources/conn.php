<?php

$servername = "localhost";
$username = "root";
$password = null;
$db_name = "todo_list";


try{
    $conn = new PDO("mysql:host=$servername; dbname=$db_name", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Database connected";

    // $sql= "CREATE DATABASE todo_list";
    // $conn->exec($sql);
    

    // $sql="CREATE TABLE task(
    //     id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     task VARCHAR (255)
    // )";

    // $conn->exec($sql);
    // echo "Table created";
    
}

catch(PDOException $e){
    echo $e->getMessage();
}

?>