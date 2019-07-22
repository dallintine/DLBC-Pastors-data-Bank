<?php
function profile($value)
{
	$email = $_SESSION['email'];
	$result = getAll('*', 'buyeco', "email='$email'");
	while ($row = mysqli_fetch_array($result)) 
	{
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$phone = $row['phone'];
		$pm_unit = $row['pm_unit'];
		$total = $row['total'];
		//$total = $row['bitAdd'];
		$accountname = $row['accountname'];
		$accountnumber = $row['accountnumber'];
		$Method = $row['Method'];
		$type= $row['type'];
		$Ref_no= $row['Ref_no'];
	}

	return $$value;
}

function profile1($value)
{
	$email = $_SESSION['email'];
	$result = getAll('*', 'buyeco', "email='$email'");
	while ($row = mysqli_fetch_array($result)) 
	{
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$phone = $row['phone'];
		$pm_unit = $row['pm_unit'];
		$total = $row['total'];
		$bitAdd = $row['bitAdd'];
		// $accountname = $row['accountname'];
		// $accountnumber = $row['accountnumber'];
		$Method = $row['Method'];
		$type= $row['type'];
		$ref_no= $row['Ref_no'];
	}

	return $$value;
}

function profile2($value)
{
	//$email = $_SESSION['email'];
	$result = getAll('*', 'users');
	while ($row = mysqli_fetch_array($result)) 
	{
		$id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$phone = $row['phone'];
		$date_registered = $row['date_registered'];
		// $total = $row['total'];
		// $bitAdd = $row['bitAdd'];
		// // $accountname = $row['accountname'];
		// $accountnumber = $row['accountnumber'];
		// $Method = $row['Method'];
		// $type= $row['type'];
	}

	return $$value;
}