<!DOCTYPE HTML>
<html>
  <head>
    <title>Women's HOR</title>
<script  src="<?php echo base_url(); ?>js/jquery-1.12.3.js" type="text/javascript"></script> 
  <link rel="Stylesheet" href="<?php echo base_url(); ?>bootstrapcss/jquery.dataTables.min.css" /> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.12.3.js"></script>
</head>
  <body>
    <!-- header -->
<?php
include('header.php');

 ?>
 <link rel="Stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>



   <script type="text/javascript">
            $(function () {

            $('#dataTable').dataTable({
               // "bJQueryUI": true,
                "sPaginationType": "full_numbers",
        //"pageLength": 1
            });

            $('#chk-all').click(function () {
                if ($(this).is(':checked')) {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', true);
                        $(this).parent().parent().parent().addClass('selected');
                    });
                }
                else {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', false);
                        $(this).parent().parent().parent().removeClass('selected');
                    });
                }
            });
        });
    </script>
   <div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="page-container">
      <div class="left-content">
        <div class="inner-content">
        
          <div class="outter-wp">
            <div class="sub-heard-part"></div>
              <div class="graph-visual tables-main">
                <h3 class="inner-tittle two"><center><b>Staff Details</b></center></h3>
                  <div class="graph">
                    <div class="tables" >   
                  <br>  
        <table class="table table-bordered" id="dataTable">
        
        <thead>
        <tr class="active" style="font-size: 3;color:#000051">
          <th><b>Staff ID</b></th>
          <th><b> Name</b></th>
          <th><b>Contact No</b></th>
          <th><b>City Name</b></th>
         
         

          
        </tr>
        </thead>
        <tbody>
       <?php 
               foreach($staff as $staff):
               
              ?>        
          <tr>
          <td><?php echo $staff->Staff_id;  ?></td>
          <td><?php echo $staff->Staff_name;  ?></td>
          <td><?php echo $staff->Contact_no;   ?></td>
          <td><?php echo $staff->City_name;  ?></td>
         
         
          
          
          </tr>
              </div>
          </div>
        </div>

            <?php endforeach;?>
                
      </tbody>
      </table> 
      
                    </div>
                  </div>
      </div>
    </div>
  </div>
</div>

</body>

  
</html>