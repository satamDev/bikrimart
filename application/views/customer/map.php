<style>
    #map {
        height: 100vh;
        width: 100%;
    }
</style>
<div class="content-wrapper">
    <div class='d-flex justify-content-center'>
        <div id="map"></div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function(){

        initMap();
        console.log('start');
    })

    function initMap() {

        var map;
        var infowindow = new google.maps.InfoWindow();

        var myLatLng = {
            lat: parseFloat(22.5726),
            lng: parseFloat(88.3639)
        };

        map = new google.maps.Map(document.getElementById('map-canvas'), {
            zoom: 6,
            center: myLatLng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(22.5726, 88.3639),
            map: map,
            
        });

    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCx7UqFSWYeSjVzcXbgBKB5nnarnHZWoM&callback=initMap"></script>