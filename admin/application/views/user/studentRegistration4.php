<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOR WOMEN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php include('header.php');?>
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
        <label for="password" class="col-sm-4 col-form-label" style="font-size:110%;">Enter Password</label>
   
  </div>  
	  <div class="form-group row">
        <label for="studentPassword" class="col-sm-4 col-form-label">Password</label>
        <div class="col-sm-8">
          <input class="form-control" name="password" type="password" placeholder="password" required>
        </div>
    </div>
 <div class="form-group row">
        <label for="studentCPassword" class="col-sm-4 col-form-label">Confirm Password</label>
        <div class="col-sm-8">
          <input class="form-control" name="password2" type="password" placeholder="confirm password" required>
        </div>
    </div>


	
		<div class="form-group row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-8">

			<button type="submit" class="btn btn-primary mb-1" style="margin:2% 0%;padding:2% 4%;">Submit</button>
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
