<<<<<<< HEAD
<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 
$qid = $_POST['employeeid'];
$name = $_POST['name'];
$username = $_POST['emailId'];
$password = $_POST['newpassword'];

//echo $question;

 	$updateEmployeeQuery = "update employeeinfo set Name = '$name' , username ='$username' , password = '$password'
				            where id = $qid;";
    $updateEmployeeQueryresult = mysqli_query($conn, $updateEmployeeQuery);
    if($updateEmployeeQueryresult)
	{
		$_SESSION['update'] = 'Updated Successfully';
		header("Location:http://localhost/employeeSUS/employeelogin/pages/changePassword.php");
	}
	else
	{
		$_SESSION['update'] = 'Error Occured';
		header("Location:http://localhost/employeeSUS/employeelogin/pages/changePassword.php");
	}


	 
=======
<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 
$qid = $_POST['employeeid'];
$name = $_POST['name'];
$username = $_POST['emailId'];
$password = $_POST['newpassword'];

//echo $question;

 	$updateEmployeeQuery = "update employeeinfo set Name = '$name' , username ='$username' , password = '$password'
				            where id = $qid;";
    $updateEmployeeQueryresult = mysqli_query($conn, $updateEmployeeQuery);
    if($updateEmployeeQueryresult)
	{
		$_SESSION['update'] = 'Updated Successfully';
		header("Location:http://localhost/employeeSUS/employeelogin/pages/changePassword.php");
	}
	else
	{
		$_SESSION['update'] = 'Error Occured';
		header("Location:http://localhost/employeeSUS/employeelogin/pages/changePassword.php");
	}


	 
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
?>