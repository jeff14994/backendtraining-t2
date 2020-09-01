<?php
//include pdo connection (get $conn variable)
include("login.php");

//complete condition
if (isset($_GET["complete"])){
    //when comes to complete condition:
    if (isset($_GET["complete"])){
        $complete = $_GET["complete"]; 
        $complete_result = query_from_db($conn, $complete);
        if($complete_result == false){
            update_complete_2_db($conn, $complete);
            //Redirct back to todolist.php
            header("Location:todolist.php");   
        }else{
            //nothing happen
            echo "Error!";
        }
    }
}

// Update complete column from NULL to 1 (means that it was complete)
function update_complete_2_db($connection, $id){
    // echo "Updating...";
    // $sql_complete_update = "UPDATE `task` SET `complete`=:complete WHERE `id`=:id";
    // $id = intval($id);
    //Sql statement for pdo
    $sql_complete_update = "UPDATE tasks SET complete=? WHERE id=?";
    
    //PDO prepare and execute
    $stmt = $connection->prepare($sql_complete_update);
    //1 bind to complete = ?, $id bind to id = ?
    $stmt->execute([1, $id]);
    // echo $stmt->rowCount();
    }

// Query complete status from database
function query_from_db($connection, $id){
      $sql_complete_query = "SELECT complete FROM tasks WHERE id = ?";
      $stmt = $connection->prepare($sql_complete_query);
      $stmt->execute(array($id));
      $complete_record= $stmt->fetch();
      // print_r($complete_record);
      // echo "<br />".$complete_record["complete"]."...";
      $complete_result = $complete_record["complete"];
      return $complete_result;
}


?>