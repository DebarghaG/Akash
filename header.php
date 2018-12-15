<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigitalSky</title>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/style.css?v=28">
  </head>
  <body>

<!--
Note:
A class "homepage" has to be added only on homepage, as the header has different style for homepage.
-->

  <header class="site-header <?php if($homepage == "true"){echo "homepage";} ?>">
    <div class="grid-container">
      <div class="grid-wrap">
    <a href="index.php">
      <div class="site-logo">
        <img src="img/logo.svg" alt="">
      </div>
    </a>

    <!-- <div class="site-nav">
      <div class="wrap">
        <div class="open-wrap">
          <img src="img/hambargar.svg" alt="">
          <p>Menu</p>
        </div>
        <div class="close-wrap">
          <img src="img/hambargar-close.svg" alt="">
          <p>Close</p>
        </div>

        <div class="the-site-navigation">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Application Process</a></li>
            <li><a href="know-requirements.php">Know the requirements</a></li>
            <li><a href="#">Operating restrictions</a></li>
          </ul>
        </div>
      </div>
    </div> -->

<!--
Note:
There are two navigations on the page: 1. Main navigation. 2. User navigation
User icon will only show up when user is logged in.
-->


<?php if($dashboard != "true") { ?>
    <a href="login.php">
    <div class="user-nav">
      <div class="wrap">
        <img src="img/user.svg" alt="">
        <p>Login</p>
      </div>
    </div>
    </a>
<?php } else { ?>
  <!--
  Note:
  If admin dashboard then use this menu then use this:
  -->
<?php if($admin != "true") {
  ?>
  <div class="user-nav dashboard">
    <div class="open-wrap">
      <img src="img/user.svg" alt="">
      <p>User</p>
    </div>
    <div class="close-wrap">
      <img src="img/hambargar-close.svg" alt="">
      <p>Close</p>
    </div>

    <div class="the-user-navigation">
      <ul>
        <li><a href="apply-for.php">Apply now</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="#">My drones</a></li>
        <li><a href="#">Occurance report</a></li>
        <li><a href="#">Application Status</a></li>
        <li><a href="#">Edit user settings</a></li>
        <li><a href="index.php" class="logout">Logout</a></li>
      </ul>
    </div>
  </div>
<?php
} else {
?>
<div class="user-nav dashboard">
  <div class="open-wrap">
    <img src="img/user.svg" alt="">
    <p>Admin</p>
  </div>
  <div class="close-wrap">
    <img src="img/hambargar-close.svg" alt="">
    <p>Close</p>
  </div>

  <div class="the-user-navigation">
    <ul>
      <li><a href="#">Approved applications</a></li>
      <li><a href="#">Denied applications</a></li>
      <li><a href="#">Pending applications</a></li>
      <li><a href="index.php" class="logout">Logout</a></li>
    </ul>
  </div>
</div>

<?php
  }
}
?>
    </div>
  </div>
  </header>

<main class="content-area">
