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


function slidebarOpen() {
    var x = document.getElementById("sidebar");
    // if (x.style.width === "0px") {
    //     document.getElementById("sidebar").style.width = "250px";
    // } else {
    //     document.getElementById("sidebar").style.width = "0px";
    // }
    if (x.classList.contains("show")) {
        document.getElementById("sidebar").classList.remove("show");
        document.getElementById("sidebar").classList.add("hide");
        document.getElementById("wrapper").style.backgroundColor = "#f1f1f1";
    } else {
        document.getElementById("sidebar").classList.remove("hide");
        document.getElementById("sidebar").classList.add("show");
        document.getElementById("wrapper").style.backgroundColor = "gray";
    }


}