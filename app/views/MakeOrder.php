<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/MakeOrder.css">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="<?php echo URLROOT ?>/public/js/jquery-3.5.1.min.js"></script>

  <script>
      var URLROOT= "<?php echo URLROOT ?>"
  </script>
  <script src="<?php echo URLROOT ?>/public/js/makeOrder.js"></script>

  <style>
   
   
  </style>

 

</head>
<!-- <button onclick="toggleModal()">Click here to trigger the modal!</button> -->
<script src="<?php echo URLROOT ?>/public/js/topnavigation.js"></script>

<body>
  
  <div id="demo"></div>
  <div class="topnav" id="myTopnav">

    <a href="<?php echo URLROOT ?>/orders/makeOrder" class="active">Home</a>



    <?php
    if ($_SESSION['active'] == true) {
      echo ('<a href=' . URLROOT . '/myOrders/myorder>My Orders</a>');
      echo ('<a href=' . URLROOT . '/users/profile>Profile</a>');
      echo ('<a href=' . URLROOT . '/users/logout>logout</a>');
    } else {

      echo ('<a href=' . URLROOT . '/users/loginVIew>Login</a>');
      echo ('<a href=' . URLROOT . '/users/register>Sign Up</a>');
      echo ('<a href=' . URLROOT . '/pages/fogotPasswordView>Forgot Password</a>');
    }  ?>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <!-- category bar -->
  <div class="topnav2" id="myTopnav2">



    <a href="javascript:void(0);" class="icon" onclick="myFunctioncategory()">
      <i class="fa fa-bars"></i>
  </div>



 


  <!-- search bar -->
  <div class="line1">
    <!-- <div class="searchBar">
      <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div> -->


    <div class="wrapper">
      <div class="search-input">
        <a href="" target="_blank" hidden></a>
        <input type="text" placeholder="Type to search.." id="searchBar" list="datalist" onkeyup="searchFunction()">
      <datalist id="datalist">
        
      
      
      </datalist>
        <div class="icon" onclick="getsearchItems()"><i class="fas fa-search"></i></div>
      </div>
    </div>


   
    <div class="uploadPrescription">

      <p><a href='<?php echo URLROOT ?>/orders/uploadPrescription'><button>Upload Prescription</button></a></p>

    </div>
 </div>
  <div class="line3">
    <div class="confirmOrder">
      <!-- <button><i class="fa fa-shopping-cart"></i> Go To Cart</i></button> -->
      <a> <button onclick="showCart()"><i class="fa fa-shopping-cart"></i>Cart</i></button></a>

    </div>


    <!-- //<div class="newOrder"><button>Clear </button></div> -->
  </div>
  <div id="main">
  </div>
  <?php
  require APPROOT . '/views/footer.php'
  ?>

  <div class="main">


    <div>

    </div>
  </div>
  <div class="modelcontainer" id="a">


  </div>
  <div class="modal" id="b">

    <div class="header">
      CART

      <a href="#" class="cancel">X</a>

    </div>
    <div class="content">
     


      <table id="customers">

        <tr>
          <th>ITEM</th>
          <th>QUANTITY</th>
          <th>PRICE</th>

        </tr>

      </table>

      <div class="totalPrice">
        <table>
          <tr>
            <td>SUBTOTAL</td>
            <td id="SUBTOTAL">RS0</td>
          </tr>
          <tr>
            <td>DELIVERY FEE</td>
            <td id="DELIVERYFEE">RS0</td>
          </tr>
          <tr>
            <td>TOTAL</td>
            <td id="TOTAL">RS0</td>
          </tr>
        </table>

      </div>

    </div>


    <div class="footer">
    <div class=footterButton>
    <button id ="btnCheckout" onclick="checkout()">Checkout</button>
      <button id ="btnfooterCancel" class="cancelCheckout">Cancel</button>
    
    </div>
     
      <div id="b2"></div>
    </div>
  </div>
  <!-- model************************************************************************************************ -->
  <div class="modal2">
      <div class="modal2-content">
          <span class="close-button2">&times;</span>
          <h2 id="modal2_name">Name</h2><br>
          <div id="modal2_image"></div>
          <h4 id="modal2_brand">Click </h4>
          <h3 id="modal2_description"></h3>
         
          
          
          <div id="modal2_quantity"></div>
          <div id="modal2_addToCart"></div>
          
          

          
        
          
          </div>
      </div>
  </div>
  <!-- ************************************************************************************************ -->
  <script>
    window.onload = function() {
      
      viewCategoryBar();
    };

const modal = document.querySelector(".modal2");
// const trigger = document.querySelector(".trigger2");
const closeButton = document.querySelector(".close-button2");

function toggleModal(medicineId) {

      modal.classList.toggle("show-modal2");
      $.ajax({
      type: 'post',
      url: ''+URLROOT+'/orders/getOneMedicine',
      // async:false,
      data: JSON.stringify({
        medicineId: medicineId
      }),

      dataType: 'json',

      success: function(medicine) {


        var html3
          if(medicine[0].QTY<2){
            html3='<button style="background-color: #5a5a5a;">Out Of Stock</button>';

          }else if(medicine[0].QTY>=2){
           
            html3='<button onclick="addToCartModel(' +medicine[0].medicineId +')">Add to Cart</button>';


          }

console.log(medicine[0]);
// <h2 id="modal2_name">Name</h2><br>
//           <h4 id="modal2_brand">Click </h4>
//           <h3 id="modal2_description"></h3>
$("#modal2_name").html(medicine[0].	name);
$("#modal2_brand").html(medicine[0].	brand);
$("#modal2_description").html(medicine[0].	description);
// <img onclick="toggleModal(' + medicine.medicineId + ')" src="'+base+'/public/img/medicines/'+ medicine.medicineId + '.jpg" style="width:30%">'
var html='<img src="'+URLROOT+'/public/img/medicines/'+ medicine[0].medicineId + '.jpg" style="width:100%">';
$("#modal2_image").html(html);  
var html2='<input id="model2_quantity" pattern="[0-9]" min="1" step="1"/  type="number" placeholder="Enter Quantity" >';
$("#modal2_quantity").html(html2);
//var html3='<button onclick="addToCartModel(' +medicine[0].medicineId +')">Add to Cart</button>';
$("#modal2_addToCart").html(html3);


       

      }
    });

}
function windowOnClick(event) {
      if (event.target === modal) {
          toggleModal();
      }
}

  // trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);

function addToCartModel(medicineId){
  var quantity=$("#model2_quantity").val();
  if(quantity>=1){
    addToCart(medicineId,quantity);
  }
  


}

    // function viewCategoryBar() {
    //   $.ajax({
    //     type: 'get',
    //     url: 'http://localhost/mvcfinal/orders/getmaincategories',
    //     dataType: 'json',
    //     success: (mainCategory) => {


    //       mainCategory.forEach(mainCategory => {


    //         const html = ' <div class="dropdown2">' +
    //           '<button class="dropbtn2">' +
    //           mainCategory.name +
    //           '  <i class="fa fa-caret-down"></i>' +
    //           '</button>' +

    //           '<div class="dropdown-content2" id="' + mainCategory.mainCategoryID + '">' +


    //           '</div>' +
    //           '</div>';
    //         getsubcategories(mainCategory.mainCategoryID);

    //         $('#myTopnav2').append(html);


    //         html2 = '<div id="' + mainCategory.name.split(/\s/).join('').replace(/[^a-zA-Z ]/g, "") + '"  class="category"> <div  style=" background-color:white; color:#24034D; padding:1px; cursor: pointer; width: 100%; float: left; height:20px;font-size:2vw">' + mainCategory.name + '<div> <br></div>';

    //         $('#main').append(html2);

    //       });

    //     }
    //   });

    // }

    // function loadRelavantMedicines(subCategoryID) {
    //   // $('#demo').html(subCategoryID);
    //   $.ajax({
    //     type: 'post',
    //     url: 'http://localhost/mvcfinal/orders/getmedicines',
    //     // async:false,
    //     data: JSON.stringify({
    //       id: subCategoryID
    //     }),

    //     dataType: 'json',

    //     success: function(medicines) {

    //       const html3 = '<div class="category"> <div  style=" background-color:white; color:#24034D; padding:1px; cursor: pointer; width: 100%; float: left; height:20px;font-size:2vw">' + medicines[0].subcategory + '<div> <br></div>';

    //       $('#main').html(html3);

    //       medicines.forEach(medicine => {

    //         const html = '<div class="card"><img src="<?php echo URLROOT ?>/public/img/medicines/' + medicine.mainCategory.split(/\s/).join('').replace(/[^a-zA-Z ]/g, "") + '/' + medicine.medicineId + '.jpg" style="width:30%">' +
    //           '<h2>' + medicine.name + '</h2>' +
    //           '<h1>' + medicine.brand + '</h1>' +
    //           ' <p class="price">rs:' + medicine.price + '</p>' +
    //           ' <!-- <p>' + medicine.description + '..</p> -->' +
    //           '<p><button onclick="addToCart(' + medicine.medicineId + ',1)">Add to Cart</button></p></div>';



    //         console.log(medicine.subCategory);
    //         console.log(medicine.name);
    //         console.log(medicine.medicineId);
    //         // const y = medicines.name.split(/\s/).join('').replace(/[^a-zA-Z ]/g, "")

    //         $('#main').append(html);
    //       });
    //     }
    //   });
    // }

    // function getsubcategories(mainCategoryID) {

    //   $.ajax({
    //     type: 'post',
    //     url: 'http://localhost/mvcfinal/orders/getsubcategories',
    //     // async:false,
    //     data: JSON.stringify({
    //       id: mainCategoryID
    //     }),

    //     dataType: 'json',

    //     success: function(response) {
    //       console.log(response);

    //       response.forEach(subcategory => {

    //         var x = subcategory.mainCategoryID;
    //         // console.log(x);
    //         const html = '<a href="#" onClick="loadRelavantMedicines(' + subcategory.subCategoryID + ')">' + subcategory.name + '</a>';

    //         $('#' + x).append(html);
    //         loadMedicine(subcategory.subCategoryID);
    //       });

    //     }
    //   });
    // }

    // function loadMedicine(subCategoryID) {

    //   $.ajax({
    //     type: 'post',
    //     url: 'http://localhost/mvcfinal/orders/getmedicines',
    //     // async:false,
    //     data: JSON.stringify({
    //       id: subCategoryID
    //     }),

    //     dataType: 'json',

    //     success: function(medicines) {

    //       medicines.forEach(medicine => {

    //         const html = '<div class="card"><img src="<?php echo URLROOT ?>/public/img/medicines/' + medicine.mainCategory.split(/\s/).join('').replace(/[^a-zA-Z ]/g, "") + '/' + medicine.medicineId + '.jpg" style="width:30%">' +
    //           '<h2>' + medicine.name + '</h2>' +
    //           '<h1>' + medicine.brand + '</h1>' +
    //           ' <p class="price">rs:' + medicine.price + '</p>' +
    //           ' <!-- <p>' + medicine.description + '..</p> -->' +
    //           '<p><button onclick="addToCart(' + medicine.medicineId + ',1)">Add to Cart</button></p></div>';

    //         console.log(medicine.mainCategory);
    //         console.log(medicine.brand);
    //         console.log(medicine.price);

    //         var x = medicine.mainCategory;
    //         const y = x.split(/\s/).join('').replace(/[^a-zA-Z ]/g, "");

    //         $('#' + y).append(html);


    //       });

    //     }
    //   });

    // }

    // function addToCart(medicineId, qty) {
    //   $.ajax({
    //     type: 'post',
    //     url: 'http://localhost/mvcfinal/cartController/addToCart',
    //     // async:false,
    //     data: JSON.stringify({
    //       id: medicineId,
    //       qty: qty
    //     }),

    //     dataType: 'json',
    //     success: function(cartItems) {
    //       console.log(cartItems[0]);

    //     }
    //   });



    // }

    // function myFunction() {
    //   var x = document.getElementById("myTopnav");
    //   if (x.className === "topnav") {
    //     x.className += " responsive";
    //   } else {
    //     x.className = "topnav";
    //   }
    // }

    // function myFunctioncategory() {
    //   var x = document.getElementById("myTopnav2");
    //   if (x.className === "topnav2") {
    //     x.className += " responsive2";
    //   } else {
    //     x.className = "topnav2";
    //   }
    // }




$(".cancel").click(function() {
      $("#a").fadeOut();
      $("#b").fadeOut();
      $("#btnfooterCancel").hide();
      $("#btnCheckout").show();
      $(".content").css("height", "75%");
      $(".footer").css("overflow", "auto");
      $(".footer").css("height", "15%");
      $('#b2').html("");
      $(".input_num").prop('disabled', false);
      

});
$(".cancelCheckout").click(function() {
      $("#btnfooterCancel").hide();
      $("#btnCheckout").show();
      $(".content").css("height", "75%");
      $(".footer").css("overflow", "auto");
      $(".footer").css("height", "15%");
      $('#b2').html("");
      $(".input_num").prop('disabled', false);

});



    // var subtotal = 0;

    // function showCart() {
    //   subtotal = 0;
    //   $('#customers').html(' <tr>' +
    //     ' <th>ITEM</th>' +
    //     ' <th>QUANTITY</th>' +
    //     ' <th>PRICE</th>' +
    //     ' <!-- <th>REMOVE</th> -->' +
    //     '  </tr>'
    //   );
    //   $("#a").css("display", "block");
    //   $("#main").css("display", "block");
    //   $("#b").css("display", "block");

    //   $.ajax({
    //     type: 'post',
    //     url: 'http://localhost/mvcfinal/cartController/showCart',
    //     // async:false,

    //     dataType: 'json',

    //     success: function(cartItems) {

    //       if (cartItems.length > 0) {
    //         // console.log(cartItems[0][0]);
    //         cartItems.forEach(cartItem => {

    //           //console.log(cartItem);
    //           // console.log(cartItem[1]);
    //           if (cartItem) {
    //             const html =
    //               ' <tr >' +
    //               ' <td>' +
    //               ' <div class="cartInfo"><img src="<?php echo URLROOT ?>/public/img/medicines/med4.jpg">' +
    //               ' <div>' +
    //               ' <p>' + cartItem[0].name + '</p><small>' + cartItem[0].price + '</small><button onclick="removeItem(' + cartItem[0].medicineId + ')">REMOVE</button>' + //"addToCart('+medicine.medicineId+',1)"
    //               ' </div>' +
    //               ' </div>' +
    //               ' </td>' +
    //               ' <input type="hidden" class="pid" value="' + cartItem[0].medicineId + '">' +
    //               ' <td ><input class="input_num" type="number"  value="' + cartItem[0].qty + '" ></td>' +
    //               ' <td>' + cartItem[0].price * cartItem[0].qty + ' </td>' +

    //               '</tr>';

    //             total(cartItem[0].price * cartItem[0].qty, 200);
    //             $('#customers').append(html);

    //           }
    //         });



    //       } else {


    //         subtotal = 0;
    //         total(0, 0);
    //       }

    //     }
    //   });

    // }

    // function total(price, deliverFee) {


    //   subtotal = subtotal + price;
    //   console.log(subtotal);
    //   $('#SUBTOTAL').html('RS' + subtotal);
    //   $('#DELIVERYFEE').html('RS' + deliverFee);
    //   var fulltotal = subtotal + deliverFee;
    //   $('#TOTAL').html('RS' + fulltotal);

    // }



    // function removeItem(removeitem) {


    //   console.log(removeitem);
    //   $.ajax({
    //     type: 'post',
    //     url: 'http://localhost/mvcfinal/cartController/removeItem',

    //     data: JSON.stringify({
    //       id: removeitem,

    //     }),

    //     dataType: 'json',
    //     success: function(cartItems) {
    //       console.log(cartItems);

    //     }
    //   });

    //   showCart();

    // }
  
    // $(document).ready(function() {
    //   $(document).on("change", '.input_num', function() {
    //     var $el = $(this).closest('tr');
    //     var id = $el.find(".pid").val();
    //     var qty = $el.find(".input_num").val();


    //     // let value =$(this).val();
    //     console.log(id);
    //     console.log(qty);
    //     addToCart(id, qty);
    //     showCart();



    //   });



    // });

    // function checkout() {
    //   $(".content").css("height", "0%");
    //         $(".footer").css("overflow", "auto");
    //         $(".footer").css("height", "80%");
    //   if(subtotal>0){
           
    //         $(".input_num").attr("disabled", "disabled");
            
          
    //         $.ajax({
    //         type: 'post',
    //         url: 'http://localhost/mvcfinal/cartController/checkSignin',

            

    //         dataType: 'json',
    //         success: function(signIn) {

    //           if(signIn){
    //           console.log(signIn);
    //           const html = 
    //           '<div id="caption">YOUR ORDER IS PROCESS AFTER CONFIRMED... ' +
    //           '  <br>CHECK YOUR EMAILS...' +
    //           '  <br>PAY THE AMOUNT OF ORDER TO BANK ACCOUNT NUMBER : XXXXXXXX' +
    //           '  <br>REPLY TO THAT EMAIL,INCLUDE BANK SLIP IMAGES OF RELEVANT PAYMENT OR SCREENSHOTS OF PAYMENT DETAILS WITH ORDER NUMBER' +
    //           '  <br>THANK YOU !...' +
             
    //           ' </div>'+
    //           '<br>'+
    //           '<div class="col-25"><label for="address">Address</label> <div>'+
    //           '<div class="col-75">'+
    //               '<input type="text" id="streetAddress1" name="streetAddress1" placeholder="Enter Street Address 1.." value="'+signIn.streetAddress1+'">'+
    //               '<span class="invalidFeedback"></span>'+

    //               '<input type="text" id="streetAddress2" name="streetAddress2" placeholder="Enter Street Address 2..(optional)" value="'+signIn.streetAddress2+'">'+
    //               '<span class="invalidFeedback"></span>'+

    //               '<input type="text" id="city" name="city" placeholder="Enter Your City .." value="'+signIn.city+'">'+
    //               '<span class="invalidFeedback"></span>'+

    //               ' <input type="text" id="district" name="district" placeholder="Enter Your District .." value="'+signIn.district+'">'+
    //               ' <span class="invalidFeedback"></span>'+

    //               '<input type="text" id="postalCode" name="postalCode" placeholder="Postal Code .." value="'+signIn.postalCode+'">'+
    //               ' <span class="invalidFeedback"></span>'+


    //           '</div>'+
    //           '<div ><button onclick ="confirmCheckout()">confirm</button></div>' 
    //           ;

    //           $('#b2').html(html);
    //         }else{
    //           console.log(signIn);

    //           $('#b2').append('<div id="caption">LOGIN TO CHECKOUT...<p><a href="<?php echo URLROOT ?>/users/loginVIew"><button>LOGIN</button></a></p></div>');

    //         }
            
    //         }
            
    //       });
    //     }else{

    //     $('#b2').append('<div id="caption">NO ITEMS TO CHECKOUT...</div> ');
        
    //   }
     

    // }

    // function confirmCheckout() {
    //   console.log("sudeh");

    //   var streetAddress1 = $("#streetAddress1").val();
    //   var streetAddress2 = $("#streetAddress2").val();

    //   var city = $("#city").val();
    //   var district = $("#district").val();
    //   var postalCode = $("#postalCode").val();
      
      







    //   $.ajax({
    //     type: 'post',
    //     url: 'http://localhost/mvcfinal/cartController/confirmCheckout',
    //     data: JSON.stringify({
    //       streetAddress1: streetAddress1,
    //       streetAddress2: streetAddress2,
    //       city: city,
    //       district: district,
    //       postalCode: postalCode
    //     }),
    //     dataType: 'json',
    //     success: function($sucsess) {
          
    //       showCart();
    //       $(".content").css("height", "80%");
    //   $(".footer").css("overflow", "auto");
    //   $(".footer").css("height", "15%");
      
    //   $('#b2').html("");
      
    //   $(".input_num").prop('disabled', false);

    //     }
    //   });


    // }
  </script>
   


</body>

</html>