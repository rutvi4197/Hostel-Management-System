<!DOCTYPE HTML>
<html>
	<head>
		<title>Status of Complain</title>
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
    	<div class="col-md-3 col-sm-3">
    	</div>
    	<div class="col-md-6 col-sm-6">
			<div class="page-container">
			<div class="left-content">
				<div class="inner-content">
				
					<div class="outter-wp">
						<div class="sub-heard-part"></div>
							<div class="graph-visual tables-main">
								<h3 class="inner-title two"><center><font size="10" color="#000051">Status of Complains</font></center></h3>
									<div class="graph">
										<div class="tables" >		
									<br>	
				<table class="table table-bordered" id="dataTable">
				
				<thead>
				<tr class="active" style="font-size: 3;color:#000051 ">
                    <th><b>Complain Id</b></th>
					<th><b>Complain type</b></th>
					<th><b>Student Id</b></th>
					<th><b>Room No</b></th>
					<th><b>Date</b></th>
					<th><b>Status</b></th>
					
				</tr>
				</thead>
				<tbody>
                	<tr>
                        <td>001</td>
                		<td>Electricity</td>
                		<td>201712022</td>
                		<td>J311</td>
                		<td>2 April</td>
                		<td>Done</td>
                	</tr>
                	<tr>
                        <td>002</td>
                		<td>Electricity</td>
                		<td>201712022</td>
                		<td>K111</td>
                		<td>3 April</td>
                		<td>Done</td>
                	</tr>
                	<tr>
                        <td>003</td>
                		<td>Electricity</td>
                		<td>201712022</td>
                		<td>J302</td>
                		<td>3 April</td>
                		<td>Done</td>
                	</tr>
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
	<div class="col-md-3">
	</div>
	</div>
</body>

	
</html>