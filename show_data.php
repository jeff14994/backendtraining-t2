<?php

//PDO query
$sql = 'SELECT id, task FROM tasks order by id desc';
foreach($conn->query($sql) as $row){
    // print $row['task']."<br />";
    createHtmlCode($row);
}

//放一個form表單
//使用$_GET拿資料
function createHtmlCode($task_name){
    
echo 
"<tr>";
    echo 
    // "<td name=\"complete$task_name[0]\" id=\"$task_name[0]\" class=\"col-sm-6\">$task_name[1]</td>";
    "<td id=\"$task_name[0]\" class=\"col-sm-6\">$task_name[1]</td>
    <!-- Task Buttons -->";
    
    echo 
        '<td class="col-sm-6">';
    echo 
        "
        <input type=\"submit\" value=\"Complete\" class=\"btn btn-success\" name=\"complete\" id=\"$task_name[0]\" onclick=\"this.disabled=true, reply_click(this.id)\"/>
        <input type=\"submit\" value=\"Edit\" class=\"btn btn-primary\" name=\"edit\">
        <button type=\"submit\" class=\"btn btn-danger\" name=\"delete\"><i class=\"fa fa-btn fa-trash\"></i>delete</button>
    </td>

</tr>";

}

// <button type="submit" class="btn btn-success" name="complete" onclick="this.disabled = true"><i class="fa fa-btn fa-thumbs-o-up"></i>completed</button>
// <button type=\"submit\" class=\"btn btn-success\" name=\"complete\" href=\"todolist.php?del_task=$task_name\['id'\]\" id=\"$task_name[0]\" onclick=\"this.disabled=true, reply_click(this.id)\"><i class=\"fa fa-btn fa-thumbs-o-up\"></i>completed</button>

// <tr>
//     <td class="col-sm-6">
//         <del>Jogging</del>
//     </td>
//     <!-- Task Buttons -->
//     <td class="col-sm-6">
//         <button type="submit" class="btn btn-success" disabled ><i class="fa fa-btn fa-thumbs-o-up"></i>completed</button>
//         <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-pencil"></i>edit</button>
//         <button type="submit" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i>delete</button>
//     </td>
// </tr>
// <tr>
//     <td class="col-sm-6">Homework</td>
//     <!-- Task Buttons -->
//     <td class="col-sm-6">
//         <button type="submit" class="btn btn-success"><i class="fa fa-btn fa-thumbs-o-up"></i>completed</button>
//         <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-pencil"></i>edit</button>
//         <button type="submit" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i>delete</button>
//     </td>
//  </tr>
 
?>

