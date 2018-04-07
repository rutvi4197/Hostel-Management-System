<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOR WOMEN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php include('header.php');?>

<form action="<?php echo site_url('service/addservice') ?>" method="post">
<div class="row" style="margin-top: 1%;"> 
  <div class="col-sm-2 col-md-2">
  </div>    
  <div class="col-sm-8 col-md-8">
   <center> <label for="addCourier"><h3><b>Add Service</b></h3></label></center> 
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
        <label for="name" class="col-sm-4 col-form-label">Name</label>
        <div class="col-sm-8">
          <input class="form-control" name="name" type="text" pattern="^(?![\s.]+$)[a-zA-Z\s.]*$" title="Invalid input" required>
        </div>
    </div>
    <div class="form-group row">
      <label for="Purpose" class="col-sm-4 col-form-label">Purpose</label>
      <div class="col-sm-8">
        <input class="form-control" name="purpose" type="text" required>
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


