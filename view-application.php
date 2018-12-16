<?php
$dashboard = "true";
$admin = "true";

include("header.php"); ?>

<div id="view-application">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <label class="page-heading">Review user's application</label>
      </div>
    </div>
  </div>



  <div id="application-preview">
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
            <p>123 ABC Street, Gurugram,
            India - 122003.</p>
          </div>

          <div class="question">
            <h6>Resident of India?</h6>
            <p>Yes, I am a resident of india</p>
          </div>

          <div class="question">
            <h6>Permanent address</h6>
            <p>123 ABC Street, Gurugram,
            India - 122003.</p>
          </div>

          <div class="question">
            <h6>Nationality</h6>
            <p>Indian</p>
          </div>

          <div class="question">
            <h6>Date of birth</h6>
            <p>06/09/1997</p>
          </div>

          <div class="question">
            <h6>Place of birth</h6>
            <p>Kolkata,
            </p>
          </div>

          <div class="question">
            <h6>Profession/ occupation after the age of 18 years</h6>
            <p>Designer at Google</p>
            <p>Designer at Hullo Inc.</p>
          </div>

          <div class="question">
            <h6>Particulars of places, with full
  address, where the applicant has resided for more than a year during
  the preceding five years</h6>
            <p>123 ABC Street, Gurugram,
            Haryana, India - 122003</p>
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

  <div class="view-application-footer admin-footer">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <a class="button button-accept" href="/admin.php">Accept Application</a>
          <a class="button button-deny" href="/admin.php">Deny Application</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="admin-go-back">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <a href="admin.php" class="back"> <img src="img/back-white.svg" alt="">Go back to previous step</a>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Want to hide footer for this page -->
<style media="screen">
  .site-footer {display: none;}
</style>
<?php include("footer.php");
