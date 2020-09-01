<?php
//include pdo connection (get $conn variable)
include("login.php");

//when comes to delete condition  
if (isset($_GET['delete'])){
    $delete = $_GET['delete'];
    delete_data($conn, $delete);
    //Redirct back to todolist.php
    header("Location:todolist.php");

}else{
    //Redirct back to todolist.php
    header("Location:todolist.php");
}
    
function delete_data($connection, $id){
    $sql_delete = "DELETE FROM tasks WHERE id = ?";
    $stmt = $connection->prepare($sql_delete);
    $stmt->execute(array($id));

}

?>