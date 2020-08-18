
function strikeTask(id, task){
    //覆蓋整個HTML檔案
    // document.write("this.disabled = true");
    
    // var taskName
    var message = document.getElementById(id);
    
    // alert(message);

    //strikethrough the task
    alert("Congratulations! You have done " + message.innerHTML + "!");
    // message.innerHTML = "123";
    message.innerHTML = "<del>"+ message.innerHTML + "</del>";
    
    // send_clicked_2_php(id);



    // alert("Hihidddd");
}

function reply_click(clicked_id){
    var button_id = clicked_id;
    // alert(button_id);
    strikeTask(button_id);
}

//send clicked button to php by ajax
// function send_clicked_2_php(id){
//     $("button #" + id).click(function(){
//         var seat_number = $(this).data(id);

//         $.ajax({
//             type: 'POST',
//             url: "send_clicked_button.php",
//             data: 'seat_number='+seat_number,
//             success: function(data){
//                 $(this).css("background", "red");
//             },
//             dataType: "json"
//         });
//     });
// }
