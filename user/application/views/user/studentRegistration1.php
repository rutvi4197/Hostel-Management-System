<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOR WOMEN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link  href="<?php echo base_url(); ?>bootstrapcss/bootstrap.min.css" rel="stylesheet">
  <link  href="<?php echo base_url(); ?>bootstrapcss/font-awesome.min.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  <link href="<?php echo base_url(); ?>css/login.css" rel="stylesheet" type="text/css" >
</head>
<body>


<div class="row">
    <div class="col-xs-3 col-sm-2 col-md-1"><img class="logo" style="width:auto;height:100px;" src="<?php echo base_url(); ?>image/Logo.jpg"></div>
    <div class="col-xs-9 col-sm-10 col-md-11"><img class="logoText" src="<?php echo base_url(); ?>image/logoText.JPG"></div>
</div>


<div class="row" style="margin-top: 1%;"> 
  <div class="col-sm-2 col-md-2">
  </div>    
  <div class="col-sm-8 col-md-8">
	  <center> <label for="registration"><h3><b> Student Registration</b></h3></label></center> 
   </div>
  <div class="col-sm-2 col-md-2">
  </div>    
</div>


<form action="<?php echo site_url('registration/form1') ?>" method="post">   
<div class="row" style="margin-top: 1%;"> 
	<div class="col-sm-3 col-md-3">
	</div>		
	<div class="col-sm-6 col-md-6">
		<div class="col-sm-1 col-md-1"></div>
		<div class="col-sm-10 col-md-10">
		<div class="form-group row">
				<label for="studentID" class="col-sm-4 col-form-label">Student ID</label>
				<div class="col-sm-8">
					<input class="form-control" name="studentid" type="text" placeholder="Student ID" pattern="[0-9]{9}" title="Nine digit Student ID" required>
				</div>
		</div>
	 <div class="form-group row">


        <label for="Name" class="col-sm-4 col-form-label">First Name</label>
        <div class="col-sm-8">
          <input class="form-control" name="firstName" type="text" placeholder="FirstName"  pattern="^(?![\s.]+$)[a-zA-Z\s.]*$" title="Invalid input" required>
        </div>
    </div>

     <div class="form-group row">

        <label for="studentName" class="col-sm-4 col-form-label">Last Name</label>
        <div class="col-sm-8">
          <input class="form-control" name="studentlastname" type="text" placeholder="Student Name"  pattern="^(?![\s.]+$)[a-zA-Z\s.]*$" title="Invalid input" required>
        </div>
    </div>


    
	
     <div class="form-group row">
			<label for="dateOfBirth" class="col-sm-4 col-form-label">Date of Birth</label>
			<div class="col-sm-8">
				<input class="form-control" name="studentDOB" type="text" placeholder="Date of Birth '11/12/13' format" required>
			</div>
		</div>	
	<div class="form-group row">
			<label for="studentRoomNo" class="col-sm-4 col-form-label">Room NO</label>
			<div class="col-sm-8">
				<input class="form-control" name="studentroomno" type="text" placeholder="Room Number" pattern="[J-Kj-k]{1}[0-9]{3}" title="Room Number e.g.(k306)" required>
			</div>
		</div>
	<div class="form-group row">
        <label for="studentCourse" class="col-sm-4 col-form-label">Course</label>
        <div class="col-sm-8">
          <input class="form-control" name="studentCourse" type="text" placeholder="Course Name" pattern="^(?![\s.]+$)[a-zA-Z\s.]*$" title="Invalid input" required>
        </div>
    </div>

	
		<div class="form-group row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-8">
			<button type="submit" class="btn btn-primary mb-1" style="margin:2% 0%;padding:2% 4%;">Next</button>
			</div>
			
		</div>
 
		</div>
		
	</div>
	<div class="col-sm-3 col-md-3">
		
	</div>		
</div>
 

</form>
</body>
</html>
