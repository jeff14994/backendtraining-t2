<?php
//check if get edit button

//place to change the task


//save button 

//update new data to database

//back to todolist.php

header("Location:todolist.php");

$edit_id = $_GET['edit'];

if ($edit_id){
    echo "I am now updating new data...";
    echo $edit_id;
    
} 


?>