<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylelogin.css"> 
<div class="login">
  <center>
  <h1>Login to Web</h1>
  <form method="post" action="">
    <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
    <p><input type="password" name="password" value="" placeholder="Password"></p>
    <p class="remember_me">
      <label>
        <input type="checkbox" name="remember_me" id="remember_me">
        Remember me on this computer
      </label>
    </p>
    <p class="submit"><input type="submit" name="commit" value="Login"></p>
  </form>
</div>

<div class="login-help">
  <center>  <p>Forgot your password? <a href="#">Click here to reset it
</center>
</a>
  </p>
</div>