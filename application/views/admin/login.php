<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link  href="<?php echo base_url(); ?>bootstrapcss/bootstrap.min.css" rel="stylesheet">
  <link  href="<?php echo base_url(); ?>bootstrapcss/font-awesome.min.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  <link href="<?php echo base_url(); ?>css/login.css" rel="stylesheet" type="text/css" >
</head>
<body>

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
<div class="row">
    <div class="col-xs-3 col-sm-2 col-md-1"><img class="logo" style="width:auto;height:100px;" src="image/Logo.jpg"></div>
    <div class="col-xs-9 col-sm-10 col-md-11"><img class="logoText" src="image/logoText.jpg"></div>
</div>

	<div class="container">
    <div class="row">
        <div class="login">
        <h2 class="login-header">Log in</h2>
        <form class="login-container">
        <p><input type="email" placeholder="Email"></p>
        <p><input type="password" placeholder="Password"></p>
        <p><input type="submit" value="Log in"></p>
        </form>
        </div>
    </div>
	</div>
</body>
</html>
