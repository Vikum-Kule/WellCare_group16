<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/UploadPrescription.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="<?php echo URLROOT ?>/public/js/jquery-3.5.1.min.js"></script>
  <script>
    var URLROOT = "<?php echo URLROOT ?>"
  </script>
  <script src="<?php echo URLROOT ?>/public/js/UploadPrescription.js"></script>

</head>

<body>
  <div class="topnav" id="myTopnav">

    <a href="#uploadPrescription" class="active">Upload Prescription</a>


  </div>






  <div class="container">
    <img src="<?php echo URLROOT ?>/public/img/uploadprescriptions1.JPG" class="responsive">


    <div class="uploadFile">

      <form action="#" method="post" id="upload-box" enctype="multipart/form-data">
        <input type="file" id="myFile" name="image" multiple>
        <!-- <button id="upload" type="submit">Submit Files</button>
     -->

        <div class="alert" id="message" role="alert" style="display: none;"> </div>


      </form>
      <button id="upload" class="btnSubmit" onclick="submit()">Submit Files</button>

      <div id="sudesh"></div>


      <!-- <input type="file" id="myFile" name="filename" multiple>
    <button id="BtnUpload">Submit Files</button> -->
    </div>

    <img src="<?php echo URLROOT ?>/public/img/uploadprescriptions2.JPG" class="responsive">



  </div>
  <div class="line3">
    <div class="confirmOrder">
      <a href='<?php echo URLROOT ?>/orders/makeOrder'> <button><i class="fa fa-caret-square-o-left"></i> Continue Shopping</button></a>

      <!-- <button><i class="fa fa-caret-square-o-left"></i> Continue Shopping</button> -->
    </div>
    <div class="newOrder">
      <button id="myBtn" onclick="showCart()"><i class="fa fa-caret-square-o-left"></i> Confirm Order</button>

    </div>
    <!-- cart*************************************************************************************** -->

    <div class="main">


      <div>

      </div>
    </div>
    <div class="modelcontainer" id="a">


    </div>
    <div class="modal" id="b">

      <div class="header">
        CONFIRM PRESCRIPTION

        <a href="#" class="cancel">X</a>

      </div>
      <div class="content" id="content">







      </div>
      


      <!-- ************************************************************************************************ -->


    </div>
<script>

window.onload = function() {
      
  $.ajax({
          type: 'post',
          url: '' + URLROOT + '/cartController/checkSignin',



          dataType: 'json',
          success: function(signIn) {
            if (signIn) {
              $.ajax({
                type: 'post',
                url: '' + URLROOT + '/prescriptionController/getTempPrescriptionData',



                dataType: 'json',
                success: function(response) {
                  console.log(response);
                  const html = '<div class="card"><img src="' + URLROOT + '/public/img/tempPrescriptions/' + response[0].tempPrescriptionId+'.'+response[0].ext + '" style="width:30%"><br><button class="btn" onclick="removePrescription()">Remove</button></div>';
                  $("#message").show();
                    $("#message").append(html);
                    $("#upload").hide();


                }
              });




            }
          }

  });
    };

</script>
    <script type="text/javascript">
      function submit() {
        $.ajax({
          type: 'post',
          url: '' + URLROOT + '/cartController/checkSignin',



          dataType: 'json',
          success: function(signIn) {

            if (signIn) {


              console.log(signIn);



              // e.preventDefault();
              $.ajax({
                method: 'post',
                url: '' + URLROOT + '/prescriptionController/uploadPrescription',
                // async:false,
                data: new FormData(document.getElementById("upload-box")),
                contentType: false,
                processData: false,
                success: function(response) {

                  console.log(response);
                  $("#message").show();
                  $("#message").html(response.message);

                  if (response.image !== "") {

                    const html = '<div class="card"><img src="' + URLROOT + '/public/img/tempPrescriptions/' + response.image + '" style="width:30%"><br><button class="btn" onclick="removePrescription()">Remove</button></div>';
                    $("#message").append(html);
                    $("#upload").hide();

                  }


                  // const html='<div class="card"><img src="'+URLROOT+'/public/img/medicines/'+ medicine.mainCategory.split(/\s/).join('').replace(/[^a-zA-Z ]/g, "") + '/' + medicine.medicineId + '.jpg" style="width:30%">'

                }
              });


            } else {
              console.log(signIn);

              $('#sudesh').html('<div id="caption">FIRST LOGIN TO UPLOAD PRESCRIPTION...<p><a href="' + URLROOT + ' /users/loginVIew"><button>LOGIN</button></a></p></div>');

            }

          }

        });






      }

      function removePrescription() {
        console.log("sudeshremove");
        $.ajax({
          type: 'post',
          url: '' + URLROOT + '/PrescriptionController/removePrescription',


          dataType: 'json',

          success: function(medicines) {
            $("#upload").show();
            $("#message").html("");

          }
        });

      }

      $("#open").click(function() {
        $("#a").css("display", "block");
        $("#b").css("display", "block");
      });


      $(".cancel").click(function() {
        $("#a").fadeOut();
        $("#b").fadeOut();
      });

      function showCart() {
        confirm();
        $("#a").css("display", "block");
        $("#main").css("display", "block");
        $("#b").css("display", "block");
}

      function confirm() {
        $.ajax({
          type: 'post',
          url: '' + URLROOT + '/PrescriptionController/checkTempPrescriptionUserId',
          dataType: 'json',

          success: function(response) {
          
            if (response) {
              $.ajax({
                type: 'post',
                url: '' + URLROOT + '/cartController/checkSignin',



                dataType: 'json',
                success: function(signIn) {

                  if (signIn) {
                    console.log(signIn);
                    const html =
                      '<div id="caption">YOUR ORDER IS PROCESS AFTER CONFIRMED... ' +
                      '  <br>CHECK YOUR EMAILS...' +
                      '  <br>PAY THE AMOUNT OF ORDER TO BANK ACCOUNT NUMBER : XXXXXXXX' +
                      '  <br>REPLY TO THAT EMAIL,INCLUDE BANK SLIP IMAGES OF RELEVANT PAYMENT OR SCREENSHOTS OF PAYMENT DETAILS WITH ORDER NUMBER' +
                      '  <br>THANK YOU !...' +

                      ' </div>' +
                      '<br>' +
                      '<div class="col-25"><label for="address">Address</label> <div>' +
                      '<div class="col-75">' +
                      '<input type="text" id="streetAddress1" name="streetAddress1" placeholder="Enter Street Address 1.." value="' + signIn.streetAddress1 + '">' +
                      '<span class="invalidFeedback"></span>' +

                      '<input type="text" id="streetAddress2" name="streetAddress2" placeholder="Enter Street Address 2..(optional)" value="' + signIn.streetAddress2 + '">' +
                      '<span class="invalidFeedback"></span>' +

                      '<input type="text" id="city" name="city" placeholder="Enter Your City .." value="' + signIn.city + '">' +
                      '<span class="invalidFeedback"></span>' +

                      ' <input type="text" id="district" name="district" placeholder="Enter Your District .." value="' + signIn.district + '">' +
                      ' <span class="invalidFeedback"></span>' +

                      '<input type="text" id="postalCode" name="postalCode" placeholder="Postal Code .." value="' + signIn.postalCode + '">' +
                      ' <span class="invalidFeedback"></span>' +


                      '</div>' +
                      '<div ><button onclick ="confirmCheckout()">confirm</button></div>';

                    $('#content').html(html);
                  } else {
                    console.log(signIn);

                    $('#content').append('<div id="caption">LOGIN TO CHECKOUT...<p><a href="' + URLROOT + ' /users/loginVIew"><button>LOGIN</button></a></p></div>');

                  }

                }

              });


            } else {

              $('#content').html('<div id="caption">UPLOAD PRESCRIPTION TO CHECKOUT...</div>');


            }


          }
        });


      }

  function confirmCheckout() {
  

  var streetAddress1 = $("#streetAddress1").val();
  var streetAddress2 = $("#streetAddress2").val();

  var city = $("#city").val();
  var district = $("#district").val();
  var postalCode = $("#postalCode").val();
  
  $.ajax({
    type: 'post',
    url: '' + URLROOT + '/PrescriptionController/confirmCheckout',
    data: JSON.stringify({
      streetAddress1: streetAddress1,
      streetAddress2: streetAddress2,
      city: city,
      district: district,
      postalCode: postalCode
    }),
    dataType: 'json',
    success: function ($sucsess) {

     
      console.log($sucsess);
      $('#content').html('<div id="caption">YOUR ORDER HAS BEEN SUCCESSFULLY PLACED...</div>');
      removePrescription();
      

    }
  });


}


    </script>



</body>

</html>