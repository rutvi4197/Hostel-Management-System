
<!DOCTYPE HTML>
<html>
	<head>
		<title>Attendance</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/table.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/header.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/attendance.css">
</head>
	<body>
		<!-- header -->
	<?php
include('header.php');
?>
		<!-- attendance -->
		<div id="att" class="row" style="margin-top: 50px;">
			<center>
				<h3>Attendance</h3>
				<table id="att_table">
					<tr>
						<th>Student ID</th>
						<th>Student Name</th>
						<th>Room No</th>
					</tr>
					<tr>
						<td>Student ID</td>
						<td>Student Name</td>
						<td>Room No</td>
					</tr>
					<tr>
						<td>Student ID</td>
						<td>Student Name</td>
						<td>Room No</td>
					</tr>
					<tr>
						<td>Student ID</td>
						<td>Student Name</td>
						<td>Room No</td>
					</tr>
					<tr>
						<td>Student ID</td>
						<td>Student Name</td>
						<td>Room No</td>
					</tr>
				</table>
			</center>
		</div>

		<!-- in-out-entry -->
		<div id="io" class="row" style="margin-top: 50px;">
			<center>
				<h3>IN/OUT Entry</h3>
				<table id="io_table">
					<tr>
						<th>Student ID</th>
						<th>Student Name</th>
						<th>Room No</th>
					</tr>
					<tr>
						<td>Student ID</td>
						<td>Student Name</td>
						<td>Room No</td>
					</tr>
					<tr>
						<td>Student ID</td>
						<td>Student Name</td>
						<td>Room No</td>
					</tr>
					<tr>
						<td>Student ID</td>
						<td>Student Name</td>
						<td>Room No</td>
					</tr>
					<tr>
						<td>Student ID</td>
						<td>Student Name</td>
						<td>Room No</td>
					</tr>
				</table>
			</center>
		</div>
	</body>
</html>