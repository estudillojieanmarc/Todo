<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>ToDo</title>
</head>
<body>
    <!-- MY APP -->
        <div class="container mt-4">
            <div class="row mt-5">
                <div class="col-10">
                    <h4>TODO APPLICATION</h4>
                </div>
                <div class="col-2">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#addTask" class="btn btn-dark px-4">CREATE NEW</button> 
                </div>
            </div>
        <table class="table mt-4 table-bordered">
            <thead>
                <tr>
                    <th class="col-2  text-center">#</th>
                    <th class="col-7  text-center">MY TODO LIST</th>
                    <th class="col-3 text-center">ACTION</th>
                </tr>
            </thead>
            <tbody id="showTask"></tbody>
        </table>
        </div>
    <!-- MY APP -->

    <!-- JS SCRIPT -->
        <script src="js/jquery.js"></script>
        <script src="js/function.js"></script>
        <script src="js/bootstrap.js"></script>
    <!-- JS SCRIPT -->

    <!-- MODAL -->
        <!-- CREATE NEW TASK -->
            <div class="modal fade" id="addTask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-11">
                                    <h5 class="modal-title" id="exampleModalLabel">CREATE NEW TASK</h5>
                                </div>
                                <div class="col-1">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            </div>
                            <form id="newTaskForm">
                                <div class="mb-3">
                                    <textarea style="resize:none;" class="form-control my-3" name="task" id="task" rows="5" placeholder="Input Your Task Here"></textarea>
                                </div>                                                               
                            <div class="row">
                                <div class="col-4 ms-auto">
                                    <button type="button" id="newTask" class="btn btn-primary btn-large px-4">SUBMIT</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- CREATE NEW TASK -->

        <!-- UPDATE TASK -->
            <div class="modal fade" id="updateTaskModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-11">
                                <h5 class="modal-title" id="exampleModalLabel">UPDATE TASK</h5>
                            </div>
                            <div class="col-1">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="container" id="updateTaskLayout">
                        </div>
                            <form id='updateTaskForm'>
                            <div class='mb-3'>
                                <input type='hidden' name='taskID' id='taskID'>
                                <textarea style='resize:none;' class='form-control my-3' name='updateMyTask' id='updateMyTask' rows='5'></textarea>
                            </div>                                                               
                            <div class='row'>
                                <div class='col-4 ms-auto'>
                                    <button type='button' id='updateButton' class='btn btn-primary px-2'>Save Changes</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <!-- UPDATE TASK -->
    <!-- MODAL -->
</body>
</html>