<!DOCTYPE HTML>
<HTML>
	<head>
		<title>Women's HOR</title>
	</head>
	<body>
	
<?php
include('header.php');
?>
<article class="studentDetails">
	<div id="searchId">
		<table>
			<tr>
			<td>Student Id</td>
			<td><input type="text" id="studentId" name="studentId" required></td>
			<td><input type="submit" id="searchId" name="searchId" value="Search" required></td>	

			</tr>
		</table>
	</div>

	<div class="searchDetails">
		<table>
			<tr>
				<td><b>Name:</b></td>
				<td><input type="text" id="studentName" disabled></td>
				<td style="width:10%"></td>
				<td><b>ID</b></td>
				<td><input type="text" id="studentID" disabled></td>
			</tr>
			<tr style="height:20px;"></tr>
			
			<tr>
				<td>Date Of Birth:</td>
				<td><input type="text" id="studentDOB" disabled></td>
				<td style="width:10%"></td>
				<td>Room No</td>
				<td><input type="text" id="studentRoomNo" disabled></td>
				
			</tr>

			<tr>
				<td>Contact No:</td>
				<td><input type="text" id="studentContact" disabled></td>
				<td style="width:10%"></td>
				<td>Course</td>
				<td><input type="text" id="studentCourse" disabled></td>
				
			</tr>
			
			<tr>
				<td>Email:</td>
				<td><input type="text" id="studentEmail" disabled></td>
				
			</tr>
			<tr style="height:20px;"></tr>
				
			<tr>
				<td><b>Parents Detail</b></td>
			</tr>
			<tr style="height:20px;"></tr>
							
			<tr>
				<td>Father's Name</td>
				<td><input type="text" id="fatherName" disabled></td>
			</tr>
			<tr>				
				<td>Mother's Name</td>
				<td><input type="text" id="motherName" disabled></td>
			</tr>
			<tr>
				<td>Contact No</td>
				<td><input type="text" id="contactNo" disabled></td>
				
			</tr>
			</table>
			<table>
			<tr style="height:20px;"></tr>
				
			<tr>
				<td><b>Permanent Address</b></td>
				<td style="width:10%"></td>
				<td><b>Temporary Address</b></td>
				
			</tr>
			<tr style="height:20px;"></tr>
							
			<tr>
				<td><textarea id="permanentAddress" rows=4 cols=50></textarea></td>
				<td style="width:10%"></td>
				<td><textarea id="temporaryAddress" rows=4 cols=50></textarea></td>
			</tr>

	

		</table>
	</div>
</article>
