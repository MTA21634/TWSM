<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <section class="form login">
        <form action="#">
          <div class="error-text">

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
          Sign up <a href="index.php">here</a>.
        </div>
      </section>
    </div>
    <script src="login.js"></script>
  </body>
</html>
