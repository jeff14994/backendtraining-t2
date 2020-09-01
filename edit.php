<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo-List</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .fa-btn {
                margin-right: 6px;
            }

            table button {
                margin-left: 20px
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Branding Image -->
                <a class="navbar-brand" href="">
                    Task List
                </a>
            </div>
        </div>
        </nav>
        <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Task
                </div>

                <div class="panel-body">
                    <!-- New Task Form -->
                    <form action="updateTask.php" method="get" class="form-horizontal">
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Input New Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="task_name" id="task-name" class="form-control" value="">
                                <input type="hidden" name="edit" value=<?php echo $_GET['edit'];?>>
                            </div>
                        </div>

                        <!-- Save Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" name="" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </body>
</html>

<!-- ';

// <a>Please input new task you wanna change...</a>
// <form action="updateTask.php" method="get">
// New task: <input type="text" name="name">
// <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-pencil"></i>edit</button>
// </form>

//save button  -->
