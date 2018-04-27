<!DOCTYPE html>
<html lang="en">
<head>
  <title>Women's HOR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php include('header.php');?>
<form action="<?php echo site_url('addattendence/doattendence') ?>" method="post">   
<div class="row" style="margin-top: 1%;"> 
  <div class="col-sm-2 col-md-2">
  </div>    
  <div class="col-sm-8 col-md-8">
   <center> <label for="addStudentAttendance"><h3><b>Add Student Attendance</b></h3></label></center> 
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
			<input type="text"  class="form-control" name="studentid" placeholder="Student ID" pattern="[0-9]{9}" title="Nine digit StudentID" required>
		</div>
		<button type="submit" class="btn btn-primary mb-1 col-sm-2" >ADD</button>
	</div>
	<div class="col-sm-3 col-md-3">
		
	</div>		
</div>
 
 

</form>
</body>
</html>
