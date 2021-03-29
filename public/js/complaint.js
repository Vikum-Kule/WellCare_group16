
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
                            '<td>'+complaint.orderId+' </td>'+
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
    var OrderNumber = $("#OrderNumberSearch").val();
    var complaint = $("textarea#complaint").val();
   // $("textarea#msg").val(result.message);
    $.ajax({
        type: 'post',
        url: '' + URLROOT + '/myOrders/sendComplaint',
        data: JSON.stringify({
            OrderNumber: OrderNumber,
            complaint: complaint

        }),
        //contentType: "application/json; charset=utf-8",
        dataType: 'json',
        success: function ($sucsess) {


            console.log($sucsess);
            if ($sucsess) {
                $('#successMessage').html("INQUIRY SUCCESSFULLY SENT...");

            } else {

                $('#successMessage').html("INVALID ORDER ID....");
            }
            loadComplaints();


        }
    });

}
function searchFunction() {
    var OrderNumberSearch = $("#OrderNumberSearch").val();
    //console.log(OrderNumberSearch);
    $('#datalist').html("");
    $.ajax({
      type: 'post',
      url: ''+URLROOT+'/myOrders/OrderNumberSearch',
      data: JSON.stringify({
        searchOrderId:OrderNumberSearch
      }),
      dataType: 'json',
      success: function(preparedMyOrders) {
        console.log(preparedMyOrders);
        preparedMyOrders.forEach(preparedMyOrder => {
           
          const html='<option value="'+preparedMyOrder.orderId+'"/>';
          console.log(html);
          $('#datalist').append(html);
        });
  
      }
    });
  
  
  }