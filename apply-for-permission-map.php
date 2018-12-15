<?php
$dashboard = "true";
include("header.php"); ?>

<style media="screen">
  footer.site-footer {display: none;}
</style>

<div class="permission-map-search">
  <input type="text" name="" value="" placeholder="Search">
</div>

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

<script src='https://api.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet' />

<script>
  mapboxgl.accessToken = 'pk.eyJ1Ijoid2F6aWRzaGFoIiwiYSI6ImNqbWJxaGFodTAzOTczcm52d2E0ZjRuMzEifQ._lF35-CLDyoZMc7aznrIZQ';
  var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v10',
  zoom: 14,
  center: [73.8278, 15.4909]
  });
</script>

<?php include("footer.php");
