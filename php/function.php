<?php
require 'connection.php';
error_reporting(0);
// FETCH UPDATE TASK 
    if(isset($_POST['updateTaskId'])){
        $updateTaskId = $_POST['updateTaskId'];
        $qry = "SELECT * FROM todolist WHERE id = $updateTaskId";
        $statement=$pdo->prepare($qry);
        $statement->execute();
        $myTask = $statement->fetchAll(PDO::FETCH_OBJ);
        foreach($myTask as $taskList){
            echo json_encode($taskList);
        }
    }
// FETCH UPDATE TASK 
?>