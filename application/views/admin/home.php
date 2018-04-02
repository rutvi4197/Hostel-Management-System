
<!DOCTYPE HTML>
<html>
<head>
	<title>Women's Hall of Residence	
	</title>

	<!-- external css -->

	<link  href="<?php echo base_url(); ?>css/home.css" rel="stylesheet">
	<script type="text/javascript">
	window.onload = function () {
    var chart = new CanvasJS.Chart("entry",
    {
      title:{
        text: "In-Out Entry"
      },
      data: [

      {
        dataPoints: [
        { x: 1, y: 300, label: "Date1"},
        { x: 2, y: 150,  label: "Date2" },
        { x: 3, y: 201,  label: "Date3"},
        { x: 4, y: 320,  label: "Date4"},
        { x: 5, y: 343,  label: "Date5"},
        ]
      }
      ]
    });

    chart.render();
	}
 	</script>

	<script type="text/javascript">
	window.onload = function () {
    var chart = new CanvasJS.Chart("att",
    {
      title:{
        text: "Attendence"
      },
      data: [

      {
        dataPoints: [
        { x: 1, y: 300, label: "Date1"},
        { x: 2, y: 150,  label: "Date2" },
        { x: 3, y: 201,  label: "Date3"},
        { x: 4, y: 320,  label: "Date4"},
        { x: 5, y: 343,  label: "Date5"},
        ]
      }
      ]
    });

    chart.render();

    var chart = new CanvasJS.Chart("in-out-entry",
    {
      title:{
        text: "In-Out-Entry"
      },
      data: [

      {
        dataPoints: [
        { x: 1, y: 300, label: "Date1"},
        { x: 2, y: 150,  label: "Date2" },
        { x: 3, y: 201,  label: "Date3"},
        { x: 4, y: 320,  label: "Date4"},
        { x: 5, y: 343,  label: "Date5"},
        ]
      }
      ]
    });

    chart.render();

	}
 	</script>
</head>


  <body>
  	<?php
include_once('header.php');
?>
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<script type="text/javascript">

		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);


		/*-------Changes according to complaints-------*/
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([
		  ['Complaints', 'Number per Day'],
		  ['Electrical', 8],
		  ['Maintenance', 2],
		  ['Carpenter', 4],
		  ['Other', 2],

		]);
		/*----------------------------*/	
		  var options = {'title':'Complaints', 'width':550, 'height':400};
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}
	</script>


	
	<div class="row">
		<div class="col-sm-3" style="margin-left:2%">
			<div>
				<ul class="list-group">
				  <li class="list-group-item active">Today's Stat</li>
				  <?php
				  	foreach ($total as $total) {
				  		$totalstudent=$total->cnt;
				  	}
				   ?>
				  <li class="list-group-item">Total Present<span class="badge badge-light"><?php echo $totalstudent; ?></span></li>
				   <?php
				  	foreach ($out as $out) {
				  		$outstudent=$out->out;
				  	}
				   ?>
				  <li class="list-group-item">Total Out Entries<span class="badge badge-light"><?php echo $outstudent; ?></span></li>
				   <?php
				  	foreach ($absent as $absent) {
				  		$absentstudent=$absent->absent;
				  	}
				   ?>
				  <li class="list-group-item">Total Absent Entries<span class="badge badge-light"><?php echo $absentstudent; ?></span></li>

				  <li class="list-group-item">Today Present Entries<span class="badge badge-light"><?php $pre=$totalstudent-($outstudent+$absentstudent); echo $pre; ?></span></li>
				</ul>
			</div>

		
			<div id="complains">
				<ul class="list-group">
					  <li class="list-group-item active">Complains</li>
					  <marquee direction="up">
						 <?php
						 $i=0;
						  	foreach ($complain as $complain) {
						  		if($i<6)
						  		{
						  		echo ' <li class="list-group-item">'.$complain->Student_id.' -- '.$complain->Type_name.'</li>';
						  		$i++;
						  		}
						  
						  		
						  	}
				  		 ?>
						  
					  </marquee>
				</ul>
			</div>
		</div>	

		<div class="col-sm-8">
			<div class="row">
				<div id="att" class="col-sm-4" style="margin-left:7%;"></div>
				<div id="in-out-entry" class="col-sm-4" style="margin-left:7%;margin-right:10%;"></div>
			</div>
			<div class="row">
				<center id="piechart"></center>
			</div>
		</div>
	</div>
	
<div class="row">
	<?php


		include_once('footer.php');
	 ?>
</div>	

	