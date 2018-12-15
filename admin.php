<?php
$dashboard = "true";
$admin = "true";
include("header.php"); ?>

<div class="admin-header">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <ul class="menu">
          <li><a href="#" class=""><span>Local Drone Acquisition</span></a></li>
          <li><a href="#" class="active"><span>Import Drone</span></a></li>
          <li><a href="#" class=""><span>UAOP</span></a></li>
          <li><a href="#" class=""><span>UIN</span></a></li>
          <li><a href="#" class=""><span>Permission</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="page-dashboard">
  <section id="all-applications-admin">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">

          <div class="admin-search-wrap">
            <form class="admin-search-form" action="" method="post">
              <input type="text" name="" value="" class="admin-search" placeholder="Search">
              <button type="submit" name="button" class="admin-search-button"> <img src="img/search.svg" alt=""> </button>
            </form>
          </div>

          <div class="applications">
            <div class="application">
              <div class="details">
                <div class="wrap">
                  <h3>Siddharth Ashok</h3>
                  <p>Parrot Bebop 2 FPV</p>
                </div>
              </div>
              <div class="go-to-location">
                <a href="view-application.php" class="button"><img src="img/view.svg" alt=""></a>
              </div>
            </div>

            <div class="application">
              <div class="details">
                <div class="wrap">
                  <h3>Siddharth Shetty</h3>
                  <p>Parrot Bebop 2 FPV</p>
                </div>
              </div>
              <div class="go-to-location">
                <a href="view-application.php" class="button"><img src="img/view.svg" alt=""></a>
              </div>
            </div>

            <div class="application">
              <div class="details">
                <div class="wrap">
                  <h3>Siddharth Shetty</h3>
                  <p>Parrot Bebop 2 FPV</p>
                </div>
              </div>
              <div class="go-to-location">
                <a href="view-application.php" class="button"><img src="img/view.svg" alt=""></a>
              </div>
            </div>

            <div class="application">
              <div class="details">
                <div class="wrap">
                  <h3>Abhishek Prabhu</h3>
                  <p>Parrot Bebop 2 FPV</p>
                </div>
              </div>
              <div class="go-to-location">
                <a href="view-application.php" class="button"><img src="img/view.svg" alt=""></a>
              </div>
            </div>

            <div class="application">
              <div class="details">
                <div class="wrap">
                  <h3>Mereeva Alphanso</h3>
                  <p>Parrot Bebop 2 FPV</p>
                </div>
              </div>
              <div class="go-to-location">
                <a href="view-application.php" class="button"><img src="img/view.svg" alt=""></a>
              </div>
            </div>

            <div class="application">
              <div class="details">
                <div class="wrap">
                  <h3>Cedan Misquith</h3>
                  <p>Parrot Bebop 2 FPV</p>
                </div>
              </div>
              <div class="go-to-location">
                <a href="view-application.php" class="button"><img src="img/view.svg" alt=""></a>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>

  <div class="page-navigation">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="large-12 cell">
            <ul class="menu">
              <li><a href="#"><span class="wrap"><img src="img/page-start.svg" alt=""></span></a></li>
              <li><a href="#"><span class="wrap"><img src="img/page-previous.svg" alt=""></span></a></li>
              <li><a href="#" class="active"><span class="wrap">1</span></a></li>
              <li><a href="#"><span class="wrap">2</span></a></li>
              <li><a href="#"><span class="wrap">3</span></a></li>
              <li><a href="#"><span class="wrap"><img src="img/page-next.svg" alt=""></span></a></li>
              <li><a href="#"><span class="wrap"><img src="img/page-end.svg" alt=""></span></a></li>
            </ul>
          </div>
        </div>
      </div>
  </div>


</div>

<?php include("footer.php");
