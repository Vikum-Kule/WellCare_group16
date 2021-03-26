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
var map = document.getElementById('map');
if (map) {
    displyTab();
}

function displyTab() {
    document.querySelector(".grabPromo").style.display = "block";
}

$('.grabPromo').click(function(e) {
    $('.slideDown').slideToggle();
});
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