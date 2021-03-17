<!DOCTYPE html>
<html>
<head>
    <title>Delivery Person Registration</title>

    <style>
    
*{margin: 0; padding: 0 ; } 
*{ text-decoration: none; }
.clearfix { overflow: auto; }
.wrapper {
    margin: 0 auto;
    width: 1200px;

    background-color:#E8ECF5 ;
        }
header {
    margin: 0 auto;
    width: 1200px;
    background: linear-gradient(#7FB5F1,white,#7FB5F1);

}.top-bar{
    width: 100%;
    background: #005EBB;
}

.top-bar-links{
    padding: 15px;
    float: right;
}

.top-bar-links ul{
    list-style: none;
}

.top-bar-links ul li{
    margin-top: 10px;
    display: inline-block;
}

.top-bar-links ul li a{

    color: white;
}

.top-bar ul li a:hover{
    color: black;
}
.site-search{
    padding: 10px 10px 10px 10px;
    margin: 15px;
    float: right;
    background: #182666 ;
    border-radius: 10px;
}

.site-search input{
    border: 0;
    float: left;
    background-color: #ABB1CC;
}

.site-search button{
    width: 18px;
    height: 18px;
    background: url(img/icons/search.png);
    border: 0;
    float: right;
    color: blue;
}

nav {
    width: 100%;
    background: blue;
    background: linear-gradient(#003087,#005EBB,#003087);
    text-align: center;
}

nav ul{
    list-style: none;
}

nav ul li{
    display: inline;
}
nav ul li a{
    color: white;
    text-transform: uppercase;
    margin: 25px 10px 25px 10px;
    display: inline-block;
}

nav ul li a:hover{
    color: black;
}
.table {

    background-color: #AED6F1 ;
    width: 600px;
   height:400px;
    float: left;

}
table{
    border: 1px solid black;
    margin: 0 auto;
        width: 600px;
        margin-top: 10px;
    margin-bottom: 20px;
    
    }
    
    td{
        
        
        text-align:left;
        background: #809fff;
        
    }
    
        
    
    th{
        color: white;
        background:#005EB8 ;
        padding: 15px;
    }
    .table,td,th:hover {
  opacity: 95%;
}
  .table,th:hover {
  opacity: 85%;
}
.table-search{
    padding: 10px 10px 10px 10px;
    margin: 15px;
    float: right;
    background: #3498DB;
    border-radius: 10px;
}

.table-search input{
    border: 0;
    float: left;
}

.table-search button{
    width: 18px;
    height: 18px;
    background: url(img/icons/search.png);
    border: 0;
    float: right;
    color: blue;
}
* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  height: 1070px;
  background-color: white;
  
  background-image: url("https://image.freepik.com/free-vector/deliveryman-with-scooter-city_23-2147667842.jpg");

}

/* Full-width input fields */
.container input[type=text], input[type=number] , input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
.container input[type=Date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


.container input[type=text]:focus, input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}
.container:hover {
  opacity: 90%;
}

/* Overwrite default styles of hr */

/* Set a style for the submit button */
.container button {
  background-color: #367BA8;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}
.container button:hover {
    background:  #1E2B81;
        }
.container h1 {
    margin-bottom: 20px;
}

/* Add a blue text color to links */


/* Set a grey background color and center the text of the "sign in" section */

.sellerform {
    width: 600px;
    float: right;
    
}
textarea {
    width: 100%;
    padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
.dropbtn {
  background: linear-gradient(#236178,#5793A9,#35B0D8,#5793A9,#236178);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #B7CFDE ;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color:#72A7C6 ;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: white;}

  #map {
        height: 100%;
        border: 10px solid white;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #origin-input,
      #destination-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 200px;
      }

      #origin-input:focus,
      #destination-input:focus {
        border-color: #4d90fe;
      }

      #mode-selector {
        color: #fff;
        background-color: #4d90fe;
        margin-left: 12px;
        padding: 5px 11px 0px 11px;
      }

      #mode-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
    </style>
     <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script
      // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
          mapTypeControl: false,
          center: { lat: 6.930013, lng: 79.852769 },
          zoom: 13, 
        });
        new AutocompleteDirectionsHandler(map);
      }

      class AutocompleteDirectionsHandler {
        constructor(map) {
          this.map = map;
          this.originPlaceId = "";
          this.destinationPlaceId = "";
          this.travelMode = google.maps.TravelMode.WALKING;
          this.directionsService = new google.maps.DirectionsService();
          this.directionsRenderer = new google.maps.DirectionsRenderer();
          this.directionsRenderer.setMap(map);
          const originInput = document.getElementById("origin-input");
          const destinationInput = document.getElementById("destination-input");
          const modeSelector = document.getElementById("mode-selector");
          const originAutocomplete = new google.maps.places.Autocomplete(
            originInput
          );
          // Specify just the place data fields that you need.
          originAutocomplete.setFields(["place_id"]);
          const destinationAutocomplete = new google.maps.places.Autocomplete(
            destinationInput
          );
          // Specify just the place data fields that you need.
          destinationAutocomplete.setFields(["place_id"]);
          this.setupClickListener(
            "changemode-walking",
            google.maps.TravelMode.WALKING
          );
          this.setupClickListener(
            "changemode-transit",
            google.maps.TravelMode.TRANSIT
          );
          this.setupClickListener(
            "changemode-driving",
            google.maps.TravelMode.DRIVING
          );
          this.setupPlaceChangedListener(originAutocomplete, "ORIG");
          this.setupPlaceChangedListener(destinationAutocomplete, "DEST");
          this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(
            originInput
          );
          this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(
            destinationInput
          );
          this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(
            modeSelector
          );
        }
        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        setupClickListener(id, mode) {
          const radioButton = document.getElementById(id);
          radioButton.addEventListener("click", () => {
            this.travelMode = mode;
            this.route();
          });
        }
        setupPlaceChangedListener(autocomplete, mode) {
          autocomplete.bindTo("bounds", this.map);
          autocomplete.addListener("place_changed", () => {
            const place = autocomplete.getPlace();

            if (!place.place_id) {
              window.alert("Please select an option from the dropdown list.");
              return;
            }

            if (mode === "ORIG") {
              this.originPlaceId = place.place_id;
            } else {
              this.destinationPlaceId = place.place_id;
            }
            this.route();
          });
        }
        route() {
          if (!this.originPlaceId || !this.destinationPlaceId) {
            return;
          }
          const me = this;
          this.directionsService.route(
            {
              origin: { placeId: this.originPlaceId },
              destination: { placeId: this.destinationPlaceId },
              travelMode: this.travelMode,
            },
            (response, status) => {
              if (status === "OK") {
                me.directionsRenderer.setDirections(response);
              } else {
                window.alert("Directions request failed due to " + status);
              }
            }
          );
        }
      }
    </script>
</head>
<body>
<header>
    <img src="https://st2.depositphotos.com/2627021/11890/i/950/depositphotos_118907380-stock-photo-doctor-writing-prescription-clinic-blurred.jpg" alt="Girl in a jacket" width="100" height="50">
</header><!-- /header -->
<div class="wrapper">
    
    <div class="top-bar clearfix" >
            <div class="site-search">
                <form method = "get" action ="Admin_Drug_Stock_Page.html" >
                    <input type="search" name="search-box">
                    <button type="submit"></button>
                </form>
            </div><!--site-search-->
            <div class="top-bar-links">
                <ul>
                    <li><a href="http://localhost/mvcfinal/admin_Pages/Admin_Home">Log Out</a></li>
                    
                </ul>
            </div><!--top-bar-links-->
        </div><!--top-bar-->
       <nav>
      <ul>
      
        <li><a href="http://localhost/mvcfinal/admin_Pages/myaccount">MyAccount</a></li>
        <li><a href="http://localhost/mvcfinal/admin_Pages/orderlist">OrderList</a></li>
        <li><a href="http://localhost/mvcfinal/admin_Pages/home">Log Out</a></li>
      </ul>
      

    </nav>
    <div class ="table">
        <div class="site-search">
                <form method = "get" action ="SellerReg.html" >
                    <input type="search" name="search-box">
                    <button type="submit"></button>
                </form>
            </div><!--table-search-->
        
        <table width="50%">
    <tr>
            <th style="width: 25%;">OrderID</th>
            <th style="width: 25%;">Name</th>
            <th>Location</th>
            
            

    </tr>

    </table>
        
    </div><!--table-->
    <div class = "sellerform">
        <div style="display: none">
      <input
        id="origin-input"
        class="controls"
        type="text"
        placeholder="Enter an origin location"
      />

      <input
        id="destination-input"
        class="controls"
        type="text"
        placeholder="Enter a destination location"
      />

      <div id="mode-selector" class="controls">
        <input
          type="radio"
          name="type"
          id="changemode-walking"
          checked="checked"
        />
        <label for="changemode-walking">Walking</label>

        <input type="radio" name="type" id="changemode-transit" />
        <label for="changemode-transit">Transit</label>

        <input type="radio" name="type" id="changemode-driving" />
        <label for="changemode-driving">Driving</label>
      </div>
    </div>

    <div id="map"  style="height: 400px; width: 600px;"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?AIzaSyBD_etC8vqyg6EZsnO83hBhoCGUoDmV1_k&callback=initMap&libraries=places&v=weekly"
      async
    ></script>
         
    </div>
    
    </div><!--wrapper-->
</body>
</html>