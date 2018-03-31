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
   <center> <label for="addCourier"><h3><b>Room Details</b></h3></label></center> 
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
        <label for="studentID" class="col-sm-4 col-form-label">Select Wing</label>
        <div class="col-sm-8">
          <label class="radio-inline"><input type="radio" name="optradio" checked>J</label>
          <label class="radio-inline"><input type="radio" name="optradio">K</label>  
        </div>
    </div>
    <div class="form-group row">
      <label for="studentRoomNo" class="col-sm-4 col-form-label">Select floor</label>
      <div class="col-sm-8">
        <select class="form-control" id="sel1">
    <option>1</option>
    <option>2</option>
    <option>3</option>
  </select>
              </div>
    </div>
 </div>
</div>
</div>
</form>

<div class="row" style="margin-top:2%;margin:auto;">
    <div class="col-md-2">
      <div class="card">
        <div class="card-header bg-primary">k302</div>
        <div class="card-body">Nisha<br>-</div> 
      </div>  
    </div>
    <div class="col-md-2">
      <div class="card">
          <div class="card-header">k315</div>
          <div class="card-body">Devisha<br>Krishma</div> 
      </div>
    </div>
    <div class="col-md-2">
      <div class="card">
              <div class="card-header">k302</div>
              <div class="card-body">Shilpi<br/>Aayushi</div> 
      </div>
    </div>

    <div class="col-md-2">
      <div class="card">
          <div class="card-header bg-danger">k302</div>
          <div class="card-body">Poorva<br/>Shayana</div> 
      
        </div>
    </div>

    <div class="col-md-2">
      <div class="card">
         <div class="card-header">k302</div>
        <div class="card-body">Poorva<br/>Shayana</div> 
      
      </div>
    </div>

    <div class="col-md-2">
      <div class="card">
        <div class="card-header">k302</div>
        <div class="card-body">Poorva<br/>Shayana</div> 
      </div>
    </div>
  </div>



</body>
</html>
