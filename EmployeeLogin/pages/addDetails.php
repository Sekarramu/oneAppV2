<<<<<<< HEAD
<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 
$qid = NULL;
$status = "Y";
$name = $_POST['name'];
$team = $_POST['team'];
$reportingto = $_POST['reportingto'];
$manager = $_POST['manager'];
$email = $_SESSION['loginID'];
$mobileno = $_POST['mobileno'];
$birthday = $_POST['birthday'];
$modeoftransport = $_POST['modeoftransport'];
$address = $_POST['address'];

	$getQuestionIdQuery = "select max(id) as id from employee";
	$getQuestionIdQueryresult = mysqli_query($conn, $getQuestionIdQuery);
	
	if($getQuestionIdQueryresult)
	{
	$qidRow = mysqli_fetch_assoc($getQuestionIdQueryresult);
	$qid = $qidRow['id'];
	$qid = $qid + 1;
	$insertQuestionQuery = "insert into employee (id,name,team,reportingto,manager,email,mobileno,birthday,modeoftransport,address)
							values($qid,'$name','$team','$reportingto','$manager','$email','$mobileno','$birthday','$modeoftransport','$address');";
    $insertQuestionQueryresult = mysqli_query($conn, $insertQuestionQuery);
	$updateEmployeeQuery = "update employeeinfo set status = 'Y'													    
							where username = $email;";
    $updateEmployeeQueryresult = mysqli_query($conn, $updateEmployeeQuery);
    if($insertQuestionQueryresult)
	{
		if($updateEmployeeQueryresult){
		$_SESSION['update'] = 'Inserted Successfully';
		header("Location:http://10.87.166.79/employeeSUS/employeelogin/pages/employeeHome.php");
		}
		else{
			$_SESSION['update'] = 'Error Occured';
		header("Location:http://10.87.166.79/employeeSUS/employeelogin/pages/employeeAdd.php");
		}
	}
	else
	{
		$_SESSION['update'] = 'Error Occured';
		header("Location:http://10.87.166.79/employeeSUS/employeelogin/pages/employeeAdd.php");
	}

	
	}
	
=======
<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 
$qid = NULL;
$status = "Y";
$name = $_POST['name'];
$team = $_POST['team'];
$reportingto = $_POST['reportingto'];
$manager = $_POST['manager'];
$email = $_SESSION['loginID'];
$mobileno = $_POST['mobileno'];
$birthday = $_POST['birthday'];
$modeoftransport = $_POST['modeoftransport'];
$address = $_POST['address'];

	$getQuestionIdQuery = "select max(id) as id from employee";
	$getQuestionIdQueryresult = mysqli_query($conn, $getQuestionIdQuery);
	
	if($getQuestionIdQueryresult)
	{
	$qidRow = mysqli_fetch_assoc($getQuestionIdQueryresult);
	$qid = $qidRow['id'];
	$qid = $qid + 1;
	$insertQuestionQuery = "insert into employee (id,name,team,reportingto,manager,email,mobileno,birthday,modeoftransport,address)
							values($qid,'$name','$team','$reportingto','$manager','$email','$mobileno','$birthday','$modeoftransport','$address');";
    $insertQuestionQueryresult = mysqli_query($conn, $insertQuestionQuery);
	$updateEmployeeQuery = "update employeeinfo set status = 'Y'													    
							where username = $email;";
    $updateEmployeeQueryresult = mysqli_query($conn, $updateEmployeeQuery);
    if($insertQuestionQueryresult)
	{
		if($updateEmployeeQueryresult){
		$_SESSION['update'] = 'Inserted Successfully';
		header("Location:http://10.87.166.79/employeeSUS/employeelogin/pages/employeeHome.php");
		}
		else{
			$_SESSION['update'] = 'Error Occured';
		header("Location:http://10.87.166.79/employeeSUS/employeelogin/pages/employeeAdd.php");
		}
	}
	else
	{
		$_SESSION['update'] = 'Error Occured';
		header("Location:http://10.87.166.79/employeeSUS/employeelogin/pages/employeeAdd.php");
	}

	
	}
	
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
?>