<!DOCTYPE HTML>
<HTML>
	<head>
		<title>Women's Hall of Residence	
		</title>
		<link href="<?php echo base_url(); ?>css/header.css" rel="stylesheet" type="text/css" >
		<link href="<?php echo base_url(); ?>css/login.css" rel="stylesheet" type="text/css" >
	
	</head>
	<body>
	<div class="header">
		<span><a href="home.html"><img class="logo" src="<?php echo base_url(); ?>image/Logo.jpg"></a ></span>
		<span><a href="home.html"><img class="logoText" src="<?php echo base_url(); ?>image/logoText.jpg"><img class="logoText2" src="logotext2.jpg"></a ></span>
	</div>	
	
<div class="container">
	<form action="/action_page.php">
		<div id="login"><b>LOGIN</div>
		<hr width=95%>	
			<div class="row">
				<div class="col-25">
					<label for="password">Username:</label>
				</div>
				<div class="col-75">
					<input type="text" id="username" name="username" placeholder="Username..">
				</div>
			</div>			

			<div class="row">
				<div class="col-25">
					<label for="password">Password</label>
				</div>
				<div class="col-75">
					<input type="password" id="password" name="password" placeholder="Password..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="forgotPassword">Forgot Password?</label>
				</div>
			</div>
			<div class="row">
					<input type="submit" value="Submit">

				</div>
			</div>
		</div>
	</form>
</div>


