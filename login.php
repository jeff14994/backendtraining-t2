<?php

//ip address, user name, passwd, table name
$servername= "127.0.0.1";
$username = "root";
$password = "root851020";
$table_name = 'todo';

//PDO connection

try {
    $conn = new PDO("mysql:host=$servername;dbname=$table_name", $username, $password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";

} catch (PDOException $e){
    echo "Connection failed: ".$e->getMessage();
}


?>