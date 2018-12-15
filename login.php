<?php include("header.php"); ?>

<div class="page-header">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <h2>Welcome back!</h2>
        <p>Sign in below to continue<br><a href="register.php">I’m not registered, sign up here</a></p>

      </div>
    </div>
  </div>
</div>

<div class="page-form">
<form class="" action="registered.php" method="post">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <label>Email
          <div class="special-feild-wrap">
            <span class="special-icon"><img src="img/email.svg" alt=""></span>
            <input type="text" class="special-email" placeholder="Email">
          </div>
        </label>
      </div>

      <div class="large-12 cell">
        <label>Password
          <div class="special-feild-wrap">
            <span class="special-icon"><img src="img/password.svg" alt=""></span>
            <input type="password" class="special-password" placeholder="Password">
          </div>

        </label>
      </div>



      <div class="large-12 cell">
        <button type="submit" class="button" name="button">Sign In</button>
      </div>

    </div>
  </div>
</form>
</div>

<?php include("footer.php");
