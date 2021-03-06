const primaryColor = '#4834d4'
const warningColor = '#f0932b'
const successColor = '#6ab04c'
const dangerColor = '#eb4d4b'

const themeCookieName = 'theme'

const themeLight = 'light'

const body = document.getElementsByTagName('body')[0]
//************************************************************************************************


function searchBlog(){
    let filter = document.getElementById('filter').value.toUpperCase();
    console.log(filter);

    let tableRecord = document.getElementById('tableRecord');
    let tr = tableRecord.getElementsByTagName('tr');

    for(var i=0; i<tr.length;i++){
        let td=tr[i].getElementsByTagName('id')[0];

        if(td){
            let textvalue = td.textContent || td.innerHTML;
            if(textvalue.toUpperCase().indexOf() >-1){
                tr[i].style.display ="";

            }else {
                tr[i].style.display = "none";
            }
        }
    }

}

//****************************************************************************************


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
//$(".sidebar-nav-item").on("click", function() {
  //  $(".sidebar-nav-link").find(".active").removeClass("active");
   // $(this).parent().addClass("active");
//});

// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script
// src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
