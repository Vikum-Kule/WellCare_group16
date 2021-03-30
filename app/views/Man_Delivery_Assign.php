<?php require_once ($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_header.php");?>
<script src="<?php echo URLROOT ?>/public/js/jquery-3.5.1.min.js"></script>

  <script>
      var URLROOT= "<?php echo URLROOT ?>"
  </script>
 
<div class="wrapper">
        <div class="row">
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3><div id="totaldrugs"></div></h3>
                    <p>Total Medicines</p>
                </div>
            </div>
           <!-- <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>In progress</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>Completed</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>Issues</p>
                </div>
            </div>-->
        </div>

        <div class="card">
                    <div class="card-header">
                        <h3>
                            Assigning Orders
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table id="assignDliveryPerson"> 
                            <thead>
                                <tr>
                                    
                                    <th>Order ID</th>
                                    <th>Delivery Person</th>
                                    <th>Assign A Delivery Person</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                           <!-- <tr>
                                <td>sudesh</td>
                                <td><select name="cars" id="cars">
                                <div>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                 <option value="audi">Audi</option>
                                 </div>
                                </select></td>
                                <td>sudesh</td>


                           
                           </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <script>
window.onload = function() {
    
    loadOrders();
};


function loadOrders(){

    $.ajax({
      type: 'post',
      url: '' + URLROOT + '/PrescriptionController/loadOrders',
      dataType: 'json',
      success: (copletedOrders) => {
       console.log(copletedOrders);

       copletedOrders.forEach(copletedOrder => {
          //console.log(cartItem.image_path);
          // console.log(cartItem[1]);
          
            const html ='<tr id="row'+copletedOrder.orderId+'">'+
                        '<td>'+copletedOrder.orderId+'</td>'+
                        '<td ><select  id="select'+copletedOrder.orderId+'"><div id="option'+copletedOrder.orderId+'"><div></select></td>'+
                        '<td><button onclick="assign('+copletedOrder.orderId+')">assign</button></td>'+
                        '</tr>';

                        

            
            $('#assignDliveryPerson').append(html);
            loadDeliverypersons(copletedOrder.orderId);
        
        });

      }
    });

    
}
function assign(orderid){
    var deliveryperson=$('#select'+orderid).val();
    console.log(orderid);
    console.log(deliveryperson);


    $.ajax({
      type: 'post',
      url: '' + URLROOT + '/PrescriptionController/assignDeliveryPerson',
      data: JSON.stringify({
        orderid: orderid,
        deliveryperson:deliveryperson
      }),
      dataType: 'json',
      success: (response) => {
          console.log(response);
          if(response){

            $('#row'+orderid).hide();

          }
       
      }
    });



}
function loadDeliverypersons(orderId){
    $.ajax({
      type: 'post',
      url: '' + URLROOT +'/PrescriptionController/getDeliveryPersons',
      dataType: 'json',
      success: (Deliverypersons) => {

        Deliverypersons.forEach(Deliverypersons => {
          //console.log(cartItem.image_path);
          // console.log(cartItem[1]);
          
            const html ='<option value="'+Deliverypersons.userName+'">'+Deliverypersons.userName+'</option> ';

                        

            
            $('#select'+orderId).append(html);
            
        
        });
      

      }
    });



}
  








</script>
</div>




