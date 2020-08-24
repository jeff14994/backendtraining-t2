<!DOCTYPE html>
<html lang="en">

<?php include 'login.php';?>
<?php include 'check_input.php'?>
<script src="click_button_adjust.js"></script>


<head>
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
<body id="app-layout">
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
                    New Task
                </div>

                <div class="panel-body">
                    <!-- New Task Form -->
                    <form action="todolist.php" method="POST" class="form-horizontal">
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="task_name" id="task-name" class="form-control" value="">
                            </div>
                        </div>

                        <!-- Save Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" name="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Current Tasks -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Tasks
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <th>Task</th>
                            <th>&nbsp;</th>
                        </thead>
                        <tbody>
                            <form action="check_ui_status.php" method="get">
                                <?php include 'show_data.php' ?>
                            </form>
                            <?php 

                            // if (isset($_GET['complete']) == true){
                            //     echo "I get something!";
                            //     header("Location:complete.php?status=".$_GET['complete']."");
                            // }else{
                            //     echo "I get nothing!!!!";
                            // }

                            ?>
                            <?php //include 'check_ui_status.php' ?>
                            <?php //include 'complete.php' ?>
                        <!-- <tr>
                                <td class="col-sm-6">
                                    <del>Jogging</del>
                                </td> -->
                                <!-- Task Buttons -->
                                <!-- <td class="col-sm-6">
                                        <button type="submit" class="btn btn-success" disabled ><i class="fa fa-btn fa-thumbs-o-up"></i>completed</button>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-pencil"></i>edit</button>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i>delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col-sm-6">Homework</td> -->
                                <!-- Task Buttons -->
                                <!-- <td class="col-sm-6">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-btn fa-thumbs-o-up"></i>completed</button>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-pencil"></i>edit</button>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i>delete</button>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
