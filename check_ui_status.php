<?php 

echo $_GET['complete'];
if (isset($_GET['complete']) == true || isset($_GET['edit']) == true || isset($_GET['delete']) == true){
    // echo "I get something!";
    if($_GET['edit'] == true){
        header("Location:edit.php?id=".$_GET['id_1']);
    }
}else{
    echo "I get nothing";
}

?>