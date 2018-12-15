<?php
$dashboard = "true";
include("header.php"); ?>

<div id="apply-for-form">

<form class="" action="dashboard-no-data.php" method="post">

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
              <li class="done step-2">
                <p>Step 2</p>
                <div class="circle"></div>
              </li>
              <li class="now step-3">
                <p>Step 3</p>
                <div class="circle"></div>
              </li>
            </ul>
          </div>

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
            <p>Siddharth Ashok</p>
          </div>

          <div class="question">
            <h6>Parentage</h6>
            <p>Ashok Sharma</p>
          </div>

          <div class="question">
            <h6>Present address</h6>
            <p>Mountainview colony, 40002, Panaji,
            Goa, India. Near Krishna Temple.</p>
          </div>

          <div class="question">
            <h6>Resident of India?</h6>
            <p>Yes, I am a resident of india</p>
          </div>

          <div class="question">
            <h6>Permanent address</h6>
            <p>Mountainview colony, 40002, Panaji,
            Goa, India. Near Krishna Temple.</p>
          </div>

          <div class="question">
            <h6>Nationality</h6>
            <p>Indian</p>
          </div>

          <div class="question">
            <h6>Date of birth</h6>
            <p>06/09/1987</p>
          </div>

          <div class="question">
            <h6>Place of birth</h6>
            <p>Mountainview colony, 40002, Panaji,
            Goa, India. Near Krishna Temple.</p>
          </div>

          <div class="question">
            <h6>Profession/ occupation after the age of 18 years</h6>
            <p>Developer at Google</p>
            <p>Developer at Apple, Developer at GrandWorks.</p>
          </div>

          <div class="question">
            <h6>Particulars of places, with full
  address, where the applicant has resided for more than a year during
  the preceding five years</h6>
            <p>Mountainview colony, 40002, Panaji,
            Goa, India. Near Krishna Temple.</p>
          </div>

          <div class="question">
            <h6>Has the applicant ever been arrested, prosecuted, kept under detention, or convicted by a court? Give details:</h6>
            <p>No</p>
          </div>

          <div class="question">
            <h6>Training Certificate</h6>
            <p>Siddharth_certificate.pdf</p>
          </div>

          <div class="question">
            <h6>Drone Category</h6>
            <p>Micro. Greater than 250 grams and less than or equal to 2 kg.</p>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div id="declaration">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <p>I certify that the information
furnished in this proforma is correct and complete to the best of my knowledge and belief. I am aware that furnishing of wrong information or suppression of factual or material information will dis-entitle me from grant of the license/ permit.</p>

          <div class="meta">
            <h5>Date: 17th June 2018</h5>
            <h5>Name: Siddharth Ashok</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="form-footer final-step">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <a href="apply-for-pilot-step-2.php" class="back"> <img src="img/back.svg" alt=""> Go back to previous step</a>
          <button type="submit" class="button" name="button">Save & Continue</button>
        </div>
      </div>
    </div>
  </div>

</form>

</div>

<?php include("footer.php");
