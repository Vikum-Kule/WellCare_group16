drugcounter();

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