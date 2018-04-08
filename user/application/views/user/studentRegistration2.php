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
	  <center> <label for="registration"><h3><b>Registration</b></h3></label></center> 
   </div>
  <div class="col-sm-2 col-md-2">
  </div>    
</div>



<form action="<?php echo site_url('addattendence/doattendence') ?>" method="post">   
<div class="row" style="margin-top: 1%;"> 
	<div class="col-sm-3 col-md-3">
	</div>		
	<div class="col-sm-6 col-md-6">
		<div class="col-sm-1 col-md-1"></div>
		<div class="col-sm-10 col-md-10">
	<div class="form-group row">
        <label for="ContactDetail" class="col-sm-4 col-form-label" style="font-size:110%;">Contact Details</label>
   
  </div>  
 <div class="form-group row">
        <label for="studentContact" class="col-sm-4 col-form-label">Contact NO</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="studentContact" placeholder="Contact Number" pattern="[0-9]{10}" title="Ten digit phone number" required>
        </div>
  </div>  
	 <div class="form-group row">
        <label for="studentEmail" class="col-sm-4 col-form-label">Email</label>
        <div class="col-sm-8">
          <input class="form-control" name="studentEmail" type="email" placeholder="Student Email" required>
        </div>
    </div>
<div class="form-group row">
        <label for="permanentAdd" class="col-sm-6 col-form-label" style="font-size:110%;">Permanent Address</label>
   
  </div>  
	<div class="form-group row">
        <label for="studentAddress" class="col-sm-4 col-form-label">Address-line1</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="Address" placeholder="Address-line1" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="studentAddress2" class="col-sm-4 col-form-label">Address-line2</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="Address2" placeholder="Address-line2"  required>
        </div>
      </div>
      <div class="form-group row">
        <label for="city" class="col-sm-4 col-form-label">City</label>
        <div class="col-sm-8">
         <select class="form-control" name="city">
			<option value="op1">op1</option>
			<option value="op2">op2</option>
			<option value="op3">op3</option>
		</select> 
        </div>
      </div>

<div class="form-group row">
        <label for="temporaryAdd" class="col-sm-6 col-form-label" style="font-size:110%;">Temporary Address</label>
   
  </div>  
	<div class="form-group row">
        <label for="studentAddress" class="col-sm-4 col-form-label">Address-line1</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="Address" placeholder="Address-line1"  required>
        </div>
      </div>
      <div class="form-group row">
        <label for="studentAddress2" class="col-sm-4 col-form-label">Address-line2</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="Address2" placeholder="Address-line2"  required>
        </div>
      </div>
      <div class="form-group row">
        <label for="city" class="col-sm-4 col-form-label">City</label>
        <div class="col-sm-8">
         <select class="form-control" name="city">
			<option value="op1">op1</option>
			<option value="op2">op2</option>
			<option value="op3">op3</option>
		</select> 
        </div>
      </div>


	
		<div class="form-group row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-8">
				<button type="submit" class="btn btn-primary mb-1" style="margin:2% 0%;padding:2% 4%;">Previous</button>		
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
