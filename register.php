<?php include("header.php"); ?>

<div class="page-header">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <h2>Hello</h2>
        <p>Create an account below to continue<br><a href="login.php">I’m already registered, sign in here</a></p>

      </div>
    </div>
  </div>
</div>

<div class="page-form">
<form class="" action="registered.php" method="post">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <label>Full name
          <input type="text" placeholder="Full name">
        </label>
      </div>

      <div class="large-12 cell">
        <label>Email
          <input type="text" placeholder="Email">
        </label>
      </div>

      <div class="large-12 cell">
        <label>Password
          <input type="password" placeholder="Password">
        </label>
      </div>

      <div class="large-12 cell">
        <button type="submit" class="button" name="button">Sign Up</button>
      </div>

    </div>
  </div>
</form>
</div>

<?php include("footer.php");
