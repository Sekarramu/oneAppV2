<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 
$qid = $_POST['employeeid'];
$name = $_POST['name'];
$team = $_POST['team'];
$reportingto = $_POST['reportingto'];
$manager = $_POST['manager'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$birthday = $_POST['birthday'];
$modeoftransport = $_POST['modeoftransport'];
$address = $_POST['address'];



 	$updateEmployeeQuery = "update employee set name = '$name' , team ='$team' , reportingto = '$reportingto'
													   , manager = '$manager' , email = '$email' , mobileno = '$mobileno' , birthday = '$birthday', modeoftransport = '$modeoftransport' , address = '$address'
							where id = $qid;";
    $updateEmployeeQueryresult = mysqli_query($conn, $updateEmployeeQuery);
    if($updateEmployeeQueryresult)
	{
		$_SESSION['update'] = 'Updated Successfully';
		header("Location:http://localhost/employeeSUS/employeelogin/pages/employeeHome.php");
	}
	else
	{
		$_SESSION['update'] = 'Error Occured';
		header("Location:http://localhost/employeeSUS/employeelogin/pages/employeeHome.php");
	}


	 
?>