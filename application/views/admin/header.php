
	<link  href="<?php echo base_url(); ?>bootstrapcss/bootstrap.min.css" rel="stylesheet">
  <link  href="<?php echo base_url(); ?>bootstrapcss/font-awesome.min.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

<div class="row">
    <div class="col-xs-3 col-sm-2 col-md-1"><a href="home.php"><img class="logo" style="width:auto;height:100px;" src="image/Logo.jpg"></a></div>
    <div class="col-xs-9 col-sm-10 col-md-11"><a href="home.php"><img class="logoText" src="image/logoText.jpg"></a></div>
</div>

<nav class="navbar navbar-default" style="background-color: #cbebf6" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <!--<a class="navbar-brand" href="#">Brand</a>-->
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
       <li ><a href="#"><span style="padding-right:5px;" class="glyphicon glyphicon-home"></span>HOME</a></li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="padding-right:5px;" class="fa fa-500px"></span>Attendence<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Daily Attendence</a></li>
            <li><a href="#">IN/OUT Entry</a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="padding-right:5px;" class="glyphicon glyphicon-info-sign"></span>Complain<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">View Complain</a></li>
            <li><a href="#">Status of Complain</a></li> 
          </ul>
        </li>

         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="padding-right:5px;" class="glyphicon glyphicon-info-sign"></span>Guest<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Add Guest</a></li>
            <li><a href="#">View Guest</a></li> 
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="padding-right:5px;" class="glyphicon glyphicon-wrench"></span>Serivces<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Add Service</a></li>
            <li><a href="#">View Service</a></li> 
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="padding-right:5px;" class="glyphicon glyphicon-briefcase"></span>Courier<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Add Courier</a></li>
            <li><a href="#">View Courier</a></li> 
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="padding-right:5px;" class="glyphicon glyphicon-user"></span>Student<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Room Details</a></li>
            <li><a href="#">Student Details</a></li> 
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="padding-right:5px;" class="glyphicon glyphicon-stats"></span>Add Attendence<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Daily Attendance</a></li>
            <li><a href="#">IN/OUT Entry</a></li> 
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i style="padding-right:5px;" class="fa fa-users"></i>Admin<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Add Staff</a></li>
            <li><a href="#">View Staff</a></li> 
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span style="padding-right:5px;" class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
  </div><!-- /.navbar-collapse -->
</nav>  

