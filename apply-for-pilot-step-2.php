<?php
$dashboard = "true";
include("header.php"); ?>

<div id="apply-for-form">

<form class="" action="apply-for-pilot-step-3.php" method="post">

  <div class="apply-for-form-header">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-6 cell">
          <h2>Application <br>for Pilot</h2>
        </div>
        <div class="large-6 cell">

          <div class="form-steps">
            <ul>
              <li class="done step-1">
                <p>Step 1</p>
                <div class="circle"></div>
              </li>
              <li class="now step-2">
                <p>Step 2</p>
                <div class="circle"></div>
              </li>
              <li class="todo step-3">
                <p>Step 3</p>
                <div class="circle"></div>
              </li>
            </ul>
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="page-form">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
      <div class="large-8 large-offset-2 cell">
        <div class="help-wrap">
          <div class="help-icon" data-open="help-modal">
            <img src="img/help.svg" alt="">

            <div class="reveal" id="help-modal" data-reveal>
              <h2>Help</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>

          <label>Upload your <br>Training Certificate</label>

          <label for="exampleFileUpload" class="button button-file-upload">Upload File</label>
          <input type="file" id="exampleFileUpload" class="show-for-sr">
        </div>

      </div>

      <div class="large-8 large-offset-2 cell" id="drone-category">
        <label class="main">Drone Category</label>

        <div class="category-wrap">
          <label class="radio">Nano
            <span class="info">Less than or equal to <br>250 grams</span>
              <input type="radio" checked="checked" name="radio">
              <span class="checkmark"></span>
          </label>
        </div>

        <div class="category-wrap">
          <label class="radio">Micro
            <span class="info">Greater than 250 grams and <br>less than or equal to 2 kg</span>
              <input type="radio" checked="checked" name="radio">
              <span class="checkmark"></span>
          </label>
        </div>

        <div class="category-wrap">
          <label class="radio">Small
            <span class="info">Greater than 2 kg and less <br>than or equal to 25 kg</span>
              <input type="radio" checked="checked" name="radio">
              <span class="checkmark"></span>
          </label>
        </div>

        <div class="category-wrap">
          <label class="radio">Medium
            <span class="info">Greater than 25 kg and less than or equal to 150 kg</span>
              <input type="radio" checked="checked" name="radio">
              <span class="checkmark"></span>
          </label>
        </div>

        <div class="category-wrap">
          <label class="radio">Large
            <span class="info">Greater than <br>150 kg</span>
              <input type="radio" checked="checked" name="radio">
              <span class="checkmark"></span>
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
          <a href="apply-for-pilot.php" class="back"> <img src="img/back.svg" alt=""> Go back to previous step</a>
          <button type="submit" class="button" name="button">Save & Continue</button>
        </div>
      </div>
    </div>
  </div>

</form>

</div>

<?php include("footer.php");
