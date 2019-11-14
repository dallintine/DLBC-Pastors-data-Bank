<?php
require_once 'helper/autoload.php';

$error = false;

	@$dpstorname=sanitize($_POST['dpstorname']);
	@$dpstoroname=sanitize($_POST['dpstoroname']);
	@$phone=sanitize($_POST['phone']);
	@$email=sanitize($_POST['email']);
	@$verifkey=sanitize($_POST['verifkey']);
	@$district=sanitize($_POST['district']);
	@$addofdistrict=sanitize($_POST['addofdistrict']);
	@$nbustop=sanitize($_POST['nbustop']);
	@$gpastor=sanitize($_POST['gpastor']);
	@$gphone=sanitize($_POST['gphone']);
	@$gemail=sanitize($_POST['gemail']);
	@$password=sanitize($_POST['password']);
	@$Cpassword=sanitize($_POST['Cpassword']);

if (isset($_POST['submit'])) {

    $verifkey=sanitize($_POST['verifkey']);
    $email=sanitize($_POST['email']);
    
	$count=getCount('locations', "verifkey='$verifkey'");
	$count1=getCount('locations', "email='$email'");
	$count2=getCount('locations',"email='$email' AND status='1' AND verifkey='$verifkey'");
	

	if ($count1===1) 
	{
		$error=true;
		$errormsg="this user is Allready updated click <a href='index'>here</a> to login to your Account";
	}
	elseif (empty($email)) {
		$error=true;
		$email_error='the email field is empty please supply your current email address';
	}
	elseif(filter_var($email,FILTER_VALIDATE_EMAIL) == false)
	{
		$error = true;
		$email_error = "Please Enter Valid Email Address";
	}
	elseif ($count2===1) {
		$error=true;
		$errormsg="this user is Allready in database and updated click <a href='index'>here</a> to login to your Account";
	}
	elseif ($count==1) {
	
		$_SESSION['verifkey'] = $verifkey;
		header('location: update');
		exit();

	}
	else{
		$error=true;
		$errormsg="the verification key does not exit Please contact the admin for a verification key.";
	}

	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>regform</title>
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
			<a href="index" type="button" class="pull-right btn-defualt">Home</a>
</div>
<div class="clearfix" style="height: 1cm;"></div>
<div class="fix-sheader">
	<div class="gridecontainer">
	<div class="row-contenta relative gridbox">
	<div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-2 col-md-offset-4" id="login">
	<span class="text-success">
	<?php if (isset($successmsg)) { echo $successmsg; } ?></span>
	<span class="text-danger">
	<?php if (isset($errormsg)) { echo $errormsg; } ?></span>
	<div class="">
	<form name="verific-key" id="verifickey" class="form-group" method="post" action="regform.php" style="display: block;">
			<h3 class="form-title " style="text-align: center; color:#0000FF; ">Please enter your verification key that you recieve from the Admin and your email address</h3>

                <div class="form-group">
				 <div class="input-icon">
					<i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" placeholder="Activation key" autocomplete="off" name="verifkey" id="verifkey" type="verifkey">
                    <span class="text-danger"><?php if (isset($capcha_error)) echo $capcha_error; ?></span>

                 </div>
                </div>
                <div class="form-group">
				 <div class="input-icon">
					<i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" placeholder="your email address" autocomplete="off" name="email" id="email" type="email">
                    <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>

                 </div>
                </div>
                
					<div class="form-group">
						<input class=" btn btn-primary pull-right" type="submit" id="Details2" onclick="showDiv();" name="submit" value="Proceed">
					</div>
			</form>	
		</div>
	</div>
	</div>
</div>	
</div>
<div class="clearfix" style="height: 1cm;"></div>

<script type='text/javascript'>
    /*function showDiv()
    {
        if (document.getElementById('verifickey').style.display == 'block') {
            document.getElementById('verifickey').style.display = 'none';
            document.getElementById('Details1').style.display = 'block';
        }

        // if (document.getElementById('Details1').style.display==='none') {
        // 	document.getElementById('Details1').style.display='block';
        // }
        
     
    }*/
 </script>
 

<div class="row-content1 relative gridbox">
	<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" id="Details1" style="display:none;">
	
    <form name="Details-form" id="Detailsform" class="form-group" method="post" action=" regform.php" >
    
	<h3 class="form-title " style="text-align: center; color:#0000FF;">Your Account Details</h3>

				<div class="form-group">
						<label class="hidden" for="firstname">Surname:</label><input type="text" name="dpstorname" id="name" class="form-control input-lg" readonly value="<?php echo $dpstorname;?>" placeholder="Enter First Name" tabindex="1"><br>
					

					<label class="hidden" for="secondname">Other Names:</label><input type="text" name="dpstoroname" id="dpstoroname" class="form-control input-lg" readonly value="<?php echo $dpstoroname;?>" placeholder="Enter Other Name" tabindex="1">
					<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
				</div>

				<div class="form-group">
				<label class="hidden" for="firstname">phone number</label><input type="tell" name="phone" id="phone" class="form-control input-lg" readonly value="<?php echo $phone;?>" placeholder="Enter  your phone number" tabindex="1" onkeyup="note()"><br>
					<span class="text-danger"><?php if (isset($phone_error)) echo $phone_error; ?></span>
				

				<label class="hidden" for="secondname">Email:</label><input type="email" name="email" id="email" class="form-control input-lg" value="<?php if($error) echo $email; ?>" placeholder="Enter email" tabindex="1">
					<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>					
				</div>

				<div class="form-group">
				 <div class="input-icon">
					<i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" readonly value="<?php echo $verifkey;?>" placeholder="Activation key" autocomplete="off" name="verifkey" id="verifkey" type="hidden" / >
                 </div>

                 <label class="hidden" for="secondname">District Name:</label><input type="text" name="district" id="district" class="form-control input-lg" readonly value="<?php echo $district;?>" placeholder="Enter District name" tabindex="1">
				<span class="text-danger"><?php if (isset($dname_error)) echo $dname_error; ?></span>
				</div>

                 <div class="form-group">
				<label class="hidden" for="address">District Address:</label>
				<input type="text" name="addofdistrict" id="addofdistrict" class="form-control input-lg" readonly value="<?php echo $addofdistrict;?>" placeholder="Enter District Address" tabindex="1" ><br>
				<span class="text-danger"><?php if (isset($address_error)) echo $address_error; ?></span>

                 <label class="hidden" for="firstname">Nearest Bus Stop:</label>
				<input type="text" name="nbustop" id="nbustop" class="form-control input-lg" readonly value="<?php echo $nbustop;?>" placeholder="Enter  nearest bus Stop" tabindex="1" onkeyup="note()">
					<span class="text-danger"><?php if (isset($nadd_error)) echo $nadd_error; ?></span>
                </div>

                <div class="form-group">
				<label class="hidden" for="address">Group pastor:</label>
				<input type="text" name="gpastor" id="gpastor" class="form-control input-lg" readonly value="<?php echo $gpastor;?>" placeholder="Enter Group pastor name" tabindex="1" >
				<span class="text-danger"><?php if (isset($gpastor_error)) echo $gpastor_error; ?></span>
				

                 <label class="hidden" for="firstname">group pastor phone number:</label><br>
				<input type="phone" name="gphone" id="gphone" class="form-control input-lg" readonly value="<?php echo $gphone;?>" placeholder="group pastor mobile" tabindex="1" onkeyup="note()"><br>
					<span class="text-danger"><?php if (isset($gphone_error)) echo $gphone_error; ?></span>

				<label class="hidden" for="firstname">group pastor email:</label>
				<input type="email" name="gemail" id="gemail" class="form-control input-lg" readonly value="<?php echo $gemail;?>" placeholder="Group Pastor Email Address" tabindex="1" onkeyup="note()">
					<span class="text-danger"><?php if (isset($gemail_error)) echo $gemail_error; ?></span>
				</div>
				<div  class="form-group">
					<label class="hidden" for="secondname">Password:</label><input type="password" name="password" id="password" class="form-control input-lg" value="<?php if($error) echo $password; ?>" placeholder="Password" tabindex="1">
					<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>

					</div>
					<div class="form-group">
					<label class="hidden" for="secondname">Confirm Password:</label><input type="password" name="password" id="Cpassword" class="form-control input-lg" value="<?php if($error) echo $Cpassword; ?>" placeholder="Confirm Password" tabindex="1">
					<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>		
                </div>
                
					<div class="form-group">
						<input class=" btn btn-primary pull-right" type="submit" name="login" value="update">
					</div>

					<!-- <button type="button" onclick="shows_form_part(1)">&laquo;</button>
      				<button type="button" onclick="shows_form_part(3)">&raquo;</button> -->
			</form>	
	</div>
	</div>
</div>	
</div>
<div class="clearfix" style="height: 1cm;"></div>


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
<!-- <script type='text/javascript'>
    function showDiv() {
        if (document.getElementById('Details1').style.display == 'none') {
            document.getElementById('Details1').style.display = 'block';
        } 
    }
    </script> -->

 <!-- <script type='text/javascript'>
    function showDiv() {
        var x= document.getElementById('Details1');
        if (x.style.display==='none') {
        	x.style.display='block';
        }else{
        	x.style.display='block';
        }
    }
    </script> -->
</html>