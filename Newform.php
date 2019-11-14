<?php

	require_once 'helper/autoload.php';

	$error=false;


	// $dpstorname=sanitize($_POST['dpstorname']);
	// $dpstoroname=sanitize($_POST['dpstoroname']);
	// $phone=sanitize($_POST['phone']);
	// $email=sanitize($_POST['email']);
	// $verifkey=sanitize($_POST['verifkey']);
	// $district=sanitize($_POST['district']);
	// $addofdistrict=sanitize($_POST['addofdistrict']);
	// $nbustop=sanitize($_POST['nbustop']);
	// $gpastor=sanitize($_POST['gpastor']);
	// $gphone=sanitize($_POST['gphone']);
	// $gemail=sanitize($_POST['gemail']);
	// $password=sanitize($_POST['password']);
	// $Cpassword=sanitize($_POST['Cpassword']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Newform</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.0.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/mystyl2.css" rel="stylesheet" type="text/css" media="all" />
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
<div class="row-content">
			<!-- <div class="col-xs-12 col-md-12 col-sm-12"></div> -->
</div>
<div class="clearfix" style="height: 1cm;"></div>
<div class="fix-sheader">
	<div class="gridecontainer">
	<div class="row-contenta relative gridbox">
	<div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-2 col-md-offset-4" id="login">
	<span class="text-success">
	<?php if (isset($successmsg)) { echo $successmsg; } ?></span>
	<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>

	<!-- <form name="verific-key" id="verific-key" class="form-group" method="post" action="reg-form.php">
			<h3 class="form-title " style="text-align: center; color:#0000FF;">Please enter your verification key that you recieve from the Admin</h3>
                <div class="form-group">
				 <div class="input-icon">
					<i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" placeholder="Activation key" autocomplete="off" name="capcha" id="capcha" type="capcha" />
                    <span class="text-danger"><?php if (isset($capcha_error)) echo $capcha_error; ?></span>

                 </div>
                </div>
                
					<div class="form-group">
						<input class=" btn btn-primary pull-right" type="button" name="login" value="proceed">
					</div>
			</form> -->	
	</div>
	</div>
</div>	
</div>
<div class="clearfix" style="height: 3cm;"></div>
<div class="row-content1 relative gridbox">
	<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" id="login">
	
    <form name="Details-form" id="Details-form" class="form-group" method="post" action=" reg-form.php">
    
	<h3 class="form-title " style="text-align: center; color:#0000FF;">Your Account Information</h3>

				<div class="form-group">
						<label for="firstname">Surname:</label>
						<input type="text" name="dpstorname" id="dpstorname" class="form-control input-lg" value="<?php if($error) echo $dpstorname; ?>" placeholder="Enter First Name" tabindex="1">
						<span class="text-danger"><?php if (isset($dpstorname_error)) echo $dpstorname_error; ?></span>

					<label for="secondname">Other Names:</label><input type="text" name="dpstoroname" id="dpstoroname" class="form-control input-lg" value="<?php if($error) echo $dpstoroname; ?>" placeholder="Enter Other Name" tabindex="1">
					<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
				</div>

				<div class="form-group">
				<label for="firstname">phone number</label><input type="phone" name="phone" id="phone" class="form-control input-lg" value="<?php if($error) echo $phone; ?>" placeholder="Enter  your phone number" tabindex="1" onkeyup="note()">
					<span class="text-danger"><?php if (isset($phone_error)) echo $phone_error; ?></span>
				

				<label for="secondname">Email:</label><input type="email" name="email" id="email" class="form-control input-lg" value="<?php if($error) echo $email; ?>" placeholder="Enter email" tabindex="1">
					<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>					
				</div>

				<div class="form-group">
				 <div class="input-icon">
					<i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" placeholder="Activation key" value="" autocomplete="off" name="capcha" id="capcha" type="capcha" />
                 </div>

                 <label for="secondname">District Name:</label><input type="text" name="district" id="district" class="form-control input-lg" value="<?php if($error) echo $district; ?>" placeholder="Enter District name" tabindex="1">
				<span class="text-danger"><?php if (isset($dname_error)) echo $dname_error; ?></span>
				</div>

                 <div class="form-group">
				<label for="address">District Address:</label>
				<input type="text" name="address" id="address" class="form-control input-lg" value="<?php if($error) echo $address; ?>" placeholder="Enter District Address" tabindex="1" >
				<span class="text-danger"><?php if (isset($address_error)) echo $address_error; ?></span>
				

                 <label for="firstname">Nearest Bus Stop:</label>
				<input type="text" name="nadd" id="nadd" class="form-control input-lg" value="<?php if($error) echo $nadd; ?>" placeholder="Enter  nearest address number" tabindex="1" onkeyup="note()">
					<span class="text-danger"><?php if (isset($nadd_error)) echo $nadd_error; ?></span>
                </div>

                <div class="form-group">
				<label for="address">Group pastor:</label>
				<input type="text" name="gpastor" id="gpastor" class="form-control input-lg" value="<?php if($error) echo $gpastor; ?>" placeholder="Enter Group pastor name" tabindex="1" >
				<span class="text-danger"><?php if (isset($gpastor_error)) echo $gpastor_error; ?></span>
				

                 <label for="firstname">group pastor phone number:</label>
				<input type="phone" name="gphone" id="gphone" class="form-control input-lg" value="<?php if($error) echo $gphone; ?>" placeholder="Enter  nearest address number" tabindex="1" onkeyup="note()">
					<span class="text-danger"><?php if (isset($gphone_error)) echo $gphone_error; ?></span>
				<label for="firstname">group pastor email:</label>
				<input type="email" name="gemail" id="gemail" class="form-control input-lg" value="<?php if($error) echo $gemail; ?>" placeholder="Enter  nearest address number" tabindex="1" onkeyup="note()">
					<span class="text-danger"><?php if (isset($gemail_error)) echo $gemail_error; ?></span>
                </div>
                <div class="form-group">
                	<label for="Password">Password:</label>
                	<input type="password" name="password" id="password" class="form-control input-lg" value="<?php if($error) echo $password; ?>" placeholder="your password" tabindex="1" onkeyup="note()">
					<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
					<label for="Password">Conferm Password:</label>
					<input type="password" name="Cpassword" id="Cpassword" class="form-control input-lg" value="<?php if($error) echo $Cpassword; ?>" placeholder="Conferm password" tabindex="1" onkeyup="note()">
					<span class="text-danger"><?php if (isset($Cpassword_error)) echo $Cpassword_error; ?></span>
                	
                </div>
                
					<div class="form-group">
						<input class=" btn btn-primary pull-right" type="button" name="login" value="submit">
					</div>
			</form>	
	</div>
	</div>
</div>	
</div>
<div class="clearfix" style="height: 30cm;"></div>


<div class="navbar  navbar-fixed-bottom">
<div class="copy-right">
	<div class="container">
		 <div class="copy-rights-main wow zoomIn" data-wow-delay="0.3s">
    	    <p style="text-align: center;">&copy; 2017 All Rights Reserved</p>
    	 </div>
    </div>
</div>
</div>
</body>
</html>