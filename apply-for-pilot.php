<?php
$dashboard = "true";
include("header.php"); ?>

<div id="apply-for-form">

<form class="" action="apply-for-pilot-step-2.php" method="post">

<div class="apply-for-form-header">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-6 cell">
        <h2>Application <br>for Pilot</h2>
      </div>
      <div class="large-6 cell">

        <div class="form-steps">
          <ul>
            <li class="now step-1">
              <p>Step 1</p>
              <div class="circle"></div>
            </li>
            <li class="todo step-2">
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
      <div class="large-12 cell">
        <label>Name of applicant in full
          <input type="text" placeholder="Name & Aliases (if any)">
        </label>
      </div>

      <div class="large-12 cell">
        <label>Parentage
          <input type="text" placeholder="Surname">
          <input type="text" placeholder="Name & Aliases (if any)">
        </label>
      </div>

      <div class="large-12 cell">
        <label>Present address
          <span>Present address in full, including nearest police station</span>
          <textarea name="name" rows="5" cols="80" placeholder="Present address in full, including nearest police station"></textarea>
        </label>
      </div>

      <div class="large-12 cell">
        <label class="checkbox">I’m <strong>NOT</strong> a resident of India
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
      </div>

      <div class="large-12 cell">
        <label>Permanent address *
          <span>Permanent address in full, including nearest police station</span>
          <textarea name="name" rows="5" cols="80" placeholder="Permanent address in full, including nearest police station"></textarea>
        </label>
      </div>

      <div class="large-12 cell">
        <label>Nationality *
          <select class="select_nationality" name="">
            <option disabled selected value="">Select Nationality</option>
            <option value="in">India</option>
            <option value="america">America</option>
            <option value="manufacturer">Sweden</option>
          </select>
        </label>
      </div>

      <div class="large-12 cell">
        <label>Date of birth *
          <input type="text" placeholder="Date of birth (DD-MM-YY)">
        </label>
      </div>

      <div class="large-12 cell">
        <label>Place of birth
          <span>With full address</span>
          <textarea name="name" rows="5" cols="80" placeholder="Places resided"></textarea>
        </label>
      </div>

      <div class="large-12 cell">
          <label>Profession
            <span>All professions/occupations you had after the age of 18 years</span>
            <div class="form-profession-wrap">
              <input type="text" placeholder="Profession">
            </div>
            <a href="#" class="button profession-clone-button">Add another profession</a>
            <div class="clearfix"></div>
          </label>
      </div>




      <div class="large-12 cell">
        <label>Places
          <span>Particulars of places, with full address, where the applicant has resided for more than a year during the preceding five years</span>
          <textarea name="name" rows="5" cols="80" placeholder="Places resided"></textarea>
        </label>
      </div>

      <div class="large-12 cell">
        <label>Legal
          <span>Has the applicant ever been arrested, prosecuted, kept under detention, or convicted by a court? Give details:</span>
          <textarea name="name" rows="5" cols="80" placeholder="Details"></textarea>
        </label>
      </div>



    </div>
  </div>
</div>

  <div class="form-footer">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <button type="submit" class="button" name="button">Save & Continue</button>
        </div>
      </div>
    </div>
  </div>

</form>

</div>

<?php include("footer.php");
