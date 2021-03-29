function showRow_address(orderId) {
    var url = "http://localhost/mvcfinal/del_orders/findAddress";
    $.ajax({
        url: url,
        type: 'POST',
        data: {
            orderId: orderId
        },
        success: function(data) {
            //console.log(data[0].district);
            document.getElementById("id").innerHTML = orderId;
            document.getElementById("streetAddress1").innerHTML = data[0].streetAddress1;
            document.getElementById("streetAddress2").innerHTML = data[0].streetAddress2;
            document.getElementById("city").innerHTML = data[0].city;
            document.getElementById("district").innerHTML = data[0].district;

        }
    });
}

var allOrders = document.getElementById("allOrders");
if (allOrders) {
    $("#allOrders tr").click(function() {
        var selected = $(this).hasClass("rowColor");
        $("#allOrders tr").removeClass("rowColor");
        if (!selected)
            $(this).addClass("rowColor");
    });

}
var allCities = document.getElementById("allCities");
if (allCities) {
    $("#allCities tr").click(function() {
        var selected = $(this).hasClass("rowColor");
        $("#allCities tr").removeClass("rowColor");
        if (!selected)
            $(this).addClass("rowColor");
    });

}

function opdenSlide(orderId) {
    $("#openData" + orderId).toggle(function() {
        $("#hiddenData" + orderId).slideDown();
        document.querySelector("#hiddenData" + orderId).style.display = "block";
    }, function() {
        $("#hiddenData" + orderId).slideUp();
        document.querySelector("#hiddenData" + orderId).style.display = "none";
    });
}

if (document.getElementById("to_deliver")) {
    counter();
}



function counter() {

    var url = "http://localhost/mvcfinal/del_orders/findOrderCount";
    $.ajax({
        url: url,
        type: 'GET',
        success: function(data) {
            var orders = data[0];
            document.getElementById("to_deliver").innerHTML = orders;

        }
    });
}

function orderDeliverd(redirect) {
    var orderId = document.getElementById("orderId").innerHTML;
    console.log(orderId);
    var url = "http://localhost/mvcfinal/del_orders/updateStatus";
    $.ajax({
        url: url,
        type: 'POST',
        data: {
            orderId: orderId
        },
        success: function(data) {
            if (redirect == "del_location") {
                window.location.assign('http://localhost/mvcfinal/del_orders/show_locations');
            } else {
                window.location.assign('http://localhost/mvcfinal/del_orders/show_cities');
            }
        }
    });

}

// function initMap() {
//     var location = {
//         lat: 6.817353,
//         lng: 80.021455
//     };
//     var map = new google.maps.Map(document.getElementById("map"), {
//         zoom: 4,
//         center: location
//     });
// }


// function showRow_Streets($city) {

//     var url = "http://localhost/mvcfinal/del_orders/findStreets";
//     $.ajax({
//         url: url,
//         type: 'POST',
//         data: {
//             city: $city
//         },
//         success: function(data) {
//             console.log(data);
//             window.location.href = "http://localhost/mvcfinal/del_orders/show_Streets";
//             var display = document.getElementById("allStreets");
//             // display.querySelector('tbody').innerHTML = "";
//             for (var x = 0; x < data[1].length; x++) {
//                 var rowNum = x + 1;
//                 var newRow = display.insertRow(rowNum);

//                 var col1 = newRow.insertCell(0);
//                 var col2 = newRow.insertCell(1);

//                 col1.innerHTML = data[0].streetAddress2;
//                 col2.innerHTML = ' ';

//             }

//         }
//     });
// }