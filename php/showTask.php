<?php
require 'connection.php';
error_reporting(0);
if(isset($_POST["getTask"])){
    $qry = "SELECT * FROM todolist";
    $statement=$pdo->prepare($qry);
    $statement->execute();
    $myTask = $statement->fetchAll(PDO::FETCH_OBJ);
    foreach($myTask as $taskList){
            $n++;
            echo "
            <tr>
                <td class='text-center'>$n</td>
                <td  class='text-center'>$taskList->myTodoList</td></td>
                <td class='text-center'>
                    <button type='button' onclick=updateId('$taskList->id') class='btn btn-primary'>UPDATE</button> 
                    <button type='button' onclick=removeId('$taskList->id') class='btn btn-danger px-3'>DELETE</button>
                </td>
            </tr>
            ";
    }
}
?>