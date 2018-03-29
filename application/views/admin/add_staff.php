<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOR WOMEN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php include('header.php');?>
<form action="<?php echo site_url('admin/addstaff') ?>" method="post">  
<div class="row" style="margin-top: 1%;"> 
  <div class="col-sm-2 col-md-2">
  </div>    
  <div class="col-sm-8 col-md-8">
   <center> <label for="addstaff"><h3><b>Add Staff</b></h3></label></center> 
   </div>
  <div class="col-sm-2 col-md-2">
  </div>    
</div>
<div class="row" style="margin-top: 1%;"> 
  <div class="col-sm-3 col-md-3">
  </div>    
  <div class="col-sm-6 col-md-6">
    <div class="col-sm-1 col-md-1"></div>
    <div class="col-sm-10 col-md-10">
        <div class="form-group row">
        <label for="staffName" class="col-sm-4 col-form-label">Id</label>
        <div class="col-sm-8">
          <input class="form-control" name="staffid" type="text">
        </div>
    </div>
     <div class="form-group row">
        <label for="staffName" class="col-sm-4 col-form-label">Password</label>
        <div class="col-sm-8">
          <input class="form-control" name="password" type="password">
        </div>
    </div>
    <div class="form-group row">
        <label for="staffName" class="col-sm-4 col-form-label">Name</label>
        <div class="col-sm-8">
          <input class="form-control" name="staffName" type="text">
        </div>
    </div>
  <div class="form-group row">
        <label for="staffContact" class="col-sm-4 col-form-label">Contact NO</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="staffContact">
        </div>
      </div>  
  <div class="form-group row">
        <label for="staffAddress" class="col-sm-4 col-form-label">Address-line1</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="staffAddress">
        </div>
      </div>
      <div class="form-group row">
        <label for="staffAddress2" class="col-sm-4 col-form-label">Address-line2</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="staffAddress2">
        </div>
      </div>
      <div class="form-group row">
        <label for="city" class="col-sm-4 col-form-label">City</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="city">
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


