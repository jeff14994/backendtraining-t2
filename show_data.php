<?php

//PDO query
$sql = 'SELECT task FROM tasks order by id desc';
foreach($conn->query($sql) as $row){
    // print $row['task']."<br />";
    createHtmlCode($row);
}


function createHtmlCode($task_name){
    
echo 
"<tr>";
    echo 
    "<td class=\"col-sm-6\">$task_name[0]</td>";
    
    echo 
        '</td>
        <td class="col-sm-6">';
    echo 
        '
        <button type="submit" class="btn btn-success" name="complete" onclick="this.disabled = true"><i class="fa fa-btn fa-thumbs-o-up"></i>completed</button>
        <button type="submit" class="btn btn-primary" name="edit"><i class="fa fa-btn fa-pencil"></i>edit</button>
        <button type="submit" class="btn btn-danger" name="delete"><i class="fa fa-btn fa-trash"></i>delete</button>
    </td>

</tr>';

}



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

