<?php include('header.php');?>
</head>
<body>
<form>
<div class="row" style="margin-top: 1%;"> 
  <div class="col-sm-2 col-md-2">
  </div>    
  <div class="col-sm-8 col-md-8">
   <center> <label for="studentDetails"><h3>Student Details</h3></label></center> 
   </div>
  <div class="col-sm-2 col-md-2">
  </div>    
</div>

<div class="row" style="margin-top: 1%;"> 
	<div class="col-sm-3 col-md-3">
	</div>		
	<div class="col-sm-6 col-md-6" style="display:flex;justify-content:center;">
		<label class="col-form-label" style="padding-right:0%;">Student ID</label>
		<div class="col-sm-6">
			<input type="text"  class="form-control" id="studentID" placeholder="Student ID">
		</div>
		<button type="submit" class="btn btn-primary mb-1 col-sm-2" >ADD</button>
	</div>
	<div class="col-sm-3 col-md-3">
		
	</div>		
</div>
 <!--
<div class="row" style="margin-top: 2%;"> 
	<div class="col-sm-2 col-md-2">
	</div>		
	<div class="col-sm-8 col-md-8">
		<div class="col-sm-6 col-md-6">
			<div class="form-group row">
				<label for="studentName" class="col-sm-4 col-form-label">Name</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="studentName">
				</div>
			</div>
			<div class="form-group row">
				<label for="studentDOB" class="col-sm-4 col-form-label">Date Of Birth</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="studentDOB">
				</div>
			</div>
			<div class="form-group row">
				<label for="studentContact" class="col-sm-4 col-form-label">Contact NO</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="studentContact">
				</div>
			</div>	
			
			<div class="form-group row">
				<label for="studentEmail" class="col-sm-4 col-form-label">Email</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="studentEmail">
				</div>
			</div>
		</div>		
		<div class="col-sm-6 col-md-6">
			<div class="form-group row">
				<label for="studentID" class="col-sm-4 col-form-label">ID</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="studentID">
				</div>
			</div>
			<div class="form-group row">
				<label for="studentRoomNo" class="col-sm-4 col-form-label">Room NO</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="studentRoomNo">
				</div>
			</div>
			<div class="form-group row">
				<label for="studentCourse" class="col-sm-4 col-form-label">Course</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="studentCourse">
				</div>
			</div>
			<div class="form-group row">
				<label for="studentBG" class="col-sm-4 col-form-label">Blood Group</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="studentBG">
				</div>
			</div>
		</div>		
	</div>
	<div class="col-sm-2 col-md-2">
	</div>		
</div>

<div class="row"> 
	<div class="col-sm-2 col-md-2">
	</div>		
	<div class="col-sm-8 col-md-8">
		<div class="col-sm-6 col-md-6">
			<div class="form-group row">
				<label for="address" class="col-sm-12 col-form-label" style="font-size:120%;">Permanent Address</label>
				
			</div>
			<div class="form-group row">
				<label for="permanentAddress" class="col-sm-4 col-form-label">Address-line1</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="permanentAddress">
				</div>
			</div>
			<div class="form-group row">
				<label for="permanentAddress2" class="col-sm-4 col-form-label">Address-line2</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="permanentAddress2">
				</div>
			</div>
			<div class="form-group row">
				<label for="city" class="col-sm-4 col-form-label">City</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="city">
				</div>
			</div>
		</div>
<div class="col-sm-6 col-md-6">
			<div class="form-group row">
				<label for="address" class="col-sm-12 col-form-label" style="font-size:120%;">Temporary Address</label>
				
			</div>
			<div class="form-group row">
				<label for="temporaryAddress" class="col-sm-4 col-form-label">Address-line1</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="temporaryAddress">
				</div>
			</div>
			<div class="form-group row">
				<label for="temporaryAddress2" class="col-sm-4 col-form-label">Address-line2</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="temporaryAddress2">
				</div>
			</div>
			<div class="form-group row">
				<label for="city" class="col-sm-4 col-form-label">City</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="city">
				</div>
			</div>
		</div>
				
	</div>
	<div class="col-sm-2 col-md-2">
	</div>		
</div>

<div class="row" style="margin-top: 1%;"> 
	<div class="col-sm-2 col-md-2">
	</div>		
	<div class="col-sm-8 col-md-8">
		<label for="studentName" class="col-sm-4 col-form-label"  style="font-size:150%;" >Parent's Details</label>
		</div>
	<div class="col-sm-2 col-md-2">
	</div>	
</div>


<div class="row" > 
	<div class="col-sm-2 col-md-2">
	</div>		
	<div class="col-sm-8 col-md-8"  style="margin-top:1%;">
	<div class="col-sm-7 col-md-7">
			<div class="form-group row">
				<label for="fatherName" class="col-sm-4 col-form-label">Father's Name</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="fatherName">
				</div>
			</div>
			<div class="form-group row">
				<label for="motherName" class="col-sm-4 col-form-label">Mother's Name</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="motherName">
				</div>
			</div>
			<div class="form-group row">
				<label for="parentContact" class="col-sm-4 col-form-label">Contact NO</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="parentContact">
				</div>
		</div>
	</div>
	</div>
	<div class="col-sm-2 col-md-2">
	</div>	
</div>
-->


</form>
</body>
</html>