
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
    //myAjax();



    // alert("Hihidddd");
}

function reply_click(clicked_id){
    var button_id = clicked_id;
    // alert(button_id);
    strikeTask(button_id);
}
// function myAjax() {
//     $.ajax({
//          type: "GET",
//          url: 'ajax.php',
//         //  data:{action:'call_this'},
//          success:function() {
//            alert('Yes');
//          },
//          error:function(){
//              alert('No');
//          }

//     });
// }

// send clicked button to php by ajax
// function send_clicked_2_php(id){
//     $(document).ready(function(){
        
//         $('button').click(function(){
//             $.ajax({
//                 type: 'GET',
//                 url: 'getStatus',
//                 error: function(){
//                     alert('Wrong');
//                 },
//                 success: function(data){
//                     alert('Yes!');
//                 }
//             });
//             return false;        
//         });
//     });
// }
