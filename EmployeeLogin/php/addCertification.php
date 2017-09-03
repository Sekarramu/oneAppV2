<<<<<<< HEAD
<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 
$qid = NULL;
$name = $_POST['name'];
$applied = $_POST['applied'];
$booked = $_POST['booked'];
$status = $_POST['status'];
$email = $_SESSION['loginID'];

if($name <> NULL)
{
	$getCertiIdQuery = "select max(id) as id from certification";
	$getCertiIdQueryresult = mysqli_query($conn, $getCertiIdQuery);
	
	if($getCertiIdQueryresult)
	{
	$qidRow = mysqli_fetch_assoc($getCertiIdQueryresult);
	$qid = $qidRow['id'];
	$qid = $qid + 1;
	$insertCertiQuery = "insert into certification (id,name,applied,booked,status,email)
							values($qid,'$name','$applied','$booked','$status','$email');";
    $insertCertiQueryresult = mysqli_query($conn, $insertCertiQuery);
    if($insertCertiQueryresult)
	{
		$_SESSION['update'] = 'Inserted Successfully';
		header("Location:http://localhost/employeeSUS/employeelogin/pages/status.php");
	}
	else
	{
		$_SESSION['update'] = 'Error Occured';
		header("Location:http://localhost/employeeSUS/employeelogin/pages/status.php");
	}

	
	}
}
else{
	$_SESSION['update'] = 'Enter Certification Name';
		header("Location:http://localhost/employeeSUS/employeelogin/pages/status.php");
	}
=======
<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 
$qid = NULL;
$name = $_POST['name'];
$applied = $_POST['applied'];
$booked = $_POST['booked'];
$status = $_POST['status'];
$email = $_SESSION['loginID'];

if($name <> NULL)
{
	$getCertiIdQuery = "select max(id) as id from certification";
	$getCertiIdQueryresult = mysqli_query($conn, $getCertiIdQuery);
	
	if($getCertiIdQueryresult)
	{
	$qidRow = mysqli_fetch_assoc($getCertiIdQueryresult);
	$qid = $qidRow['id'];
	$qid = $qid + 1;
	$insertCertiQuery = "insert into certification (id,name,applied,booked,status,email)
							values($qid,'$name','$applied','$booked','$status','$email');";
    $insertCertiQueryresult = mysqli_query($conn, $insertCertiQuery);
    if($insertCertiQueryresult)
	{
		$_SESSION['update'] = 'Inserted Successfully';
		header("Location:http://localhost/employeeSUS/employeelogin/pages/status.php");
	}
	else
	{
		$_SESSION['update'] = 'Error Occured';
		header("Location:http://localhost/employeeSUS/employeelogin/pages/status.php");
	}

	
	}
}
else{
	$_SESSION['update'] = 'Enter Certification Name';
		header("Location:http://localhost/employeeSUS/employeelogin/pages/status.php");
	}
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
?>