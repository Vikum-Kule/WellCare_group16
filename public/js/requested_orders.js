counter();

function counter() {

    var url = "http://localhost/mvcfinal/pc_view_drug/rowCount";
    $.ajax({
        url: url,
        type: 'GET',
        success: function(data) {
            var pending = data[0];
            var request = data[1];
            var confirm = data[2];
            document.getElementById("pending").innerHTML = pending;
            document.getElementById("request").innerHTML = request;
            document.getElementById("confirmed").innerHTML = confirm;

        }
    });
}