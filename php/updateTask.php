<?php
require 'connection.php';
$taskID = $_POST['taskID'];
$updateMyTask = $_POST['updateMyTask'];
$qry = "UPDATE todolist SET myTodoList = :updateMyTask WHERE id = $taskID";
$statement = $pdo->prepare($qry);
if($statement->execute([':updateMyTask' => $updateMyTask])){
    echo 1;
}else{ 
    echo 0;
}   
?>  