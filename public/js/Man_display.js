
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

