<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Email Password</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <?php 
    $password_baru = md5("password_baru");

    ?>
    <h2 align="center">SIlahkan masukkan password Ini = password_baru ?></h2><br>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

</body>

</html>