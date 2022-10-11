<?php
session_start();
include_once('conn.php');

    if(isset($_POST['submit'])){

        $task=$_POST['to_do'];

        if(empty($task)){
            header("Location: ../index.php?message=error");
        }else{
            $stmt="INSERT INTO task (to_do) VALUE('$task')";
            $_SEESION['alert'] = "Task added below";
            header("Location: ../index.php?message=success");
            $conn->exec($stmt);
        }

        
    }

//Function to fecth all to-do-datas
    function fetchAll($query){
        $conn = $GLOBALS['conn'];
        $stmt = $conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
?>