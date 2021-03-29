const primaryColor = '#4834d4'
const warningColor = '#f0932b'
const successColor = '#6ab04c'
const dangerColor = '#eb4d4b'

const themeCookieName = 'theme'

const themeLight = 'light'

const body = document.getElementsByTagName('body')[0]



function collapseSidebar() {
    body.classList.toggle('sidebar-expand')
}

window.onclick = function(event) {
    openCloseDropdown(event)
}

function closeAllDropdown() {
    var dropdowns = document.getElementsByClassName('dropdown-expand')
    for (var i = 0; i < dropdowns.length; i++) {
        dropdowns[i].classList.remove('dropdown-expand')
    }
}

function openCloseDropdown(event) {
    if (!event.target.matches('.dropdown-toggle')) {
        // 
        // Close dropdown when click out of dropdown menu
        // 
        closeAllDropdown()
    } else {
        var toggle = event.target.dataset.toggle
        var content = document.getElementById(toggle)
        if (content.classList.contains('dropdown-expand')) {
            closeAllDropdown()
        } else {
            closeAllDropdown()
            content.classList.add('dropdown-expand')
        }
    }
}
// $(".sidebar-nav-item").on("click", function() {
//     $(".sidebar-nav-link").find(".active").removeClass("active");
//     $(this).parent().addClass("active");
// });

prescription();

function prescription() {
    var prescription = document.getElementById("prescription-hidden").value;
    if (prescription) {
        console.log(prescription);
        const html = '<embed src="http://localhost/mvcfinal/public/img/prescriptions/' + prescription + '" style="display: block; margin-left: auto;margin-right: auto;width: 100%;"></embed>';
        $('#image_wrapp').html(html);
    } else {
        console.log("none");
        const html = '<div>No Prescription<div>';
        $('#image_wrapp').html(html);
    }
    // document.getElementById("inputTable").style.width = "50%";
    // var x = document.getElementById("prescriptionCard");
    //var y = document.getElementById("openTab");
    //var z = document.getElementById("hiddenTab");
    // x.style.display = "block";
    //y.style.display = "none";
    // z.style.display = "block";


}


function showNote() {
    var x = document.getElementById("noteCard");
    var z = document.getElementById("prescriptionCard");
    var y = document.getElementById("selectedMedicine");
    x.style.display = "block";
    z.style.display = "none";
    y.style.width = "100%"
}

function closeNote() {
    var x = document.getElementById("noteCard");
    // var y = document.getElementById("selectedMedicine");
    var z = document.getElementById("prescriptionCard");
    x.style.display = "none";
    // y.style.width = "76.66%";
    z.style.display = "block";


}

function medicineList() {
    document.getElementById("inputTable").style.width = "66.66%";
    var x = document.getElementById("prescriptionCard");
    //var y = document.getElementById("openTab");
    // var z = document.getElementById("hiddenTab");
    x.style.display = "none";
    // y.style.display = "block";
    //z.style.display = "none";

}
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function open_notification(title, content) {
    if (title == "Warning") {
        document.querySelector("#title").style.color = "red";
    } else if (title == "Success") {
        document.querySelector("#title").style.color = "green";
    } else if (title == "Order Proceed...") {
        document.querySelector("#title").style.color = "green";
    } else if (title == "Order Completed...") {
        document.querySelector("#title").style.color = "green";
    }
    document.querySelector("#title").innerHTML = title;
    document.querySelector("#notice_content").innerHTML = content;
    document.querySelector("#overly").style.display = "block";
    document.querySelector("#notification").style.display = "block";
}

function close_notification() {
    var titel = document.getElementById('title').textContent;
    document.querySelector("#title").innerHTML = "";
    document.querySelector("#notice_content").innerHTML = "";
    document.querySelector("#overly").style.display = "none";
    document.querySelector("#notification").style.display = "none";
    if (titel == "Order Proceed...") {
        window.location.href = "http://localhost/mvcfinal/pc_view_drug/show_requestedOrders";
    }
    if (titel == "Order Completed...") {
        clear();
    }
}

function open_confirm() {
    var prescription = document.getElementById("prescription-hidden").value;
    console.log(prescription);
    if (prescription) {
        console.log(prescription);
        const html = '<embed src="http://localhost/mvcfinal/public/img/prescriptions/' + prescription + '" style="display: block; margin-left: auto;margin-right: auto;width: 100%;"></embed>';
        $('#image_wrapp_confirm').html(html);
    } else {
        console.log("none");
        const html = '<div>No Prescription<div>';
        $('#image_wrapp_confirm').html(html);
    }

    // const html = '<embed src="http://localhost/mvcfinal/public/img/prescriptions/' + prescription + '" style="display: block; margin-left: auto;margin-right: auto;width: 100%;"></embed>';
    // $('#image_wrapp_confirm').html(html);
    document.querySelector("#overly").style.display = "block";
    document.querySelector("#confirm").style.display = "block";
    fill_confirm_table();

}

function close_confirm() {
    document.querySelector("#overly").style.display = "none";
    document.querySelector("#confirm").style.display = "none";

}