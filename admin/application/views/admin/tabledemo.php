
<!DOCTYPE HTML>
<html>
<head>
<title>City Display</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
  
<link href="<?php echo base_url();?>bootstrapcss/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url();?>bootstrapcss/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url();?>bootstrapcss/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo base_url();?>bootstrapcss/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="<?php echo base_url(); ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url(); ?>js/amcharts.js"></script>	
<script src="<?php echo base_url(); ?>js/serial.js"></script>	
<script src="<?php echo base_url(); ?>js/light.js"></script>	
<script src="<?php echo base_url(); ?>js/radar.js"></script>	
<link href="<?php echo base_url();?>bootstrapcss/barChart.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>bootstrapcss/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
	
    <link href="<?php echo base_url();?>bootstrapcss/jquery.dataTables_themeroller.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bootstrapcsscss/endless.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bootstrapcss/font-awesome.min.css" rel="stylesheet"> 
    <script src="<?php echo base_url(); ?>js/jquery-1.10.2.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src='<?php echo base_url();?>js/jquery.dataTables.min.js'></script>

    <script>
        $(function () {
            $('#dataTable').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
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
</head> 
<body>





		<div class="page-container">
			<div class="left-content">
				<div class="inner-content">
				<?php include 'header.php'; ?>
					<div class="outter-wp">
						<div class="sub-heard-part"></div>
							<div class="graph-visual tables-main">
								<h3 class="inner-tittle two"><center><font size="10" color="#FF6347">City Display </font></center></h3>
									<div class="graph">
										<div class="tables" >		
			
			
				<div>
					<a href="addcity.php"><font size="5"><span style="color:#FF6347;" class="glyphicon glyphicon-plus" aria-hidden="true"></span></font></a>
				</div>
			<br>	
			<table class="table table-bordered" id="dataTable">
				
				<thead>
				<tr class="active">
					<th><font size="3" color="#FF6347"><b>City Id</b></font>
					<th><font size="3" color="#FF6347"><b>City Name</b></font>
					<th><font size="3" color="#FF6347"><b>Update</b></font>
					<th><font size="3" color="#FF6347"><b>Delete</b></font>
				</tr>
				</thead>
				<tbody>
			
						<tr>
					<td><font size="3" color="black">1</font></td>
					<td><font size="3" color="black">Ahmedabad</font></td>
					<td><a href=""><button style="background-color: lightgreen" type="button" class="btn btn-info" aria-label="Left Align"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a></td>
					<td><a href=""><button style="background-color: #FF6347" type="button" class="btn btn-info" aria-label="Left Align"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>
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
</body>
<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
</script>
<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrapcss/vroom.css">
<script type="text/javascript" src="<?php echo base_url(); ?>js/vroom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/TweenLite.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/CSSPlugin.min.js"></script>
<script src="j<?php echo base_url(); ?>s/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>js/scripts.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

</html>