<style>
    .title {
        text-transform: capitalize;
    }
</style>
<script>
    ///////////////// Add addresss view  ///////////////////////

    $.ajax({
        type: "GET",
        url: "<?= base_url('customer/get_customer_address') ?>",
        error: function(response) {
            console.log(response);
        },
        success: function(response) {
            if (response.success) {
                // console.log(response);
                var data = response.data;
                var address = data.address;
                var index = address.indexOf(" ");
                var address_title = address.slice(0, index);

                $('#text_main_address').html(address_title).addClass('title');

                $('#text_address').html(data.address).addClass('title');
                $('#txt_address').val(data.address).addClass('title');
                $('#txt_pincode').val(data.pincode);

                initMap(data.lat, data.lng);

            } else {
                $('#text_main_address').html("Not Found");
                $('#text_address').html(response.message);
                $('#txt_address').val('');
                initMap(22.5726, 88.3639);
            }
        }
    });


    $('#btn_add_deliver_address').click(function() {
        let address = $('#txt_address').val();
        let lat = $('#txt_lat').val();
        let lng = $('#txt_lng').val();

        $.ajax({
            type: "POST",
            url: "<?= base_url('customer/add_deliver_address') ?>",
            data: {
                "address": address,
                'lat': lat,
                'lng': lng
            },
            error: function(response) {
                // console.log(response);
            },
            success: function(response) {
                // console.log(response);
                if (response.success) {
                    var data = response.data;
                    location.href = response.redirect;
                } else {
                    toast(response.message);
                }
            }
        });
    });

    /////////////////////// detail address ///////////////////////////////

    $('#form_detail_address').submit(function(e) {
        e.preventDefault();
        var form = document.getElementById('form_detail_address');
        var formData = new FormData(form);


        $.ajax({
            type: "POST",
            url: "<?= base_url('customer/save_detail_deliver_address') ?>",
            data: formData,
            contentType: false,
            processData: false,
            error: function(response) {
                // console.log(response);
            },
            success: function(response) {
                // console.log(response);
                if (response.success) {
                    location.href = response.redirect;

                } else {
                    toast(response.message);
                }
            }
        });

    });

    $.ajax({
        type: "POST",
        url: "<?= base_url('customer/get_detail_user_address') ?>",
        error: function(response) {
            console.log(response);
        },
        success: function(response) {
            if (response.success) {
                var data = response.data[0];
                // console.log(data);
                var address = data.address;
                var index = address.indexOf(" ");
                var main_add = address.slice(0, index);
                $('#detail_main_address').html(main_add).addClass('title');

                $('#detail_deliver_address').html(data.address).addClass('title');

                $('#house').val(data.house_number).addClass('title');
                $('#area').val(data.road).addClass('title');
                $('#direction').val(data.direction).addClass('title');
                $('#pincode').val(data.pincode);
                $("textarea").text(data.extra_detail).addClass('title');
                $('input:radio[name=address_type]').val([data.address_type]);




            } else {
                $('#detail_main_address').html("Not Available");
                $('#detail_deliver_address').html(response.message);
                $('#txt_address').val('');
            }
        }
    });
    ////////////////////// select location on map /////////////////////////////////////////////

    function initMap(lat, lng) {

        var myLatlng = new google.maps.LatLng(22.5726, 88.3639);

        myLatlng = new google.maps.LatLng(lat, lng);

        var mapOptions = {
            zoom: 18,
            center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            title: "Select Delivery Location"
        });

        marker.setMap(map);

        google.maps.event.addListener(map, 'dragend', function() {
            marker.setPosition(this.getCenter());
            get_address_by_lat_lng(this.getCenter().lat(), this.getCenter().lng());
        });
    }

    function get_address_by_lat_lng(lat, lng) {
        $('#txt_lat').val(lat);
        $('#txt_lng').val(lng);

        var lat = lat;
        var lng = lng;
        var latlng = new google.maps.LatLng(lat, lng);
        var geocoder = geocoder = new google.maps.Geocoder();
        geocoder.geocode({
            'latLng': latlng
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[1]) {
                    let address = results[1].formatted_address;
                    console.log(address);
                    $('#txt_address').val(address);
                    $('#text_address').text(address);

                } else {
                    console.log('not found');
                }
            }
        });
    }
</script>

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=<?= const_google_api_key ?>&callback=initMap" async defer></script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=<?= const_google_api_key ?>"></script>