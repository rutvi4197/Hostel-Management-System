<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOR WOMEN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php include('header.php');?>
<form action="" method="post">  
<div class="row" style="margin-top: 10%;"> 
  <div class="col-sm-2 col-md-2">
  </div>    
  <div class="col-sm-8 col-md-8">
   <center> <label for="markStudentEntry"><h3>Mark IN-OUT Entry</h3></label></center> 
   </div>
  <div class="col-sm-2 col-md-2">
  </div>    
</div>
<div class="row" style="margin-top: 1%;"> 
	<div class="col-sm-3 col-md-3">
	</div>		
	<div class="col-sm-6 col-md-6" style="display:flex;justify-content:center;">
		<label class="col-sm-2 col-form-label">Student ID</label>
		<div class="col-sm-6">
			<input type="text"  class="form-control" name="studentID" placeholder="Student ID">
		</div>
		
	</div>
	<div class="col-sm-3 col-md-3">
		
	</div>		
</div>
<div class="row">
	<div class="col-sm-4 col-md-4">
	</div>		
	<div class="col-sm-6 col-md-6" style="display:flex;justify-content:center;">
	
		<div class="col-sm-7">
		<a href="<?php echo site_url('addattendence/doout') ?>"><button type="submit" class="btn btn-primary mb-2 col-sm-4"  style="margin-top: 7%;margin-right: 8%">Out Entry</button></a>
		<button type="submit" class="btn btn-primary mb-2 col-sm-4" style="margin-top: 7%" >In Entry</button>
		</div>
		
	</div>
		
		
</div>
 
 

</form>
</body>
</html>