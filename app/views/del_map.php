<?php require_once ($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/del_header.php");?>
<!-- <script type='text/javascript' src="http://maps.googleapis.com/maps/api/js?&sensor=false">
</script>
<script>
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (p) {
            var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
            var mapOptions = {
                center: LatLng,
                zoom: 13,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var marker = new google.maps.Marker({
                position: LatLng,
                map: map,
                title: "<div style = 'height:60px;width:200px'><b>Your location:</b><br />Latitude: " + p.coords.latitude + "<br />Longitude: " + p.coords.longitude
            });
            google.maps.event.addListener(marker, "click", function (e) {
                var infoWindow = new google.maps.InfoWindow();
                infoWindow.setContent(marker.title);
                infoWindow.open(map, marker);
            });
        });
    }
</script> -->
<!-- main content -->
<div class="wrapper" id="wrapper">
<?php $data_back = $data['0']; ?>
     
            <div class="col-4 col-m-12 col-sm-12" >
                <div class="card" >
                    <div class="card-header">
                        <h3>
                            Order Details
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                    <?php foreach($data['orderData'] as $data): ?>
                        <table>
                        <tbody>
                            <tr>
                                <th>Order Id: </th><td id="orderId"><?php echo $data->orderId;?></td>
                            </tr>
                            <tr>
                                <th>Name: </th><td ><?php echo $data->FirstName;?> <?php echo $data->LastName;?></td>
                            </tr>
                            <tr>
                                <th>Phone: </th><td ><?php echo $data->PhoneNum;?></td>
                            </tr>
                            <tr>
                                <th>Street Address1: </th><td id="streetAddress1"><?php echo $data->streetAddress1;?></td>
                            </tr>
                            <tr>
                                <th>Street Address2: </th><td id="streetAddress2"><?php echo $data->streetAddress2;?></td>
                            </tr>
                            <tr>
                                <th>City: </th><td id="city"><?php echo $data->city;?></td>
                            </tr>
                            <tr>
                                <th>District: </th><td id="district"><?php echo $data->district;?></td>
                            </tr>
                            <tr>
                                <th>Price </th><td ><?php echo $data->price;?></td>
                            </tr>
                        </tbody>
                        </table>

                        <?php endforeach; ?>
                        <?php if($data_back == 'del_location'){ ?>
                            <button onclick="window.location.assign('http://localhost/mvcfinal/del_orders/show_locations')" style="float: left;">Cancel</button>
                        <?php }else{ ?>
                            <button onclick="window.location.assign('http://localhost/mvcfinal/del_orders/show_cities')" style="float: left;">Cancel</button>
                        <?php } ?>
                        <button style="float: right;" onclick='orderDeliverd("<?php echo $data_back; ?>")'>Delivered</button>
                        
                    </div>
                    
                </div>
            </div>
       
        

        <!-- end main content -->

        <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/del_footer.php");?>