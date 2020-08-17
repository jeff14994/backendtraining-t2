<?php

if (isset($_POST['submit'])){
    if (!empty($_POST['task_name'])){
        $task = $_POST['task_name'];
        
        //SQL insert data
        $sql = "INSERT INTO `tasks` (task) VALUES (:task)";
        
        //PDO prepare statement
        $stmt = $conn->prepare($sql);
        
        //bind parameters
        $stmt->bindParam(':task', $task);

        //execute statement
        $stmt->execute();
    }else{
        $warning_messages = "大大！You must fill in the input first";
        phpAlert($warning_messages);


    }
}

function phpAlert($msg){
    echo '<script type="text/javascript">alert("'.$msg.'")</script>';
}

?>