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
   <center> <label for="addCourier"><h3><b>Add Guest Details</b></h3></label></center> 
   </div>
  <div class="col-sm-2 col-md-2">
  </div>    
</div>
<div class="row" style="margin-top: 1%;"> 
  <div class="col-sm-3 col-md-3">
  </div>
  <form action="<?php echo site_url('guest/addguest') ?>" method="post">   
  <div class="col-sm-6 col-md-6">
    <div class="col-sm-1 col-md-1"></div>
    <div class="col-sm-10 col-md-10">
    <div class="form-group row">
        <label for="guestName" class="col-sm-4 col-form-label">Name</label>
        <div class="col-sm-8">
          <input class="form-control" name="guestName" type="text" placeholder="Name" required>
        </div>
    </div>
  <div class="form-group row">
        <label for="guestContact" class="col-sm-4 col-form-label">Contact NO</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="guestContact" placeholder="Contact Number" pattern="[0-9]{10}" title="Ten digit phone number" required>
        </div>
  </div>  
 <div class="form-group row">
      <label for="purpose" class="col-sm-4 col-form-label">Purpose</label>
      <div class="col-sm-8">
        <input class="form-control" name="purpose" type="text" placeholder="Purpose of stay" required>
      </div>
    </div>
      <div class="form-group row">
      <label for="studentRoomNo" class="col-sm-4 col-form-label">Room NO</label>
      <div class="col-sm-8">
        <input class="form-control" name="studentRoomNo" type="text" pattern= "[J-Kj-k]{1}[0-9]{3}" title="Room Number e.g.(k306)" required>
      </div>
    </div>
  <div class="form-group row">
        <label for="staffAddress" class="col-sm-4 col-form-label">Address-line1</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="Address" placeholder="Address-line1" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="staffAddress2" class="col-sm-4 col-form-label">Address-line2</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="Address2" placeholder="Address-line2" required>
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
  </div>
  <div class="col-sm-3 col-md-3">
    
  </div>    
</div>
 

</form>
</body>
</html>

