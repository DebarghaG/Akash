<?php
$dashboard = "true";
include("header.php"); ?>

<style media="screen">
  footer.site-footer {display: none;}
</style>

<!--
<div class="permission-map-search">
  <input type="text" name="" value="" placeholder="Search">
</div>
-->
<div id="permission-map">
  <div class="map-wrapper">
    <div id="map" class="map"></div>
  </div>

<?php
// To see how notification will look, add ?notification=true in url
if($_GET["notification"] == true) {  ?>

  <div class="alert-notification" data-closable>
      <div class="title-wrap">
          <h3 class="title">restricted airspace</h3>
      </div>
      <p>This is a no fly zone. You are not permitted to fly your drone here, or even apply for it.</p>

      <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
        <span aria-hidden="true"></span>
      </button>
  </div>
<?php } ?>


  <?php
  // To see how altitude range selecter will look, add ?altitude=true in url
  if($_GET["altitude"] == true) {  ?>

    <div class="altitude-range-wrap">
      <div class="wrap">
        <h3 class="title">Select Altitude</h3>
        <div class="slider-wrapper">
          <div class="slider" data-slider data-initial-start="0" data-end="500">
            <div class="circle-left filled">
              <?php echo file_get_contents("img/step-circle-todo.svg"); ?>
            </div>
              <span class="slider-handle" data-slider-handle role="slider" tabindex="1" ></span>
              <span class="slider-fill" data-slider-fill></span>
              <div class="circle-right">
                <?php echo file_get_contents("img/step-circle-todo.svg"); ?>
              </div>
          </div>
          <input type="text" id="altitude-value" disabled>
        </div>
      </div>
    </div>

  <?php } ?>


  <div class="altitude-notification-wrap">
    <p>Maximum altitude allowed in selected area:&nbsp;<span class="altitude">500m</span></p>
  </div>
  <div class="permission-navigation">
    <div class="wrap">
      <a href="apply-for-permission-step-1.php" class="button button-light back">back</a>
      <a href="apply-for-permission-step-review.php" class="button continue">continue</a>

    </div>
  </div>
</div>

<script src="https://apis.mapmyindia.com/advancedmaps/v1/fpxh3yzx3tw9gs2s46rabqehev7qkaab/map_load?v=01."></script>
<script>
    var lat = 28.6129602407977;
    var lon = 77.22945570945740;
    var radius = 100;
    var marker;
    var currentDiameter;
    window.onload = function () {
        document.getElementById('lat').value = lat;
        document.getElementById('lon').value = lon;
        document.getElementById('radius').value = radius;
        if (lat != '' && lon != '' && radius != '') {
            if (checkValidLatlong(parseFloat(lat), parseFloat(lon))) {
                var centre = new L.LatLng(lat, lon);
                map = new MapmyIndia.Map('map', {center: centre, zoomControl: true, hybrid: true});
                /*1.create a MapmyIndia Map by simply calling new MapmyIndia.Map() and passsing it at the minimum div object, all others are optional...
                 2.all leaflet mapping functions can be called simply on the L object
                 3.MapmyIndia may extend and in future modify the customised/forked Leaflet object to enhance mapping functionality for developers, which will be clearly documented in the MapmyIndia API documentation section.*/
                var icon = L.icon({iconUrl: 'img/pin.svg', iconRetinaUrl: 'img/pin.svg', iconSize: [30, 30]});
                marker = L.marker(centre, {icon: icon, draggable: true}).addTo(map);
                marker.on('dragend', function (event) {
                    var position = event.target.getLatLng();
                    document.getElementById('lat').value = position.lat;/***set div elements values***/
                    document.getElementById('lon').value = position.lng;
                    showCircle();
                });
                showCircle();
            }
        }
        else {
            document.getElementById('result').innerHTML = "Please enter lat/lon/radius";
        }
    };
    function showCircle() {
        document.getElementById('result').innerHTML = "";
        if (currentDiameter)
            map.removeLayer(currentDiameter);
        lat = document.getElementById('lat').value;
        lon = document.getElementById('lon').value;
        radius = document.getElementById('radius').value;
        if (lat != '' && lon != '' && radius != '') {
            if (checkValidLatlong(parseFloat(lat), parseFloat(lon))) {
                if (marker)
                    marker.setLatLng([lat, lon]);
                currentDiameter = L.circle([lat, lon], {
                    color: 'pink',
                    fillColor: '#FFC0CB',
                    fillOpacity: 0.5,
                    radius: radius
                });
                currentDiameter.addTo(map);
                map.fitBounds(currentDiameter.getBounds());
            }
        }
        else {
            document.getElementById('result').innerHTML = "Insufficient parameters";
        }
    }
    function isNumberKeyDecimals(evt) {
        /*check for input boxes*/
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode != 46 && (charCode < 48 || charCode > 57)))
            return false;
        return true;
    }
    function checkValidLatlong(lat, lon) {
        /*check for input as valid lat lon*/
        if (lat >= 180 || lat <= -180 || lon >= 180 || lon <= -180) {
            document.getElementById('result').innerHTML = "Invalid Lat lon values";
            return false;
        } else {
            return true;
        }
    }
</script>
</head>
<body>
    <div id="menu">
      <br>
      <div style="padding: 5px 0;font-size:13px;color:#222">Latitude</div>
            <input type="text" style="width: 254px; margin-right: 10px;padding:5px;border:1px solid #ddd;color:#555" id="lat" placeholder="Latitude" autocomplete="off" onkeypress="if (event.which == 13 || event.keyCode == 13)
                        showCircle();
                    return isNumberKeyDecimals(event);">
                <div style="padding: 5px 0;font-size:13px;color:#222">Longitude</div>
                <input type="text" style="width: 254px; margin-right: 10px;padding:5px;border:1px solid #ddd;color:#555" id="lon" placeholder="longitude" autocomplete="off" onkeypress="if (event.which == 13 || event.keyCode == 13)
                            showCircle();
                        return isNumberKeyDecimals(event);"/>
                <div style="padding: 5px 0;font-size:13px;color:#222">Radius (in m)</div>
                <input type="number" style="width: 254px; margin-right: 10px;padding:5px;border:1px solid #ddd;color:#555" id="radius" placeholder="radius" autocomplete="off" onkeypress="if (event.which == 13 || event.keyCode == 13)
                            showCircle();
                        return isNumberKeyDecimals(event);"/>
        </div>
        <div style="margin-top: 20px">
            <ul style=" line-height: 20px; font-size: 12px;">
                <li>Drag marker to geofence at your desired location</li>
            </ul>
        </div>
        <div style="border-top: 1px solid #e9e9e9;margin-top: 20px;padding: 10px 10px 5px 17px;font-size: 13px;" id="result">loading..</div>
    </div>
    <!--put your map container here-->
    <div id="map"></div>
</body>
</html>
<style> html, body, #map {margin: 0;padding: 0;width: 100%;height: 100%;} </style>

<div id="map"></div>;


<?php include("footer.php");
