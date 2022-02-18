<?php   
        require 'connection.php';
        $task = $_POST['task'];
        $qry = 'INSERT INTO `todolist` (myTodoList) VALUES (:task)';
        $statement = $pdo->prepare($qry);
        if($statement->execute([':task'=>$task])){
            echo 1;
        }else{
            echo 0;
        }   
?>