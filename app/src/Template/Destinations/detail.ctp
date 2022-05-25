<?php $this->start('script'); ?>
<?php echo $this->element('DestinationsContent/functions'); ?>
<?php echo $this->element('DestinationsContent/script'); ?>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyADxWFOh4wTX0BkI25fbyhHE9f1kTl_3RM&libraries=places" type="text/javascript" async defer ></script>
<script type="text/javascript">
    var map, infoWindow;
    var markers = [];

    $(document).ready(function(){
        var customer_location = '<?php echo ucwords($Tourism['address']) ?>';
        var center = [
            -6.176249, 106.827407
        ];

        $.ajax({
            type: 'GET',
            url: 'https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyADxWFOh4wTX0BkI25fbyhHE9f1kTl_3RM&address='+customer_location,
            dataType: "json",
            success: function(data){
                console.log(data);
                if (data.results != '') {
                    getRegionalTechnician(center, [data.results[0].geometry.location.lat, data.results[0].geometry.location.lng]);
                } else {
                    getRegionalTechnician(center, '');
                }
            }
        });
    });

    function getRegionalTechnician(center_coordinate, customer_latlng = ''){
        var array = [];
        var tourism = '<?php echo $Tourism['coordinate'] ?>';
        var coordinate = tourism.split(',');
        array.push(['<?php echo ucwords($Tourism['name']) ?>', parseFloat(coordinate[0]), parseFloat(coordinate[1])]);

        initMap(array, center_coordinate, customer_latlng);
    }

    function initMap(locations, coordinate, customer_latlng = '') {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: new google.maps.LatLng(coordinate[0], coordinate[1]),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var image = '<?php echo $this->Url->build('/img/technician.png', true); ?>';
        var customer_image = '<?php echo $this->Url->build('/img/customer.png', true); ?>';
        var infowindow = new google.maps.InfoWindow;
        var geocoder = new google.maps.Geocoder;
        var i;
        var total_coords = [];
        var customer_content = '<?php echo $Tourism['address'] ?>';
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer({suppressMarkers: true});
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        
        directionsDisplay.setMap(map);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
        });

        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
            return;
            }

            // Clear out the old markers.
            markers.forEach(function(marker) {
            marker.setMap(null);
            });
            markers = [];

            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function(place) {
            if (!place.geometry) {
                console.log("Returned place contains no geometry");
                return;
            }
            var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
                map: map,
                // icon: icon,
                title: place.name,
                position: place.geometry.location,
                animation: google.maps.Animation.DROP, 
                draggable: true
            }));

            $('#AddressLocationAbsen').val(place.formatted_address);
            $('#LatLocationAbsen').val(place.geometry.location.lat());
            $('#LngLocationAbsen').val(place.geometry.location.lng());

            calculateAndDisplayRoute(directionsService, directionsDisplay);

            if (place.geometry.viewport) {
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
            });
            map.fitBounds(bounds);
        });

        //get position when clicked
        google.maps.event.addListener(map, 'click', function(event) {
            // setMapOnAll(null);
            marker = new google.maps.Marker({position: event.latLng, map: map});
            markers.push(marker);
            $('#LatLocationAbsen').val(event.latLng.lat());
            $('#LngLocationAbsen').val(event.latLng.lng());

            geocodeLatLng(geocoder, map, infoWindow);
            calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
        //----end-----//

        google.maps.event.addListenerOnce(map, 'idle', function() {
        google.maps.event.trigger(map, 'resize');
        });

        if (customer_latlng != '') {
            var latlng = new google.maps.LatLng(customer_latlng[0], customer_latlng[1]);
            var marker = new google.maps.Marker({
                position: latlng,
                map: map
            });
            var infowindow = new google.maps.InfoWindow({
                content: customer_content,
                maxWidth: 200
            });

            infowindow.open(map, marker);
        }

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                $('#LatLocationAbsen').val(pos.lat);
                $('#LngLocationAbsen').val(pos.lng);
                map.setCenter(pos);
                geocodeLatLng(geocoder, map, infoWindow);
                calculateAndDisplayRoute(directionsService, directionsDisplay);
            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            handleLocationError(false, infoWindow, map.getCenter());
        }
    }

    function calculateAndDisplayRoute(directionsService, directionsDisplay){
        var lat = $('#LatLocationAbsen').val();
        var lng = $('#LngLocationAbsen').val();
        var customer_address = '<?php echo $Tourism['address'] ?>';
        var technician_coordinate = lat+','+lng;
        var content = $('#AddressLocationAbsen').val();

        directionsService.route({
        origin: technician_coordinate,
        destination: customer_address,
        travelMode: 'DRIVING',
        drivingOptions: {
            departureTime: new Date(Date.now()),
            trafficModel: 'optimistic'
        },
        unitSystem: google.maps.UnitSystem.METRIC
        }, function(response, status) {
            if (status === 'OK') {
                directionsDisplay.setDirections(response);
                $('#OriginAddress').html(response.routes[0].legs[0].start_address);
                $('#DestinationAddress').html(response.routes[0].legs[0].end_address);
                $('#Distance').html(response.routes[0].legs[0].distance.text);
                $('#Duration').html(response.routes[0].legs[0].duration.text);
                $('#ResultDirection').show('slow');
            }
        });
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
      infoWindow.setPosition(pos);
      infoWindow.setContent(browserHasGeolocation ?
                            'Error: The Geolocation service failed.' :
                            'Error: Your browser doesn\'t support geolocation.');
      infoWindow.open(map);
    }

    function geocodeLatLng(geocoder, map, infowindow) {
        var lat = $('#LatLocationAbsen').val();
        var lng = $('#LngLocationAbsen').val();
        var latlng = {lat: parseFloat(lat), lng: parseFloat(lng)};
        geocoder.geocode({'location': latlng}, function(results, status) {
            setMapOnAll(null);
            if (status === 'OK') {
                if (results[1]) {
                    map.setZoom(15);
                    var marker = new google.maps.Marker({
                    position: latlng,
                    map: map
                    });
                    markers.push(marker);
                    // infoWindow.setPosition(latlng);
                    // infowindow.setContent(results[0].formatted_address);
                    $('#AddressLocationAbsen').val(results[0].formatted_address);
                }
            } else {
                infowindow.setContent('Lokasi saat ini');
            }
        });
    }

    function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
    }

</script>
<?php $this->end(); ?>

<?php $admin = explode(",",$Tourism['user_admin_id']); ?>

<section class="product-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="product-detail__info">
                    <div class="product-title">
                        <h2><?php echo ucwords($Tourism['name']) ?></h2> <a href="#" id="OpenFormGeneral"><i class="fa fa-pencil"></i></a>
                    </div>
                    <div class="product-address">
                        <span><?php echo ucwords($Tourism['address']) ?>, <?php echo ucwords($Tourism['province']) ?>,<?php echo ucwords($Tourism['country']) ?> | <?php echo $Tourism['admin_phone'] ?> (<?php echo $Tourism['admin_fullname'] ?>)</span>
                    </div>
                    <!-- <div class="product-email">
                        <i class="fa fa-envelope"></i>
                        <a href="#">Send Email Inquiry</a>
                    </div> -->

                    <!-- <div class="rating-trip-reviews">
                        <div class="item good">
                            <span class="count">7.5</span>
                            <h6>Average rating</h6>
                            <p>Good</p>
                        </div>
                        <div class="item">
                            <h6>TripAdvisor ></h6>
                            <img src="images/trips.png" alt="">
                        </div>
                        <div class="item">
                            <h6>Reviews</h6>
                            <p>No review yet</p>
                        </div>
                    </div> -->

                    <table class="ticket-price">
                        <thead>
                            <tr>
                                <th class="ticket-price"><p>Tiket Masuk :</p></th>
                                <th class="adult"><span>Dewasa</span></th>
                                <th class="kid"><span>Anak - anak</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ticket-price">
                                    <em>Buka setiap hari</em>
                                </td>
                                <td class="adult">
                                    <ins>
                                        <span class="amount">Rp <?php echo number_format($Tourism['price'], 0, ",", ".") ?></span>
                                    </ins>
                                </td>
                                <td class="kid">
                                    <ins>
                                        <span class="amount">Rp <?php echo number_format($Tourism['price'], 0, ",", ".") ?></span>
                                    </ins>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div id="WarningGeneralUpdateTourism" hidden></div>
                    <div id="FormGeneralUpdateTourism" hidden>
                        <div class="form-group">
                            <label for="">Nama Destinasi</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="update_general_name" id="UpdateGeneralName" class="form-control input-sm" placeholder="Nama Destinasi..">
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                        </div>
                        <div class="form-group">
                            <input type="number" name="update_general_price" id="UpdateGeneralPrice" class="form-control input-sm" placeholder="Harga..">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                        </div>
                        <div class="form-group">
                            <textarea name="update_general_address" id="UpdateGeneralAddress" class="form-control input-sm" rows="3" placeholder="Alamat.."></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" id="SaveGeneralUpdate">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="product-detail__gallery">
                    <div class="product-slider-wrapper">
                        <div class="product-slider">
                            <?php 
                                foreach ($Attachment as $attachment) {
                            ?>
                                <div class="item">
                                    <img src="/tourism/files/photos/tourism/<?php echo $Tourism['id'] ?>/<?php echo $attachment['filename'] ?>" alt="">
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="product-slider-thumb-row">
                            <div class="product-slider-thumb">
                                <?php 
                                    foreach ($Attachment as $attachment) {
                                ?>
                                    <div class="item">
                                        <img src="/tourism/files/photos/tourism/<?php echo $Tourism['id'] ?>/<?php echo $attachment['filename'] ?>" alt="">
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="product-tabs tabs">
                    <ul>
                        <li>
                            <a href="#tabs-1">Deskripsi</a>
                        </li>
                        <li>
                            <a href="#tabs-4">Lokasi</a>
                        </li>
                        
                        <?php
                            if (in_array($this->request->session()->read('Auth.User.id'), $admin)) {
                        ?>
                            <li>
                                <a href="#tabs-2">Cek Tiket</a>
                            </li>
                            <li>
                                <a href="#tabs-3">Foto</a>
                            </li>
                        <?php
                            }
                        ?>
                        
                    </ul>
                    <div class="product-tabs__content">
                        <div id="tabs-1">
                            <p id='TourismDescription'><?php echo $Tourism['tourism_description'] ?></p>
                            <?php 
                                if (in_array($this->request->session()->read('Auth.User.id'), $admin)) {
                            ?>
                                <div id="WarningDescription" hidden></div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-sm" id="OpenFormDescription">Ubah Deskripsi</button>
                                </div>
                                <div id="FormEditDescription" hidden>
                                    <div class="form-group">
                                        <textarea name="new_description" id="NewDescription" class="form-control" rows="5" placeholder="Deskripsi Wisata"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button id="SaveDescription" class="btn btn-primary btn-sm">Simpan</button>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>

                        </div>

                        <?php 
                            if (in_array($this->request->session()->read('Auth.User.id'), $admin)) {
                        ?>
                            <div id="tabs-2">
                                <div id="WarningCheckInTicket" hidden></div>
                                <div class="form-group">
                                    <label for="">Masukkan Nomor Tiket</label>
                                </div>
                                <div class="form-inline">
                                    <input type="text" class="form-control" id="NoTicketCheckIn">
                                    <button class="btn btn-primary" id="CheckIn">Check In</button>
                                </div>
                            </div>
                            <div id="tabs-3">
                                <div id="WarningUploadAttachmentsTicket" hidden></div>
                                <div class="col-sm-12">
                                    <h4>
                                        Foto Destinasi
                                    </h4>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Form Foto</label>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-sm" id="AddFormAttachment">Tambah Foto</button>
                                        </div>
                                        <input type="hidden" id="TotalAttachment" value="0">
                                        <input type="hidden" id="TourismId" value="<?php echo $Tourism['id']; ?>">
                                        <div id="FormAttachments"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div>
                                            <label for="">Daftar Foto</label>
                                        </div>
                                        <div id="FormDelAttachments">
                                            <ul>
                                                <?php 
                                                    foreach ($Attachment as $attachment) {
                                                ?>
                                                    <div class="form-group" id="Attachment_<?php echo $attachment['id'] ?>">
                                                        <a href="/tourism/files/photos/tourism/<?php echo $Tourism['id'] ?>/<?php echo $attachment['filename'] ?>" alt=""><?php echo $attachment['filename'] ?></a> <button id="<?php echo $attachment['id'] ?>" class="btn btn-danger btn-sm del_attachment" data-toggle="modal" data-target="#DeleteAttachmentModal"><i class="fa fa-trash"></i></button>
                                                    </div>
                                                <?php
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            }
                        ?>

                        <div id="tabs-4">
                            <div id="ResultDirection" hidden="true">
	                            <h4>Info Perjalanan</h4>
	                            Asal : <font id="OriginAddress"></font><br>
	                            Tujuan : <font id="DestinationAddress"></font><br>
	                            Jarak : <font id="Distance"></font><br>
	                            Durasi : <font id ="Duration"></font><br>
	                        </div>
                            <hr>
                            <input id="pac-input" class="controls form-control input-sm" type="text" placeholder="Search Box">
                            <div id="map" style="min-height:400px" class="form-control"></div>
                            <div class="form-group">
                                <input type="hidden" id="LatLocationAbsen">
                                <input type="hidden" id="LngLocationAbsen">
                                <input type="hidden" class="form-control" id="AddressLocationAbsen">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <?php 
                if (!in_array($this->request->session()->read('Auth.User.id'), $admin)) {
            ?>
                <div class="col-md-3">
                    <?php echo $this->Form->create(null, ['url' => ['action' => 'saveTicket'], 'id' => 'AddTicket', 'type' => 'file']); ?>
                    <div class="detail-sidebar">
                        <div class="call-to-book">
                            <i class="awe-icon awe-icon-phone"></i>
                            <em>Hubungi</em>
                            <span><?php echo $Tourism['admin_phone'] ?></span>
                        </div>
                        <div class="booking-info">
                            <h3>Info Pesanan</h3>
                            <div class="form-group">
                                <input type="hidden" name="price_ticket" id="PriceTicket" value="<?php echo $Tourism['price'] ?>">
                                <input type="hidden" name="total_price" id="TotalPrice" value="">
                                <input type="hidden" name="tourism_id" id="TourismId" value="<?php echo $Tourism['id'] ?>">
                                <div class="form-elements form-adult">
                                    <label>Dewasa</label>
                                    <div class="form-item">
                                        <input type="number" class="form-control ticket_buy" name="adult_ticket" id="AdultTicket" value="">    
                                    </div>
                                    <span>12 tahun keatas</span>
                                </div>
                                <div class="form-elements form-kids">
                                    <label>Anak-Anak</label>
                                    <div class="form-item">
                                        <input type="number" class="form-control ticket_buy" name="kids_ticket" id="KidsTicket" value="">    
                                    </div>
                                    <span>3 - 11 tahun</span>
                                </div>
                            </div>
                            <div class="price">
                                <em>Total</em>
                                <span class="amount" id="TotalPriceText">Rp. 0</span>
                            </div>
                            <div class="form-submit">
                                <div class="add-to-cart">
                                    <button type="submit">
                                        <i class="awe-icon awe-icon-cart"></i>Masukkan Keranjang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?> 
                </div>
            <?php
                }
            ?>

        </div>
    </div>
</section>

<div id="DeleteAttachmentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus Lampiran</h4>
      </div>
      <div class="modal-body" >Hapus foto</div>
      <div class="modal-footer">
        <input type="hidden" id="AttachmentId" name="" value="">
        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="ConfirmDeleteAttachment">Hapus</button>
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>