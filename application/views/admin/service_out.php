<!DOCTYPE HTML>
<html>
  <head>
    <title>Women's Hall of Residence  </title>
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
                <h3 class="inner-tittle two"><center><font size="10" color="#000051">Visitor Details</font></center></h3>
                  <div class="graph">
                    <div class="tables" >   
                  <br>  
        <table class="table table-bordered" id="dataTable">
        
        <thead>
        <tr class="active" style="font-size: 3;color:#000051 ">
          <th><b>Visitor Name</b></th>
          <th><b>Purpose</b></th>
          <th><b>In Time</b></th>
          <th><b>Out Time</b></th>
          <th><b>Date</b></th>
      
         

          
        </tr>
        </thead>
        <tbody>
       <?php 
               foreach($service as $service):
               
              ?>        
          <tr>
          <td><?php echo $service->V_name;  ?></td>
          <td><?php echo $service->Purpose;  ?></td>
          <td><?php echo $service->In_time;  ?></td>
          <td><?php if($service->Out_time=="00:00:00"){ ?>
                  <a href="<?php echo site_url('service/outentry/'.$service->V_id);?> "><button class="form-control btn btn-primary" >Check Out</button></a>
                  <?php 
                }
                  else{
                    echo $service->Out_time;
                  }       


           ?></td>
          <td><?php echo $service->Date;  ?></td>
         
          
          
          </tr>

            <?php endforeach;?>
                
      </tbody>
      </table> 
      
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

  
</html>