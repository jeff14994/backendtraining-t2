<?php
include("login.php");
if (isset($_GET["complete"]) == true){
    
        $complete = $_GET["complete"];
        
        // Query data from database
        $sql_complete_query = "SELECT complete FROM tasks WHERE id = ?";
        $stmt = $conn->prepare($sql_complete_query);
        $stmt->execute(array($complete));
        $complete_record= $stmt->fetch();
        // print_r($complete_record);
        // echo "<br />".$complete_record["complete"]."...";
        $complete_result = $complete_record["complete"];

        // Update data to database
        // $sql_complete_update = "UPDATE `task` SET `complete`=:complete WHERE `id`=:id";
        $sql_complete_update = "UPDATE tasks SET complete=? WHERE id=?";
        
        
        if($complete_result == false){
            //Update complete column to 1 (means that it was complete)
            // echo "Updating...";
            $stmt = $conn->prepare($sql_complete_update);
            $stmt->execute([1, $complete]);
            // echo $stmt->rowCount();
            header("Location:todolist.php");
            
        }else{
            //Show strike-through layout
            header("Location:todolist.php");
            echo "Rendering your website...";
            
        }
        // header("Location:todolist.php");
    
    
    
    
    // echo $complete;
    // if ($complete == false){
    //         $complete = true;
    //     }else{
    //         $complete = false;
    //     }
}


?>