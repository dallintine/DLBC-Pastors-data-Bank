<?php
require_once 'helper/autoload.php';
require_once 'helper/user.php';
// $_SESSION['email'];



$output = '';
$output1='';

$error=false;
	
if (isset($_POST['this()'])) {
	

	if ($action == 'ISOLO')
	{
		$sn = 0;
		$result = getAll('old_district, g_pstoname, phone, email', 'locations', "olddistrict_names='ISOLO'");
		foreach ($result as $key => $value)
		{
			
			$sn++;
			$old_district = sanitize($value['old_district']);
			$g_pstoname = sanitize($value['g_pstoname']);
			$phone = sanitize($value['phone']);
			$email = sanitize($value['email']);
			

			$output .= '
			<tr class="active">
				<td>'.$sn.'</td>
				<td>'.$old_district.'</td>
				<td>'.$g_pstoname.'</td>
				<td>'.$phone.'</td>
				<td>'.$email.'</td>
				
			</tr>
			';
		}
	}

// //if ($actionBtn=='p_ord') {
	
// }
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.0.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/styles.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/mystyl2.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--Google Fonts-->
	<link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
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
	<div class="container-fluid">
	<div class="row-dashboard relative gridbox">
	
		<div class="col-xs-12 col-sm-12 col-md-12 " id="dashboard1">
		<div class="rightup">
		<img class="col-md-1" src="img/bible1.jpg">
	    <h3 style="text-align: center; " class="col-md-10">DEEPER LIFE LOCATIONS ADDRESSES OF  GROUPS, OLD GROUPS IN LAGOS </h3><img class="col-md-1" src="img/bible1.jpg">	
		</div>
	</div>
	</div>
</div>	
</div>

<div class="clearfix" style="height: 1cm;"></div>

<div class="container-fluid">
		<span class="text-success">
			<?php if (isset($successmsg)) { echo $successmsg; } ?></span>
		<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>

<div class="row-dashboard2 relative gridbox">

			<div class="col-xs-12 col-sm-4 col-md-4  " id="GROUPS2">
			<h4>Old district location names in Lagos</h4>
			
			<form class="form-group" action="" method="POST">
			<select class="btn-default btn-md btn-search" name="group_name" value="<?php if($error) echo $group_name; ?>" required="required">
			<datalist class="left" id="list"  onchange="datal(this)">
			<option style="text-align: left;" value="AGEGE">AGEGE</option>
			<option value="AJEGUNLE">AJEGUNLE</option>
			<option value="ALIMOSHO">ALIMOSHO</option>
			<option value="FESTAC">FESTAC</option>
			<option value="GBAGADA">GBAGADA</option>
			<option value="IKEJA">IKEJA</option>
			<option type="submit" name="fetch" onclick="this();" value="ISOLO">ISOLO</option>
			<option value="KETU">KETU</option>
			<option value="LAGOS ISLAND">LAGOS ISLAND</option>
			<option value="MUSHIN">MUSHIN</option>
			<option value="ORILE">ORILE</option>
			<option value="OSHODI">OSHODI</option>
			<option value="SOMOLU">SOMOLU</option>
			<option value="SURULERE">SURULERE</option>
			<option value="YABA">YABA</option>
			<option value="EPE">EPE</option>
			<option value="IKORODU">IKORODU</option>
			<option value="YORUBA">YORUBA LANGUAGE</option>
			<option value="IGBO">IGBO</option>
			<option value="IFIK">IFIK</option>
			<option value="TWI/ESAN">TWI/ESAN GROUP </option>
			<option value="ISOKO/URHOBO">ISOKO/URHOBO GROUP</option>
			<option value="EWE">EWE GROUP</option>
			<option value="FRENCH/EGUN/IJAW">FRENCH/EGUN/IJAW GROUP</option>
			<option selected="selected" value="selected">Old district</option>
			</datalist>
			</select>
			</form>
			</div>

			<div class="col-xs-12 col-sm-4 col-md-4 " id="GROUPS3">
			<h4>Group Names in Lagos</h4>
			<select class="btn-default btn-md btn-search " name="group_name" value="<?php if($error) echo $group_name; ?>" required="required">
			<datalist id="list"  onchange="datal(this)">
			<option value="AGEGE">ABULE EGBA GROUP</option>
			<option value="AJEGUNLE">IJAYE/ISHERI GROUP</option>
			<option value="ALIMOSHO">MEIRAN GROUP</option>
			<option value="FESTAC">OGBA-IJU GROUP</option>
			<option value="GBAGADA">ORILE AGEGE GROUP</option>
			<option value="IKEJA">AJEROMI GROUP</option>
			<option value="ISOLO">AWODIORA GROUP</option>
			<option value="KETU">TOLU GROUP</option>
			<option value="LAGOS ISLAND">WILMER GROUP</option>
			<option value="MUSHIN">AKOWONJO GROUP</option>
			<option value="ORILE">ALIMOSHO GROUP</option>
			<option value="OSHODI">AYOBO GROUP</option>
			<option value="SOMOLU">DOPEMU GROUP</option>
			<option value="SURULERE">IPAJA GROUP</option>
			<option value="YABA">AGBOJU GROUP</option>
			<option value="EPE">FESTAC GROUP</option>
			<option value="IKORODU">IBA GROUP</option>
			<option value="YORUBA">OJO GROUP</option>
			<option value="IGBO">OKOKO GROUP</option>
			<option value="IFIK">SABO GROUP</option>
			<option value="TWI/ESAN">GBAGADA GROUP </option>
			<option value="ISOKO/URHOBO">OREMEJI GROUP</option>
			<option value="EWE">OWORO GROUP</option>
			<option value="FRENCH/EGUN/IJAW">IKEJA GROUP</option>
			<option selected="selected" value="selected">Old groups</option>
			</datalist>
			</select>
			</div>

			<div class="col-xs-12 col-sm-4 col-md-4 " id="GROUPS4">
			<h4>Group pastor details in Lagos</h4>
			<select class="btn-default btn-md btn-search " name="group_name" value="<?php if($error) echo $group_name; ?>" required="required">
			<datalist id="list"  onchange="datal(this)">
			<option value="AGEGE">AGEGE</option>
			<option value="AJEGUNLE">AJEGUNLE</option>
			<option value="ALIMOSHO">ALIMOSHO</option>
			<option value="FESTAC">FESTAC</option>
			<option value="GBAGADA">GBAGADA</option>
			<option value="IKEJA">IKEJA</option>
			<option value="ISOLO">ISOLO</option>
			<option value="KETU">KETU</option>
			<option value="LAGOS ISLAND">LAGOS ISLAND</option>
			<option value="MUSHIN">MUSHIN</option>
			<option value="ORILE">ORILE</option>
			<option value="OSHODI">OSHODI</option>
			<option value="SOMOLU">SOMOLU</option>
			<option value="SURULERE">SURULERE</option>
			<option value="YABA">YABA</option>
			<option value="EPE">EPE</option>
			<option value="IKORODU">IKORODU</option>
			<option value="YORUBA">YORUBA LANGUAGE</option>
			<option value="IGBO">IGBO</option>
			<option value="IFIK">IFIK</option>
			<option value="TWI/ESAN">TWI/ESAN GROUP </option>
			<option value="ISOKO/URHOBO">ISOKO/URHOBO GROUP</option>
			<option value="EWE">EWE GROUP</option>
			<option value="FRENCH/EGUN/IJAW">FRENCH/EGUN/IJAW GROUP</option>
			<option selected="selected" value="selected">Old district</option>
			</datalist>
			</select>
			</div>

 </div>
</div>
<div class="container-fluid">
		<div  class="table1">
		<div class="col-xs-12 col-md-12 col-sm-12">
	<div class="row">
		<div class="table-responsive" id="table2" style="display:;">
		<h4 class="col-md-8 col-md-offset-4"><font size=6; style="color:  #0000FF;"><span>Isolo</span> Old District </font></h4>
			<table class="table table-bordered"  >
				<thead class="btn-info">
					<tr style="color: #FF0000;">
						<th>S/N</th>
						<th>GROUP NAME</th>
						<th>Group Pastor Name</th>
						<th>phone numbers</th>
						<!-- <th>Disable</th> -->

					</tr>
				</thead>
				<tbody class="table-hover">
					<?php echo $output; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
	</div>
</div>
<div class="clearfix" style="height: 30px; clear: both;"></div>

<div class="container-fluid">
		<div  class="table1">
		<div class="col-xs-12 col-md-12 col-sm-12">
	<div class="row">
		<div class="table-responsive" id="table2" style="display:;">
		<h4 class="col-md-8 col-md-offset-4"><font size=6; style="color:  #0000FF;"><span>Isolo</span> Group </font></h4>
			<table class="table table-bordered"  >
				<thead class="btn-info">
					<tr style="color: #FF0000;">
						<th>S/N</th>
						<th>District name</th>
						<th>District address</th>
						<th>Nearest bus stop</th>
						<th>District pastor's Name</th>
						<th>District pastor's phone </th>
						
						<!-- <th>Disable</th> -->

					</tr>
				</thead>
				<tbody class="table-hover">
					<?php echo $output1; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
	</div>
</div>

<div class="clearfix" style="height: 30px;"></div>


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