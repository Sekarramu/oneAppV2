<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 
$qid = NULL;
$name = $_POST['name'];
$team = $_POST['team'];
$reportingto = $_POST['reportingto'];
$manager = $_POST['manager'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$birthday = $_POST['birthday'];
$modeoftransport = $_POST['modeoftransport'];
$address = $_POST['address'];

	$getEmployeeIdQuery = "select max(id) as id from employee";
	$getEmployeeIdQueryresult = mysqli_query($conn, $getEmployeeIdQuery);
	
	if($getEmployeeIdQueryresult)
	{
	$qidRow = mysqli_fetch_assoc($getEmployeeIdQueryresult);
	$qid = $qidRow['id'];
	$qid = $qid + 1;
	$insertEmployeeQuery = "insert into employee (id,name,team,reportingto,manager,email,mobileno,birthday,modeoftransport,address)
							values($qid,'$name','$team','$reportingto','$manager','$email','$mobileno','$birthday','$modeoftransport','$address');";
    $insertEmployeeQueryresult = mysqli_query($conn, $insertEmployeeQuery);
    if($insertEmployeeQueryresult)
	{
		$_SESSION['update'] = 'Inserted Successfully';
		header("Location:http://localhost/employeeSUS/admin/pages/adminHome.php");
	}
	else
	{
		$_SESSION['update'] = 'Error Occured';
		header("Location:http://localhost/employeeSUS/admin/pages/adminHome.php");
	}

	
	}
	
?>