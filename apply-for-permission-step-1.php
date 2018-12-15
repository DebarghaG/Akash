<?php
$dashboard = "true";
include("header.php"); ?>

<div id="apply-for-form">

<form id="apply-for-permission-one" action="apply-for-permission-2.php" method="post">
  <div class="apply-for-form-header">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-6 cell">
          <h2>Application <br>for permission</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="page-form">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <label>Select drone
            <select class="select_drone" name="">
              <option disabled selected value="">Select drone</option>
              <option value="drone_1">Drone 1</option>
              <option value="drone_2">Drone 2</option>
              <option value="drone_3">Drone 3</option>
            </select>
          </label>
        </div>

        <div class="large-12 cell">
          <label>Payload
            <select class="select_payload" name="">
              <option disabled selected value="">Camera</option>
              <option value="drone_1">Drone 1</option>
              <option value="drone_2">Drone 2</option>
              <option value="drone_3">Drone 3</option>
            </select>
          </label>
        </div>

        <div class="large-12 cell">
          <label>Purpose of flying
            <select class="select_drone" name="">
              <option disabled selected value="">Photography</option>
              <option value="drone_1">Drone 1</option>
              <option value="drone_2">Drone 2</option>
              <option value="drone_3">Drone 3</option>
            </select>
          </label>
        </div>

       <div class="large-12 cell">
        <label>More fields
          <input type="text" placeholder="More fields">
        </label>
      </div>

      <div class="large-12 cell">
        <label>More fields
          <input type="text" placeholder="More fields">
          <input type="text" placeholder="More fields">
        </label>
      </div>

      </div>
    </div>
  </div>

  <div class="form-footer">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <a href="apply-for-permission-map.php" class="button">Choose area</a>
        </div>
      </div>
    </div>
  </div>

</form>

</div>

<?php include("footer.php");
