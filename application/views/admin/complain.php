<!DOCTYPE HTML>
<html>
<head>
	<title>Women's Hall of Residence	
	</title>

	<link  href="<?php echo base_url(); ?>css/complain.css" rel="stylesheet">
</head>

<body>
  	<?php
include_once('header.php');
?>
	<div class="row" style="margin-top:2%">
		<?php 
			foreach ($complain as $complain) :
		?>
		<div class="col-sm-4">
			<div class="card">
				<div class="card-header">
					<h2><span class="label label-primary"><?php echo $complain->Type_name; ?></span></h2>	
				</div>
		  		<div class="card-body">
		  			<div class="card-title">
		  				<h5><em><?php echo $complain->Date; ?></em></h5>
		  			</div>
		    		<p class="card-text"><i><b><?php echo $complain->Description; ?></b></i></p>
		    		<h5><span class="label label-default"><?php echo $complain->First_name; ?></span><span style="margin-left:3px;"class="label label-default"><?php echo $complain->Room_no; ?></span></h5>
		    		<a href="<?php echo site_url('complain/changestatus/'.$complain->complaint_id) ?>" class="btn btn-default" style="float:right;margin-right: 10px;margin-bottom: 10px;box-shadow: 1px 1px #ddd;">Change Status</a>
		    	</div>
		    </div>
  		</div>
  	<?php endforeach; ?>
	</div>
	</body>
	</html>	