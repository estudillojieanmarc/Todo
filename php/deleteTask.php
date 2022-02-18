<?php
require 'connection.php';
    if(isset($_POST["taskId"])){
        $id = $_POST['taskId'];
        $qry = "DELETE FROM `todolist` WHERE `id` = '$id'";
        $statement=$pdo->prepare($qry);
        $statement->execute();
        if($statement){
            echo 1;
        }else{
            echo 0;
        }
    }
?>