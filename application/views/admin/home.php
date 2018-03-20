
<!DOCTYPE HTML>
<html>
<head>
	<title>Women's Hall of Residence	
	</title>

	<!-- external css -->


	<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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


	

	<div style="float: left; width: 30%">
		<!-- complains -->
		<div id="complains">
			<table id="complain" style="width:100%">
				<tr>
					<td>Complain1</td>
				</tr>
				<tr>
					<td>Complain2</td>
				</tr>
				<tr>
					<td>Complain3</td>
				</tr>
			</table>
		</div>
	</div>
	<div style="float: left; width: 70%">
		<div class="graphcontainer">
			<!-- BarGraphs -->
	 		<div id="att" class="bargraph"></div>
			<div id="in-out-entry" class="bargraph"></div>
			<!-- piechart -->
			<div id="piechart"></div> 
	</div>
	</div>

	
 </body>
</html>