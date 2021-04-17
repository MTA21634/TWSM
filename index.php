<?php
	session_start();
	if (isset($_SESSION['message'])){
	echo $_SESSION['message'];
	unset ($_SESSION['message']);
	}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="wrapper">
      <section class="form signup">
        <form class="" action="#" enctype="multipart/form-data">
          <div class="error-text">

          </div>
          <div class="field image">
            <label for="">Upload profile picture</label>
            <input type="file" name="image" value="" placeholder="" required>
          </div>
          <div class="field input">
            <input type="text" name="username" value="" placeholder="Username" required autocomplete="nickname">
          </div>
          <div class="field input">
            <input type="password" name="password" value="" placeholder="Password" required id="passID" autocomplete="new-password">
            <input type="checkbox" onclick="passToggle()">Show Password
          </div>
          <div class="field button">
            <input type="submit" name="" value="Continue">
          </div>
        </form>
        <div class="login-link">
          Login <a href="login.php">here</a> if you already have an account.
        </div>
      </section>
    </div>
    <script src="signup.js"></script>
  </body>
</html>
