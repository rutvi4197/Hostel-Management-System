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
   <center> <label for="addComplaint"><h3><b>Add Complaint</b></h3></label></center> 
   </div>
  <div class="col-sm-2 col-md-2">
  </div>    
</div>

<form action="<?php echo site_url('complain/docomplain') ?>" method="post">   
<div class="row" style="margin-top: 1%;"> 
	<div class="col-sm-3 col-md-3">
	</div>		
	<div class="col-sm-6 col-md-6">
		<div class="col-sm-1 col-md-1"></div>
		<div class="col-sm-10 col-md-10">
		
	 <div class="form-group row">
        <label for="complaintType" class="col-sm-4 col-form-label">Complaint Type</label>
        <div class="col-sm-8">
         <select class="form-control" name="complaintType">
         	<?php 
         		foreach ($type as $type):
         	 ?>
			<option value="<?php echo $type->Type_id ?>"><?php echo $type->Type_name; ?></option>
			<?php endforeach ?>
		</select> 
        </div>
      </div>
 	<div class="form-group row">
  		<label for="description" class="col-sm-4 col-form-label">Description</label>
		 <div class="col-sm-8">
			<textarea class="form-control" rows="5" id="description" name="description" placeholder="Description" required></textarea>
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
