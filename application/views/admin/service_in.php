<!DOCTYPE HTML>
<HTML>
	<head>
		<title>Women's Hall of Residence	
		</title>
		
	</head>
	<body>
	<?php 
  include_once('header.php');

  ?>
	<div>
		<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Purpose</label>
      </div>
      <div class="col-75">
        <input type="text" id="purpose" name="Purpose" placeholder="purpose">
      </div>
<div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
	</div>
</body>
