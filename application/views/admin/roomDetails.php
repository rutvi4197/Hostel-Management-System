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
<form action="<?php echo site_url('studentdetail/searchroom') ?>" method="post">   
<div class="row" style="margin-top: 1%;"> 
  <div class="col-sm-3 col-md-3">
  </div>    
  <div class="col-sm-6 col-md-6">
    <div class="col-sm-1 col-md-1"></div>
    <div class="col-sm-10 col-md-10">
    <div class="form-group row">
        <label for="studentID" class="col-sm-4 col-form-label">Select Wing</label>
        <div class="col-sm-8">
          <label class="radio-inline"><input type="radio" name="optradio" value="j" >J</label>
          <label class="radio-inline"><input type="radio" name="optradio" value="k">K</label>  
        </div>
    </div>
    <div class="form-group row">
      <label for="studentRoomNo" class="col-sm-4 col-form-label">Select floor</label>
      <div class="col-sm-4">
              <select class="form-control" name="floor">
           <option value="all">ALL</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>

          </select>
    </div>
     <div class="col-sm-4">
      <button type="submit" class="btn btn-primary " >Click here</button>
    </div>
 </div>
</div>
</div>
</div>
</form>

<div class="row" style="margin-top:2%;margin:auto;">
    <?php
      foreach ($room as $room):
   ?>
    <div class="col-md-2">
      <div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $room->Room_no ?></h3>
  </div>
  <div class="panel-body">
   <?php
              
         if($room->No_of_occupants==0)     
         {
          echo 'No Member</br>
              No Member';
         }  
         else
         {
    $CI =& get_instance();
    $CI->load->model('Studentrecord');
    $result= $CI->Studentrecord->roomwisename($room->Room_no);    
    foreach($result as $row){ 
         echo $row->First_name.' :-'.$row->Student_id .'</br>';  
          if($room->No_of_occupants==1)
         {
          echo '</br>';
         }  
        }
    }
?>

    
  </div>
</div>
</div> 
<?php endforeach; ?>
    
  </div>



</body>
</html>
