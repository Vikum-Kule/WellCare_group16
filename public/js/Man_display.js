drugcounter();
notificationcounter();

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