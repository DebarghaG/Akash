<?php include("header.php");
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

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
<form class="" action="login.php" method="post">
  <div class="grid-container">
    <div class="gsrid-x grid-padding-x">
      <div class="large-12 cell">
        <label>Email
          <div class="special-feild-wrap">
            <span class="special-icon"><img src="img/email.svg" alt=""></span>
            <input type="text" name = "emailID" class="special-email" placeholder="Email">
          </div>
        </label>
      </div>

      <div class="large-12 cell">
        <label>Password
          <div class="special-feild-wrap">
            <span class="special-icon"><img src="img/password.svg" alt=""></span>
            <input type="password" name = "pass" class="special-password" placeholder="Password">
          </div>

        </label>
      </div>



      <div class="large-12 cell">
        <button type="submit" class="button" name="button">Sign In</button>
      </div>

 	 <?php
            //$msg = '';

            //if $_POST["emailID"]
            function debug_to_console( $data ) {
            $output = $data;
            if ( is_array( $output ) )
                $output = implode( ',', $output);

            echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
            }


            if (isset($_POST['button'])) {
               if ($_POST['emailID'] == "admin" &&
                  $_POST['pass'] == "admin") {
                    //echo $_POST["emailID"];
                    //echo $_POST["pass"];
                  //$_SESSION['valid'] = true;
                  //$_SESSION['emailID'] = 'administrator';

                   //echo "You have entered a valid email ID and password";
                   debug_to_console( "Going into the admin portal");
                   echo "<script> window.location.assign('admin.php'); </script>";
               }
               if ($_POST['emailID'] == "demo" &&
                  $_POST['pass'] == "user") {
                    //echo $_POST["emailID"];
                    //echo $_POST["pass"];
                  //$_SESSION['valid'] = true;
                  //$_SESSION['emailID'] = 'administrator';

                   //echo "You have entered a valid email ID and password";
                   debug_to_console( "Going into the user portal");
                   echo "<script> window.location.assign('dashboard.php'); </script>";
               }
             }
               else {
                  //echo 'Wrong email ID or password';
                  debug_to_console("Wrong username password combo");
            }

         ?>
    </div>
  </div>
</form>
</div>

<?php include("footer.php");
