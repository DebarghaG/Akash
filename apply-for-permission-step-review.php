<?php
$dashboard = "true";
include("header.php"); ?>

<div id="apply-for-form">

<div class="apply-for-form-header">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <h2>Review application for Permission</h2>
      </div>
    </div>
  </div>
</div>

<div id="application-preview" class="page-form">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">

      <div class="large-12 cell">

        <div class="question">
          <h6>Name of applicant in full:</h6>
          <p>Prajwal Seth</p>
        </div>

        <div class="question">
          <h6>Parentage</h6>
          <p>Pankaj Seith</p>
        </div>

        <div class="question">
          <h6>Present address</h6>
          <p>ABC colony, Gurgaon,
          India - 122003.</p>
        </div>

        <div class="question">
          <h6>Resident of India?</h6>
          <p>Yes, I am a resident of india</p>
        </div>


      </div>
    </div>
  </div>
</div>



<div class="form-footer final-step white-footer">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <a href="apply-for-permission-map.php" class="back"> <img src="img/back.svg" alt=""> Go back to select area</a>
        <a class="button" href="/dashboard-2.php" data-open="application-status-modal" aria-controls="application-status-modal" aria-haspopup="true" tabindex="0">apply for permission</a>
      </div>
    </div>
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
