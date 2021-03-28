if (document.getElementById("totalnotifications")) {
    notificationcounter();
}
if (document.getElementById("totaldrugs")) {
    drugcounter();
}



function drugcounter() {

    var url = "http://localhost/mvcfinal/Man_Drug_Display/drugcount";
    $.ajax({
        url: url,
        type: 'GET',
        success: function(data) {
            console.log(data);
            var totaldrugs = data[0];

            document.getElementById("totaldrugs").innerHTML = totaldrugs;

        }
    });
}

function notificationcounter() {

    var url = "http://localhost/mvcfinal/Man_Drug_Display/notificationcounter";
    $.ajax({
        url: url,
        type: 'GET',
        success: function(data) {
            console.log(data);
            var totalnotifications = data[0];

            document.getElementById("totalnotifications").innerHTML = totalnotifications;

        }
    });
}


function inquirycounter() {

    var url = "http://localhost/mvcfinal/Man_Drug_Display/inquiriescounter";
    $.ajax({
        url: url,
        type: 'GET',
        success: function(data) {
            console.log(data);
            var unread = data[0];
            var processing = data[1];
            var completed = data[2];

            document.getElementById("unread").innerHTML = unread;
            document.getElementById("processing").innerHTML = processing;
            document.getElementById("completed").innerHTML = completed;

        }
    });
}

function refillData() {
    var brand = document.getElementById("brandName").value;
    var name = document.getElementById("medName").value;
    var status = document.getElementById("doseStatus").value;
    var dose = document.getElementById("dose").value;
    var supplyId = document.getElementById("supplyId").value;
    var qty = document.getElementById("QTY").value;
    var price = document.getElementById("price").value;


    // console.log(data);

    var url = "http://localhost/mvcfinal/Man_Stock_Refilc/stock_add";
    $.ajax({
        url: url,
        type: 'POST',
        data: {
            brand: brand,
            name: name,
            status: status,
            dose: dose,
            supplyId: supplyId,
            qty: qty,
            price: price
        },
        success: function(data) {
            window.location.href = "http://localhost/mvcfinal/Man_Stock_Refilc/showrefill";


        }
    });

<<<<<<< HEAD
}
=======
}
>>>>>>> 492f73963ad122b5a8346ddfa27b3286c27d36c0
