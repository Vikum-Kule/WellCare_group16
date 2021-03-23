function viewCategoryBar() {
    $.ajax({
      type: 'get',
      url: ''+URLROOT+'/orders/getmaincategories',
      dataType: 'json',
      success: (mainCategory) => {


        mainCategory.forEach(mainCategory => {


          const html = ' <div class="dropdown2">' +
            '<button class="dropbtn2">' +
            mainCategory.name +
            '  <i class="fa fa-caret-down"></i>' +
            '</button>' +

            '<div class="dropdown-content2" id="' + mainCategory.mainCategoryID + '">' +


            '</div>' +
            '</div>';
          getsubcategories(mainCategory.mainCategoryID);

          $('#myTopnav2').append(html);


          html2 = '<div id="' + mainCategory.name.split(/\s/).join('').replace(/[^a-zA-Z ]/g, "") + '"  class="category"> <div  style=" background-color:white; color:#24034D; padding:1px; cursor: pointer; width: 100%; float: left; height:20px;font-size:2vw">' + mainCategory.name + '<div> <br></div>';

          $('#main').append(html2);

        });

      }
    });

  }

  function loadRelavantMedicines(subCategoryID) {
    // $('#demo').html(subCategoryID);
    $.ajax({
      type: 'post',
      url: ''+URLROOT+'/orders/getmedicines',
      // async:false,
      data: JSON.stringify({
        id: subCategoryID
      }),

      dataType: 'json',

      success: function(medicines) {

        const html3 = '<div class="category"> <div  style=" background-color:white; color:#24034D; padding:1px; cursor: pointer; width: 100%; float: left; height:20px;font-size:2vw">' + medicines[0].subcategory + '<div> <br></div>';

        $('#main').html(html3);

        medicines.forEach(medicine => {

          const html = '<div class="card"><img src="'+URLROOT+'/public/img/medicines/'+ medicine.medicineId + '.jpg" style="width:30%">' +
            '<h2>' + medicine.name + '</h2>' +
            '<h1>' + medicine.brand + '</h1>' +
            ' <p class="price">rs:' + medicine.price + '</p>' +
            ' <!-- <p>' + medicine.description + '..</p> -->' +
            '<p><button onclick="addToCart(' + medicine.medicineId + ',1)">Add to Cart</button></p></div>';



          console.log(medicine.subCategory);
          console.log(medicine.name);
          console.log(medicine.medicineId);
          // const y = medicines.name.split(/\s/).join('').replace(/[^a-zA-Z ]/g, "")

          $('#main').append(html);
        });
      }
    });
  }

  function getsubcategories(mainCategoryID) {

    $.ajax({
      type: 'post',
      url: ''+URLROOT+'/orders/getsubcategories',
      // async:false,
      data: JSON.stringify({
        id: mainCategoryID
      }),

      dataType: 'json',

      success: function(response) {
        console.log(response);

        response.forEach(subcategory => {

          var x = subcategory.mainCategoryID;
          // console.log(x);
          const html = '<a href="#" onClick="loadRelavantMedicines(' + subcategory.subCategoryID + ')">' + subcategory.name + '</a>';

          $('#' + x).append(html);
          loadMedicine(subcategory.subCategoryID);
        });

      }
    });
  }

  function loadMedicine(subCategoryID) {

    $.ajax({
      type: 'post',
      url: ''+URLROOT+'/orders/getmedicines',
      // async:false,
      data: JSON.stringify({
        id: subCategoryID
      }),

      dataType: 'json',

      success: function(medicines) {

        medicines.forEach(medicine => {
          var base = URLROOT;
          console.log(URLROOT);
          const html = '<div class="card"><img src="'+base+'/public/img/medicines/'+ medicine.medicineId + '.jpg" style="width:30%">' +
            '<h2>' + medicine.name + '</h2>' +
            '<h1>' + medicine.brand + '</h1>' +
            ' <p class="price">rs:' + medicine.price + '</p>' +
            ' <!-- <p>' + medicine.description + '..</p> -->' +
            '<p><button onclick="addToCart(' + medicine.medicineId + ',1)">Add to Cart</button></p></div>';

          console.log(medicine.mainCategory);
          console.log(medicine.brand);
          console.log(medicine.price);

          var x = medicine.mainCategory;
          const y = x.split(/\s/).join('').replace(/[^a-zA-Z ]/g, "");

          $('#' + y).append(html);


        });

      }
    });

  }

  function addToCart(medicineId, qty) {
    $.ajax({
      type: 'post',
      url: ''+URLROOT+'/cartController/addToCart',
      // async:false,
      data: JSON.stringify({
        id: medicineId,
        qty: qty
      }),

      dataType: 'json',
      success: function(cartItems) {
        console.log(cartItems[0]);

      }
    });



  }
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

  function myFunctioncategory() {
    var x = document.getElementById("myTopnav2");
    if (x.className === "topnav2") {
      x.className += " responsive2";
    } else {
      x.className = "topnav2";
    }
  }



var subtotal = 0;

function showCart() {
  subtotal = 0;
  $('#customers').html(' <tr>' +
    ' <th>ITEM</th>' +
    ' <th>QUANTITY</th>' +
    ' <th>PRICE</th>' +
    ' <!-- <th>REMOVE</th> -->' +
    '  </tr>'
  );
  $("#a").css("display", "block");
  $("#main").css("display", "block");
  $("#b").css("display", "block");

  $.ajax({
    type: 'post',
    url: ''+URLROOT+'/cartController/showCart',
    // async:false,

    dataType: 'json',

    success: function(cartItems) {

      if (cartItems.length > 0) {
        // console.log(cartItems[0][0]);
        cartItems.forEach(cartItem => {

          //console.log(cartItem);
          // console.log(cartItem[1]);
          if (cartItem) {
            const html =
              ' <tr >' +
              ' <td>' +
              ' <div class="cartInfo"><img src="'+URLROOT+'/public/img/medicines/'+cartItem[0].medicineId+'.jpg" style= "width:10%">' +
              ' <div>' +
              ' <p>' + cartItem[0].name + '</p><small>' + cartItem[0].price + '</small><button onclick="removeItem(' + cartItem[0].medicineId + ')">REMOVE</button>' + //"addToCart('+medicine.medicineId+',1)"
              ' </div>' +
              ' </div>' +
              ' </td>' +
              ' <input type="hidden" class="pid" value="' + cartItem[0].medicineId + '">' +
              ' <td ><input class="input_num" pattern="[0-9]" min="1" step="1"/  type="number"  value="' + cartItem[0].qty + '" ></td>' +
              ' <td>' + cartItem[0].price * cartItem[0].qty + ' </td>' +

              '</tr>';

            total(cartItem[0].price * cartItem[0].qty, 200);
            $('#customers').append(html);

          }
        });



      } else {


        subtotal = 0;
        total(0, 0);
      }

    }
  });

}

function total(price, deliverFee) {


  subtotal = subtotal + price;
  console.log(subtotal);
  $('#SUBTOTAL').html('RS' + subtotal);
  $('#DELIVERYFEE').html('RS' + deliverFee);
  var fulltotal = subtotal + deliverFee;
  $('#TOTAL').html('RS' + fulltotal);

}



function removeItem(removeitem) {


  console.log(removeitem);
  $.ajax({
    type: 'post',
    url: ''+URLROOT+'/cartController/removeItem',

    data: JSON.stringify({
      id: removeitem,

    }),

    dataType: 'json',
    success: function(cartItems) {
      console.log(cartItems);

    }
  });

  showCart();

}
$(document).ready(function() {
  $(document).on("change", '.input_num', function() {
    var $el = $(this).closest('tr');
    var id = $el.find(".pid").val();
    var qty = $el.find(".input_num").val();


    // let value =$(this).val();
    console.log(id);
    console.log(qty);
    addToCart(id, qty);
    showCart();



  });



});

function checkout() {
  $(".content").css("height", "0%");
        $(".footer").css("overflow", "auto");
        $(".footer").css("height", "80%");
  if(subtotal>0){
       
        $(".input_num").attr("disabled", "disabled");
        
      
        $.ajax({
        type: 'post',
        url: ''+URLROOT+'/cartController/checkSignin',

        

        dataType: 'json',
        success: function(signIn) {

          if(signIn){
          console.log(signIn);
          const html = 
          '<div id="caption">YOUR ORDER IS PROCESS AFTER CONFIRMED... ' +
          '  <br>CHECK YOUR EMAILS...' +
          '  <br>PAY THE AMOUNT OF ORDER TO BANK ACCOUNT NUMBER : XXXXXXXX' +
          '  <br>REPLY TO THAT EMAIL,INCLUDE BANK SLIP IMAGES OF RELEVANT PAYMENT OR SCREENSHOTS OF PAYMENT DETAILS WITH ORDER NUMBER' +
          '  <br>THANK YOU !...' +
         
          ' </div>'+
          '<br>'+
          '<div class="col-25"><label for="address">Address</label> <div>'+
          '<div class="col-75">'+
              '<input type="text" id="streetAddress1" name="streetAddress1" placeholder="Enter Street Address 1.." value="'+signIn.streetAddress1+'">'+
              '<span class="invalidFeedback"></span>'+

              '<input type="text" id="streetAddress2" name="streetAddress2" placeholder="Enter Street Address 2..(optional)" value="'+signIn.streetAddress2+'">'+
              '<span class="invalidFeedback"></span>'+

              '<input type="text" id="city" name="city" placeholder="Enter Your City .." value="'+signIn.city+'">'+
              '<span class="invalidFeedback"></span>'+

              ' <input type="text" id="district" name="district" placeholder="Enter Your District .." value="'+signIn.district+'">'+
              ' <span class="invalidFeedback"></span>'+


          '</div>'+
          '<div ><button onclick ="confirmCheckout()">confirm</button></div>' 
          ;

          $('#b2').html(html);
        }else{
          console.log(signIn);

          $('#b2').append('<div id="caption">LOGIN TO CHECKOUT...<p><a href="'+URLROOT+' /users/loginVIew"><button>LOGIN</button></a></p></div>');

        }
        
        }
        
      });
    }else{

    $('#b2').append('<div id="caption">NO ITEMS TO CHECKOUT...</div> ');
    
  }
 

}

function confirmCheckout() {
  console.log("sudeh");

  var streetAddress1 = $("#streetAddress1").val();
  var streetAddress2 = $("#streetAddress2").val();

  var city = $("#city").val();
  var district = $("#district").val();
 $.ajax({
    type: 'post',
    url: '' + URLROOT + '/cartController/confirmCheckout',
    data: JSON.stringify({
      streetAddress1: streetAddress1,
      streetAddress2: streetAddress2,
      city: city,
      district: district
      
    }),
    dataType: 'json',
    success: function ($sucsess) {

      showCart();
      $(".content").css("height", "80%");
      $(".footer").css("overflow", "auto");
      $(".footer").css("height", "15%");

      $('#b2').html("");

      $(".input_num").prop('disabled', false);
      $('.content').html('<div id="caption">YOUR ORDER HAS BEEN SUCCESSFULLY PLACED...</div>');
    }
  });


}

// searchbar **************************************************************************************************

function searchFunction() {
  var searchBar = $("#searchBar").val();
  //console.log(searchBar)
  $('#datalist').html("");
  $.ajax({
    type: 'post',
    url: ''+URLROOT+'/orders/searchbar',
    data: JSON.stringify({
      searchBar:searchBar
    }),
    dataType: 'json',
    success: function(searchBar) {
      console.log(searchBar);
       searchBar.forEach(searchBarItem => {
         
        const html='<option value="'+searchBarItem.name+'('+searchBarItem.brand+')"/>';
        $('#datalist').append(html);
      });

    }
  });


}
function getsearchItems(){
  var searchBar = $("#searchBar").val();
 // $('#demo').html(subCategoryID);
 $.ajax({
  type: 'post',
  url: ''+URLROOT+'/orders/getsearchmedicines',
  // async:false,
  data: JSON.stringify({
    searchBar: searchBar
  }),

  dataType: 'json',

  success: function(medicines) {

    
    $('#main').html("");
    medicines.forEach(medicine => {
      console.log("sudesh");

      const html = '<div class="card"><img src="'+URLROOT+'/public/img/medicines/'+ medicine.medicineId + '.jpg" style="width:30%">' +
        '<h2>' + medicine.name + '</h2>' +
        '<h1>' + medicine.brand + '</h1>' +
        ' <p class="price">rs:' + medicine.price + '</p>' +
        ' <!-- <p>' + medicine.description + '..</p> -->' +
        '<p><button onclick="addToCart(' + medicine.medicineId + ',1)">Add to Cart</button></p></div>';



      // console.log(medicine.subCategory);
      // console.log(medicine.name);
      // console.log(medicine.medicineId);
      // const y = medicines.name.split(/\s/).join('').replace(/[^a-zA-Z ]/g, "")

      $('#main').append(html);
    });
  }
});




}




