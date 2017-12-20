<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Halaman Login</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Silahkan Login</h1><br>
  <form action="<?php echo site_url('home/login')?>" method="post">
    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="Login">
  </form>
  <a href="<?php echo site_url('home/lupa_password')?>"><h4>Lupa Password</h4></a>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>