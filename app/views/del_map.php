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
<!-- <div class="slideDown" style="width: 100%; height: 150px;">
       <?php foreach($data['orderData'] as $data): ?>
        <table style="margin-top: 20px; margin-bottom: 0px">
            <tr>
                <td><img src="<?php echo URLROOT."/public/img/location.jpg";?>" style="height: 30px;width:30px;" alt=""></td>
                <td><?php echo $data->streetAddress1;?>,<?php echo $data->streetAddress2;?>,<?php echo $data->city;?>,<?php echo $data->district;?></td>
            </tr>
            <tr>
            <td><img src="<?php echo URLROOT."/public/img/order.png";?>" style="height: 20px;width:20px;" alt=""></td>
            <td><?php echo $data->orderId;?></td>
            </tr>
            
       </table> 
    </div>
    <div class="grabPromo" style="width: 100%; height: 110px;">
       <table style="margin-top: -5px;text-align:left;">
            
            <tr>
                <td><img src="<?php echo URLROOT."/public/img/tel.png";?>" style="height: 20px;width:20px;" alt=""></td>
                <td><?php echo $data->PhoneNum;?></td>
            </tr>
            <tr>
            <td><b>Price</b></td>
            <td><?php echo $data->price;?></td>
            </tr>
            <tr>
            <td><img src="<?php echo URLROOT."/public/img/customer.png";?>" style="height: 20px;width:20px;" alt=""></td>
            <td><?php echo $data->FirstName;?> <?php echo $data->LastName;?></td>
            </tr>
       </table> 
       <?php endforeach; ?>
    </div>
     -->
    
            
            <div class="col-4 col-m-12 col-sm-12" id="addressCard">
                <div class="card" >
                    <div class="card-header">
                        <h3>
                            Address
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table>
                        <tbody>
                            <tr>
                                <th>Order Id </th><td id="id"></td>
                            </tr>
                            <tr>
                                <th>Street Address1: </th><td id="streetAddress1"></td>
                            </tr>
                            <tr>
                                <th>Street Address2: </th><td id="streetAddress2"></td>
                            </tr>
                            <tr>
                                <th>City: </th><td id="city"></td>
                            </tr>
                            <tr>
                                <th>District: </th><td id="district"></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
       
        

        <!-- end main content -->

        <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/del_footer.php");?>