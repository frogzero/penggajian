<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Website Penggajian</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h2 align="center">Masukkan email Anda</h2><br>
  <form action="<?php echo site_url('home/cek_password')?>" method="post">
    <input type="text" name="email" placeholder="email">
    <input type="submit" name="login" class="login login-submit" value="Submit">
  </form>
  <a href="<?php echo site_url('home')?>"><h4>Menu Login</h4></a>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>