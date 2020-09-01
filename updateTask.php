<?php
//include pdo connection (get $conn variable)
include("login.php");

//check if get edit button
$task = $_GET["task_name"];
$edit_id = $_GET["edit"];
if(isset($_GET["task_name"])){
    // echo "$task";
    //update new data to database
    update_complete_2_db($conn, $edit_id, $task);

    //back to todolist.php
    header("Location:todolist.php");
};




// Update complete column from NULL to 1 (means that it was complete)
function update_complete_2_db($connection, $id, $task){
    // echo "Updating...";
    // $sql_complete_update = "UPDATE `task` SET `complete`=:complete WHERE `id`=:id";
    // $id = intval($id);
    //Sql statement for pdo
    $sql_edit_update = "UPDATE tasks SET task=? WHERE id=?";
    
    //PDO prepare and execute
    $stmt = $connection->prepare($sql_edit_update);
    //1 bind to complete = ?, $id bind to id = ?
    $stmt->execute([$task, $id]);
    // echo $stmt->rowCount();
    }


?>