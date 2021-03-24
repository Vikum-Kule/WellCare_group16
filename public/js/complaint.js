
 window.onload = function() {
   // $('#customers').html('');
   
loadComplaints();



 }
 function loadComplaints(){
     const html2='<tr>'+
                '<th>ORDER NUMBER</th>'+
                '<th>DATE</th>'+
                '<th>COMPLAINT</th>'+
                ' </tr>';
                $('#customers').html(html2);

    $.ajax({
        type: 'get',
        url: '' + URLROOT + '/myOrders/getComplaint',
        
        contentType: "application/json; charset=utf-8",
        dataType: 'json',
        success: function (responce) {

            console.log(responce);
            responce.forEach(complaint => {
                const html= '<tr>'+
                            '<td>'+complaint.inquiryId+' </td>'+
                            '<td>'+complaint.inquiryDate+'</td>'+
                            '<td>'+complaint.inquiry+'</td>'+
                            '</tr>';

                $('#customers').append(html);


            });
          



        }
    });


 }



function sendComplaint() {

    // console.log("sudesh");
    var OrderNumber = $("#OrderNumber").val();
    var complaint = $("textarea#complaint").val();
   // $("textarea#msg").val(result.message);
    $.ajax({
        type: 'post',
        url: '' + URLROOT + '/myOrders/sendComplaint',
        data: JSON.stringify({
            OrderNumber: OrderNumber,
            complaint: complaint

        }),
        contentType: "application/json; charset=utf-8",
        dataType: 'json',
        success: function ($sucsess) {


            console.log($sucsess);
            if ($sucsess) {
                $('#successMessage').html("INQUIRY SUCCESSFULLY SENT...");

            } else {

                $('#successMessage').html("SOMTHING WENT WRONG....");
            }
            loadComplaints();


        }
    });

}