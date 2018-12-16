<?php
$dashboard = "true";
$admin = "true";
include("header.php"); ?>

<div class="admin-header">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
      </div>
    </div>
  </div>
</div>

<section id="Launch UTM">
  <div class="wrap">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-8 cell">
          <h2>Launch UTM</h2>
          <p></p>
        </div>
        <div class="large-3 large-offset-1 cell">
          <div class="btn-wrap">
            <a href="register.php" class="button">Launch</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
                  <h3>Debargha Ganguly</h3>
                  <p>Desi DroneX</p>
                </div>
              </div>
              <div class="go-to-location">
                <a href="view-application.php" class="button"><img src="img/view.svg" alt=""></a>
              </div>
            </div>

            <div class="application">
              <div class="details">
                <div class="wrap">
                  <h3>Goutam Paul</h3>
                  <p>CiteMachine</p>
                </div>
              </div>
              <div class="go-to-location">
                <a href="view-application.php" class="button"><img src="img/view.svg" alt=""></a>
              </div>
            </div>

            <div class="application">
              <div class="details">
                <div class="wrap">
                  <h3>Shekhar Chatterjee</h3>
                  <p>Vamica's broomstick</p>
                </div>
              </div>
              <div class="go-to-location">
                <a href="view-application.php" class="button"><img src="img/view.svg" alt=""></a>
              </div>
            </div>

            <div class="application">
              <div class="details">
                <div class="wrap">
                  <h3>Sanchit Bansal</h3>
                  <p>GFY Premium</p>
                </div>
              </div>
              <div class="go-to-location">
                <a href="view-application.php" class="button"><img src="img/view.svg" alt=""></a>
              </div>
            </div>

            <div class="application">
              <div class="details">
                <div class="wrap">
                  <h3>Amlan Bibhudutta</h3>
                  <p>SleepTastic Dronez</p>
                </div>
              </div>
              <div class="go-to-location">
                <a href="view-application.php" class="button"><img src="img/view.svg" alt=""></a>
              </div>
            </div>

            <div class="application">
              <div class="details">
                <div class="wrap">
                  <h3>Gaurav Nandan Tripathi</h3>
                  <p>The Hathi</p>
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
