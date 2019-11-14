<?php 
require_once 'helper/autoload.php';


 
?>

<!DOCTYPE html>
<html>
<head>
	<title>groups-login</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.0.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/styl2.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/mystyles.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--Google Fonts-->
	<!-- <link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<!-- animated-css -->
	<script src="js/modernizr.js"></script>
	<script src="js/bootstrap.min.js"></script>


</head>
<body>
<div class="header">
	<div class="fixed-header">
		    <div class="navbar-wrapper">
		      <div class="container">
		        <nav class="navbar  navbar-static-top">
		             <div class="navbar-header">
			              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			              </button>
			          </div>
		             </nav>
		          </div>
		           <div class="clearfix"></div>
		    </div>
	 </div>
</div>
<div class="header">
	<div class="container">
	<div class="row-content">
		<div class="col-xs-10 col-md-2 col-md-offset-5  " style="">
			<img class="img-rounded img-resposive" src="img/imag1.png"  >
		</div>
	</div>
 </div>
<div class="gridecontainer ">
<div class="clearfix" style="height: 3cm;"></div>
	<div class="row-content1  gridbox col-md-offset-4 col-xs-12 col-sm-8 col-md-3 col-sm-offset-2 ">
	<div class=" " id="login">
			<form class="form-group" method="" action="">
			<h3 class="form-title " style="text-align: center; color:#0000FF;">Login to your account</h3>
				<div class="form-group">
				<div class="input-icon">
				<i class="fa fa-user"></i><input class="form-control placeholder-no-fix" placeholder="emial or phone" autocomplete="off" name="LoginForm" id="LoginForm" type="emial"/>			
                </div>
                </div>
                <div class="form-group">
				 <div class="input-icon">
					<i class="fa fa-lock"></i><input class="form-control placeholder-no-fix" placeholder="Password" autocomplete="off" name="password" id="password" type="password"/>
                 </div>
                </div>
                <!-- <div class="form-group">
				 <div class="input-icon">
					<i class="fa fa-lock"></i><input class="form-control placeholder-no-fix" placeholder="Activation key" autocomplete="off" name="capcha" id="capcha" type="capcha" />
                 </div>
                </div> -->
                <div class="form-group">
						<input class="" type="checkbox" name="checkbox" value="Remember me"> <label class="info"> Remember me</label>
						<a class="pull-right" href="regform" style="color:#0000FF;">Activate your account</a>
				</div>
					<div class="form-group">
						<input class=" btn btn-primary pull-right" type="button" name="login" value="proceed">
					</div>
			</form>	
	</div>
	</div>
</div>	
</div>
<div class="clearfix" style="height: 3cm;"></div>

<div class="navbar  navbar-fixed-bottom">
<div class="copy-right">
	<div class="container">
		 <div class="copy-rights-main wow zoomIn" data-wow-delay="0.3s">
    	    <p style="text-align: center; color: #FFFFFF;">&copy; 2017 All Rights Reserved</p>
    	 </div>
    </div>
</div>
</div>
</body>
</html>