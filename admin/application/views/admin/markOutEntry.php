<!DOCTYPE html>
<html lang="en">
<head>
  <title>Women's HOR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php include('header.php');?>

<div class="row" style="margin-top: 1%;"> 
  <div class="col-sm-2 col-md-2">
  </div>    
  <div class="col-sm-8 col-md-8">
	<center> <label for="markOutEntry"><h3><b>Mark Out Entry</b></h3></label></center> 
   </div>
  <div class="col-sm-2 col-md-2">
  </div>    
</div>
  
<form action="<?php echo site_url('addattendence/doout') ?>" method="post">   

<div class="row" style="margin-top: 1%;"> 
 	<div class="col-sm-3 col-md-3"></div>
	<div class="col-sm-6 col-md-6">
		<div class="col-sm-1 col-md-1"></div>
		<div class="col-sm-10 col-md-10">
			<div class="form-group row">
				<label for="studentID" class="col-sm-4 col-form-label">Student ID</label>
				<div class="col-sm-8">
					<input class="form-control" name="studentid" type="text" pattern="[0-9]{9}" title="Nine digit Student ID" placeholder="Student ID" required>
				</div>
			</div>	
			<div class="form-group row">
				<label for="relativeName" class="col-sm-4 col-form-label">Name of Relative</label>
        		<div class="col-sm-8">
        			<input class="form-control" name="relativeName" type="text" placeholder="Name"  pattern="^(?![\s.]+$)[a-zA-Z\s.]*$" title="Invalid input" required>
        		</div>
		    </div>
  			<div class="form-group row">
        		<label for="guestContact" class="col-sm-4 col-form-label">Contact NO</label>
        		<div class="col-sm-8">
         	 		<input type="text" class="form-control" name="guestContact" placeholder="Contact Number" pattern="[0-9]{10}" title="Ten digit phone number" required>
        		</div>
  			</div>  
 			<div class="form-group row">
      			<label for="place" class="col-sm-4 col-form-label">Place</label>
      			<div class="col-sm-8">
        			<input class="form-control" name="place" type="text" placeholder="Place" required>
      			</div>
    		</div>
			<div class="form-group row">
				<div class="col-sm-4"></div>
				<div class="col-sm-8">
					<button type="submit" class="btn btn-primary mb-1" style="margin:2% 0%;padding:2% 4%;">Mark</button>
				</div>
				</div>
    	</div>
	</div>
	
	<div class="col-sm-3 col-md-3"></div>    
</div>

</form>
</body>
</html>
