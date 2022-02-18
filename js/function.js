// NEW TASK 
    $(document).ready(function(){
    myTask();
    $("#newTask").on('click',function(){
        var currentForm = $('#newTaskForm')[0];
        var data = new FormData(currentForm);
        if($('#task').val()==''){
            alert('Please insert all missing fields');
        }else{
                $.ajax({
                        url: "php/newTask.php",
                        method: "POST",
                        dataType: "text",
                        data:data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success:function(response){
                            if(response == '1'){
                                myTask();
                                $('#addTask').modal('hide')
                                document.getElementById('newTaskForm').reset();
                            }
                            else{
                                alert('New Task Not Submit');
                            }
                        },
                        error:function(error){
                            console.log(error)
                        }
                    }) 
                }
        })
    })
// NEW TASK 

    // SHOW TASK
        function myTask(){
        $.ajax({
            url	:	"php/showTask.php",
            method:	"POST",
            data	:	{getTask:1},
            success	:	function(data){
                $("#showTask").html(data);
            }
        })
        }
    // SHOW TASK

// DELETE TASK
    function removeId(id){
        let yes = confirm('Do you want to delete this task?');
        if (yes){
            $.ajax({
                url: 'php/deleteTask.php',
                type: 'POST',
                dataType: 'json',
                data: {taskId: id},
                success : function(response){
                    if (response =  1){
                        myTask();
                    }else{
                        alert('Delete failed');
                    }
                }
            })
        }else{
            myTask();
        }
    }
// DELETE TASK

    // FETCH DATA FOR UPDATE TASK FORM
        function updateId(id){
        $('#updateTaskModal').modal('show');
        $.ajax({
            url: 'php/function.php',
            type: 'POST',
            dataType: 'json',
            data: {updateTaskId: id},
        })
        .done(function(response) {
            $('#taskID').val(response.id)
            $('#updateMyTask').val(response.myTodoList)
            })
        }
    // FETCH DATA FOR UPDATE TASK FORM

// UPDATE TASK FUNCTION
    $("body").delegate("#updateButton","click",function(e){
    let yes = confirm('Do you want to update this task?');
        if(yes){
            var currentForm = $('#updateTaskForm')[0];
            var data = new FormData(currentForm);
            $.ajax({
                url	:"php/updateTask.php",
                method: "POST",
                dataType: "text",
                data:data,
                cache: false,
                contentType: false,
                processData: false,
                success:function(response){
                if(response == 1){
                    myTask();
                    alert('Update Successfully');
                    $('#updateTaskModal').modal('hide')
                }else{
                    alert('Update Failed');
                    $('#updateTaskModal').modal('hide')
                }   
                },
            }); 
        }else{
            myTask();
            $('#updateTaskModal').modal('hide')
        }
    });
// UPDATE TASK FUNCTION
