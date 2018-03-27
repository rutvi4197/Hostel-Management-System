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
   <center> <label for="addCourier"><h3><b>Add Courier</b></h3></label></center> 
   </div>
  <div class="col-sm-2 col-md-2">
  </div>    
</div>
<form action="<?php echo site_url('courier/addcourier') ?>" method="post">   
<div class="row" style="margin-top: 1%;"> 
	<div class="col-sm-3 col-md-3">
	</div>		
	<div class="col-sm-6 col-md-6">
		<div class="col-sm-1 col-md-1"></div>
		<div class="col-sm-10 col-md-10">
		<div class="form-group row">
				<label for="studentID" class="col-sm-4 col-form-label">Student ID</label>
				<div class="col-sm-8">
					<input class="form-control" name="studentid" type="text">
				</div>
		</div>
		<div class="form-group row">
			<label for="studentRoomNo" class="col-sm-4 col-form-label">Room NO</label>
			<div class="col-sm-8">
				<input class="form-control" name="studentroomno" type="text">
			</div>
		</div>
		<div class="form-group row">
			<label for="courierCompany" class="col-sm-4 col-form-label">Courier Company</label>
			<div class="col-sm-8">
				<input class="form-control" name="courierCompany" type="text">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-8">
			<button type="submit" class="btn btn-primary mb-1" style="margin:2% 0%;padding:2% 4%;">ADD</button>
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

