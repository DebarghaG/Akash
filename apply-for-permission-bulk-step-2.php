<?php
$dashboard = "true";
include("header.php"); ?>
<div id="apply-for-form">

<form id="apply-for-permission-bulk" action="apply-for-permission-2.php" method="post">

  <div class="apply-for-form-header">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-6 cell">
          <h2>More Details</h2>
        </div>
      </div>
    </div>
  </div>

<div class="bulk-application-wrapper">
    <div class="page-form">
        <div class="grid-container">
          <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
              <label>Purpose of flight
                <textarea name="name" rows="8" cols="80"></textarea>
              </label>
            </div>

            <div class="large-12 cell">
              <label>Kind of payload
                <textarea name="name" rows="8" cols="80"></textarea>
              </label>
            </div>

            <div class="large-12 cell">
              <label>Other question to add
                <textarea name="name" rows="8" cols="80"></textarea>
              </label>
            </div>

            <div class="large-12 cell">
              <label>Lorem ipsum
                <input type="text" placeholder="Lorem">
              </label>
            </div>
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
