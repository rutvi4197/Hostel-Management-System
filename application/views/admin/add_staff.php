<?php include('header.php');?>

<form>
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
        <label for="staffName" class="col-sm-4 col-form-label">Name</label>
        <div class="col-sm-8">
          <input class="form-control" id="staffName" type="text">
        </div>
    </div>
  <div class="form-group row">
        <label for="staffContact" class="col-sm-4 col-form-label">Contact NO</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="staffContact">
        </div>
      </div>  
  <div class="form-group row">
        <label for="staffAddress" class="col-sm-4 col-form-label">Address-line1</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="staffAddress">
        </div>
      </div>
      <div class="form-group row">
        <label for="staffAddress2" class="col-sm-4 col-form-label">Address-line2</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="staffAddress2">
        </div>
      </div>
      <div class="form-group row">
        <label for="city" class="col-sm-4 col-form-label">City</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="city">
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


