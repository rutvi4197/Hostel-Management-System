<!DOCTYPE HTML>
<html>
	<head>
		<title>Attendance</title>
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
   
			<div class="page-container">
			<div class="left-content">
				<div class="inner-content">
				
					<div class="outter-wp">
						<div class="sub-heard-part"></div>
							<div class="graph-visual tables-main">
								<h3 class="inner-tittle two"><center><font size="10" color="#000051">Out Entry Student details</font></center></h3>
									<div class="graph">
										<div class="tables" >		
									<br>	
				<table class="table table-bordered" id="dataTable">
				
				<thead>
				<tr class="active" style="font-size: 3;color:#000051 ">
					<th><b>Student Id</b></th>
					<th><b>Student Name</b></th>
					<th><b>Room No</b></th>
					<th><b>Out Date</b></th>
					<th><b>Place</b></th>
					<th><b>Name of relative</b></th>
					<th><b>Contact No</b></th>
					<th><b>In Entry</b></th>

					
				</tr>
				</thead>
				<tbody>
			 <?php 
               foreach($outstudent as $outstudent):
               
              ?>        
					<tr>
					<td><?php echo $outstudent->Student_id  ?></td>
					<td><?php echo $outstudent->First_name  ?></td>
					<td><?php echo $outstudent->Room_no  ?></td>
					<td><?php echo $outstudent->Out_date ?></td>
					<td><?php echo $outstudent->Place  ?></td>
					<td><?php echo $outstudent->Name_of_relative  ?></td>
					<td><?php echo $outstudent->Contact_no  ?></td>
					<td><?php if($outstudent->In_date=='null')
						{
						echo '<a href="site_url("attendence/doinentry/'.$outstudent->Student_id.'); "><button type="button" class="form-control btn btn-primary" >In Entry</button></a></td>';
						}
						else
						{
							echo $outstudent->In_date;
						}
						?>
					
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
	
</body>

	
</html>