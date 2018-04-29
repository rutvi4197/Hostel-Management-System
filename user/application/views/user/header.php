
	<link  href="<?php echo base_url(); ?>bootstrapcss/bootstrap.min.css" rel="stylesheet">
  <link  href="<?php echo base_url(); ?>bootstrapcss/font-awesome.min.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  <link href="<?php echo base_url(); ?>css/footer.css" rel="stylesheet" type="text/css" >
  


<div class="row">
    <div class="col-xs-3 col-sm-2 col-md-1"><a href="<?php echo site_url('home'); ?>"><img class="logo" style="width:auto;height:100px;" src="<?php echo base_url(); ?>image/Logo.jpg"></a></div>
    <div class="col-xs-9 col-sm-10 col-md-11"><a href="<?php echo site_url('home'); ?>"><img class="logoText" src="<?php echo base_url(); ?>image/logoText.JPG"></a></div>
</div>

<nav class="navbar navbar-default" style="background-color: #cbebf6;" role="navigation">
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
       <li><a href="<?php echo site_url('home'); ?>"><span style="padding-right:5px;" class="glyphicon glyphicon-home"></span>HOME</a></li>

        <li>
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="padding-right:5px;" class="glyphicon glyphicon-info-sign"></span>Complain<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('complain/addcomplain'); ?>">Register Complain</a></li>
            <li><a href="<?php echo site_url('complain/viewcomplain'); ?>">View Status of Complain</a></li> 
          </ul>
        </li>

        <li class="nav-item"><a href="<?php echo site_url('hlf') ?>" class="nav-link"><span style="padding-right:5px;" class="glyphicon glyphicon-home"></span>Hostel Leaving Form</a></li>

        <li class="nav-item"><a href="<?php echo site_url('feedback') ?>"><span style="padding-right:5px;" class="fa fa-share-square"></span>Feedback</a></li>
      

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('login/logout'); ?>"><span style="padding-right:5px;" class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
  </div><!-- /.navbar-collapse -->
</nav>  

