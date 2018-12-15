<?php
$dashboard = "true";
include("header.php"); ?>

<div id="apply-for-block">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-6 large-offset-3 cell">
        <h2>Apply now</h2>
        <p>What are you applying for?</p>

        <div class="apply-for-wrap" data-equalizer>
          <a href="apply-for-pilot.php">
          <div class="apply-for apply-for-pilot" data-equalizer-watch>
            <div class="icon">
              <img src="img/pilot.svg" alt="">
            </div>
            <div class="details">
              <div class="wrap">
                <p class="title">Pilot</p>
                <p class="info">Apply for a license to use an unmanned aircraft as an individual.</p>
              </div>
            </div>
          </div>
          </a>

          <a href="#">
          <div class="apply-for apply-for-operator" data-equalizer-watch>
            <div class="icon">
              <img src="img/operator.svg" alt="">
            </div>
            <div class="details">
              <div class="wrap">
                <p class="title">Operator</p>
                <p class="info">Apply for a license to manage drones as an organisation.</p>
              </div>
            </div>
          </div>
          </a>

          <a href="#">
          <div class="apply-for apply-for-manufacturer" data-equalizer-watch>
            <div class="icon">
              <img src="img/manufacturer.svg" alt="">
            </div>
            <div class="details">
              <div class="wrap">
                <p class="title">Manufacturer</p>
                <p class="info">Register a new drone as a manufacturer.</p>
              </div>
            </div>
          </div>
          </a>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php");
