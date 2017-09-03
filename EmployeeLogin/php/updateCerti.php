<<<<<<< HEAD
<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 
$certiId = $_POST['id'];
$email = $_POST['email'];
$name = $_POST['name'];
$applied = $_POST['applied'];
$booked = $_POST['booked'];
$status = $_POST['status'];



 	$updateCertiQuery = "update certification set name = '$name' , applied ='$applied' , booked = '$booked'
													   , status = '$status' , email = '$email'
							where id = $certiId;";
    $updateCertiQueryresult = mysqli_query($conn, $updateCertiQuery);
    if($updateCertiQueryresult)
	{
		$_SESSION['update'] = 'Updated Successfully';
		header("Location:http://localhost/employeeSUS/employeelogin/pages/status.php");
	}
	else
	{
		$_SESSION['update'] = 'Error Occured';
		header("Location:http://localhost/employeeSUS/employeelogin/pages/status.php");
	}


	 
=======
<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 
$certiId = $_POST['id'];
$email = $_POST['email'];
$name = $_POST['name'];
$applied = $_POST['applied'];
$booked = $_POST['booked'];
$status = $_POST['status'];



 	$updateCertiQuery = "update certification set name = '$name' , applied ='$applied' , booked = '$booked'
													   , status = '$status' , email = '$email'
							where id = $certiId;";
    $updateCertiQueryresult = mysqli_query($conn, $updateCertiQuery);
    if($updateCertiQueryresult)
	{
		$_SESSION['update'] = 'Updated Successfully';
		header("Location:http://localhost/employeeSUS/employeelogin/pages/status.php");
	}
	else
	{
		$_SESSION['update'] = 'Error Occured';
		header("Location:http://localhost/employeeSUS/employeelogin/pages/status.php");
	}


	 
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
?>