<?php
$dashboard = "true";
include("header.php"); ?>

<div class="page-header dashboard-header">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-6 cell">
        <div class="buttons-wrap">
          <a href="apply-for.php" class="button">Apply for a license</a>
          <div class="apply-step">
            <div class="wrap">
              <p>Apply for a license before buying a drone or applying UIN.</p>
            </div>
          </div>
          <a href="#" class="button show-apply-step disabled">Acquisition of drone</a>
          <a href="#" class="button show-apply-step disabled">Apply for UIN</a>
        </div>
      </div>
      <div class="large-6 cell show-for-large">
        <div class="dashboard-tite-wrap">
          <h2>Dashboard</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-dashboard">

  <!-- <section id="badges-licenses">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">

          <h3>Badges & Licenses</h3>

      </div>
    </div>
  </div>
  </section> -->

  <section id="application-status">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-6 large-offset-3 cell">

          <h3>Application Status</h3>

          <div class="all-status">

          <div class="status status-draft" data-equalizer>
            <div class="details" data-equalizer-watch>
              <p class="title">Draft</p>
              <p class="info">Parrot Bebop 2 FPV</p>
              <p class="meta">Stage 2</p>
            </div>
            <div class="action" data-equalizer-watch>
              <a href="#" class="button">Edit</a>
            </div>
          </div>

          <div class="status status-process" data-equalizer>
            <div class="details" data-equalizer-watch>
              <p class="title">In Process</p>
              <p class="info">Parrot Bebop 2 FPV</p>
              <p class="meta">Submitted on 03/03/2018</p>
            </div>
            <div class="action" data-equalizer-watch>
              <img src="img/process.svg" alt="">
            </div>
          </div>

          <div class="status status-declined" data-equalizer>
            <div class="details" data-equalizer-watch>
              <p class="title">Declined</p>
              <p class="info">Parrot Bebop 2 FPV</p>
              <p class="meta">Submitted on 03/03/2018</p>
              <p class="meta">Declined on 04/03/2018</p>
            </div>
            <div class="action" data-equalizer-watch>
              <img src="img/declined.svg" alt="">
            </div>
          </div>

          <div class="status status-accepted" data-equalizer>
            <div class="details" data-equalizer-watch>
              <p class="title">Declined</p>
              <p class="info">Parrot Bebop 2 FPV</p>
              <p class="meta">Submitted on 03/03/2018</p>
              <p class="meta">Accepted on 04/03/2018</p>
            </div>
            <div class="action" data-equalizer-watch>
              <img src="img/accepted.svg" alt="">
            </div>
          </div>

        </div> <!-- .all-status -->

          <a href="#" class="button">See All Applications</a>

        </div>
      </div>
    </div>
  </section>
  <section id="my-drones">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-6 large-offset-3 cell">
          <h3>My Drones</h3>
        <div class="drones-wrap">
          <a class="wrap" style="background-image: url('img/temp/d1.jpg')" href="drone-profile.php">
            <p>Parrot Bebop 2 FPV</p>
          </a>
          <a class="wrap" style="background-image: url('img/temp/d1.jpg')" href="drone-profile.php">
            <p>Parrot Bebop 2 FPV</p>
          </a>

          <a class="wrap" style="background-image: url('img/temp/d1.jpg')" href="drone-profile.php">
            <p>Parrot Bebop 2 FPV</p>
          </a>
          <a class="wrap" style="background-image: url('img/temp/d1.jpg')" href="drone-profile.php">
            <p>Parrot Bebop 2 FPV</p>
          </a>

        </div>

        <a href="#" class="button">See all Drones</a>
      </div>
      </div>
    </div>
  </section>

  <section id="occurence-report">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-6 large-offset-3 cell">
          <h3>Occurence Report</h3>
          <p>When an issue occurs during a drone flight, please report below.</p>
          <a href="#" class="button button-light-red">Report now</a>
        </div>
        </div>
      </div>
    </section>
</div>

<?php include("footer.php");
