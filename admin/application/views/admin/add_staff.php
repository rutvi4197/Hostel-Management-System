<!DOCTYPE html>
<html lang="en">
<head>
  <title>Women's HOR</title>
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
          <input class="form-control" name="staffid" type="text" placeholder="Staff ID" required>
        </div>
    </div>
     <div class="form-group row">
        <label for="staffName" class="col-sm-4 col-form-label">Password</label>
        <div class="col-sm-8">
          <input class="form-control" name="password" type="password" placeholder="password" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="staffName" class="col-sm-4 col-form-label">Name</label>
        <div class="col-sm-8">
          <input class="form-control" name="staffName" type="text" placeholder="Staff Name" pattern="^(?![\s.]+$)[a-zA-Z\s.]*$" title="Invalid input" required>
        </div>
    </div>
  <div class="form-group row">
        <label for="staffContact" class="col-sm-4 col-form-label">Contact NO</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="staffContact" placeholder="Contact Number"  pattern="[0-9]{10}" title="Ten digit phone number" required>
        </div>
      </div>  
  <div class="form-group row">
        <label for="staffAddress" class="col-sm-4 col-form-label">Address-line1</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="staffAddress" placeholder="Address-line1" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="staffAddress2" class="col-sm-4 col-form-label">Address-line2</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="staffAddress2" placeholder="Address-line2" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="city" class="col-sm-4 col-form-label">City</label>
        <div class="col-sm-8">
         
          
              <select class="form-control" name="city">
                <?php foreach ($city as $city): ?>
            <option value="<?php echo $city->City_id;?>"><?php echo $city->City_name; ?></option>
            <?php endforeach; ?>
          </select> 
          
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


