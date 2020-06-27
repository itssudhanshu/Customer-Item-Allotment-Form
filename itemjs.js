// function saveItem() {
//     // var data = new FormData(this);
//     $.ajax({
//         url: "saveitem.php",
//         // type: "POST",
//         // data: $("#itemdet").serialize(),
//         // // contentType: false,
//         // // cache: false,
//         // // processData: false,
//         // success: function(msg) {
//         //     alert(msg);  
//         // }
//     });
// }
$(document).ready(function (event) {
    $("#saveitem").click(function (event) {
        event.preventDefault();
        //var data = new FormData(this);
        //alert(data);
        var iname = $("#iname").val();
        var iunit = $('#iunit option:selected').text();
        //alert(iname+iunit);

        $.ajax({
            url: "saveitem.php",
            type: "post",
            data: "iname=" + iname + "&iunit=" + iunit,
            success: function (msg) {
                alert(msg);
                $("#iname").val("");
                $('#iunit option:selected').text("kg");
            }
        });
    });
});

function showUser() {
    $.ajax({
        url: "items.php",
        success: function (data) {
            $("#myModal").modal("show");
            //alert(data);
        }
    });
}

$(document).ready(function (event) {
    $("#custdet").click(function (event) {
        event.preventDefault();
        //var data = new FormData(this);
        //alert(data);
        // var iname = $("#iname").val();
        // var iunit = $('#iunit option:selected').text();
        //alert(iname+iunit);

        $.ajax({
            url: "savecustomer.php",
            type: "post",
            //enctype: "multipart/form-data",
            data: $("#customerdet").serialize(),
            success: function (msg) {
                alert(msg);
                $("#cname").val("");
                $("#cemail").val("");
                $("#cmobile").val("");
                $("#caddress").val("");
            }
        });
    });
});

// $(document).ready(function (){
//     $('#selectitem').click(function(){
//         var i =0;
//         var hid = $("#id2").val();
//         $.ajax({
//             url: "fromdb.php",
//             method: "POST",
//             data: "id="+hid,
//             dataType: "json",
//             success: function(results){
//                 while(i<results.length){
//                     console.log(results[i]);
//                 //     var id = val(results[i].id);
//                 //     var  iname= text(results[i].iname);
//                 //    // alert(id+iname);
//                 //      $("#selectitem").html('<option value="'+id+'">'+iname+'</option>');
//                     i++;
//                 }
//             }
//         });
//     });
// });

function getCustomerList(){
    var i =0;
    var id = $("#id1").val();
    $.ajax({
        url: "fromdb.php",
        method: "POST",
        data: "id="+id,
        //dataType: "json",
        success: function(results){
            //alert(results);
            $("#selectcust").html(results);
        }
    });
}


function getItemList(){
    var i =0;
    var hid = $("#id2").val();
    $.ajax({
        url: "fromdb.php",
        method: "POST",
        data: "id="+hid,
        //dataType: "json",
        success: function(results){
                $("#selectitem").html(results);
        }
    });
}

$(document).ready(function () {
    var i = 1;
    $("#add").click(function () {
        i++;
        $.ajax({
            url: "addmore_form.php",
            type: "post",
            data: "id="+i,
            success: function (data) {
                $(".txtHint").append(data);
                //alert(data);
            }
        });

    });
});

$(document).on('click','.btn-remove',function () {
    var button_id = $(this).attr("id");
     $("#row"+button_id+"").remove();
    //alert(button_id);
    });

function saveItemAllot() {
    $.ajax({
        url: "saveItemAllot.php",
        type: "post",
        data: ("#itemAllot").serialize(),
        success: function(data){
            alert(data);
        }
    });
}