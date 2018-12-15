<?php
$dashboard = "true";
include("header.php"); ?>
<div id="apply-for-form">

<form id="apply-for-permission-bulk" action="apply-for-permission-2.php" method="post">

  <div class="apply-for-form-header">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-6 cell">
          <h2>Add a multiple flight plans</h2>
        </div>
      </div>
    </div>
  </div>

<div class="bulk-application-wrapper">
    <div class="page-form">
        <div class="grid-container">
          <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
              <label>Date
                <input type="text" id="date" class="datepicker" placeholder="Select Date">
              </label>
            </div>

            <div class="large-12 cell">
              <label>Duration
                <input type="text" id="from" class="from-timepicker" placeholder="From">
                <input type="text" id="to" class="to-timepicker" placeholder="To">
              </label>
            </div>

            <div class="large-12 cell">
              <label>Pilot
                <select class="select_drone" name="">
                  <option disabled selected value="">Pilot</option>
                  <option value="pilot_1">Pilot 1</option>
                  <option value="pilot_2">Pilot 2</option>
                  <option value="pilot_3">Pilot 3</option>
                </select>
              </label>
            </div>

            <div class="large-12 cell">
              <label>Drone
                <select class="select_drone" name="">
                  <option disabled selected value="">Select drone</option>
                  <option value="drone_1">Drone 1</option>
                  <option value="drone_2">Drone 2</option>
                  <option value="drone_3">Drone 3</option>
                </select>
              </label>
            </div>

            <div class="add-button-wrap">
              <div class="grid-container">
                <div class="grid-x grid-padding-x">
                  <div class="large-12 cell">
                    <a href="#" class="button">Add new</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
</div>



  <div class="form-footer">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <a href="apply-for-permission-bulk-step-2.php" class="button">Continue</a>
        </div>
      </div>
    </div>
  </div>

</form>

</div>


<?php include("footer.php");
?>

<!-- // Date and time picker on permission Page -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

<script type="text/javascript">

$(".datepicker").datepicker();

$(".from-timepicker").timepicker();
$(".to-timepicker").timepicker();

</script>
