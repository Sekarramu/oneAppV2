<?php
session_start(); 
include "../../php/connection/connect.php"; 
$_SESSION['status'] = '';
$_SESSION['name'] = '';


$username = $_POST['Username'];
$pwd = $_POST['Password'];

$usernameExistsQuery = "select * from employeeinfo where username='$username'";

$result = mysqli_query($conn, $usernameExistsQuery);
$rowcount = mysqli_num_rows($result);
if ($rowcount == FALSE) {

    $message = "You are not an valid user..!!";
	$_SESSION['status'] = $message;
	header("Location:http://localhost/EmployeeSUS/employeelogin/login.php");
} else {

    $credentialsCheckQuery = "select Name,username,password,status from employeeinfo where username='$username'";
    $result = mysqli_query($conn, $credentialsCheckQuery);
    $dbpwd = mysqli_fetch_assoc($result);

    if ($dbpwd["password"] == $pwd) {
		$_SESSION['status'] = 'OK';
		$_SESSION['password'] = $pwd;
		$_SESSION['username'] = $dbpwd["Name"];
		$_SESSION['loginID'] = $dbpwd["username"];
		/*if($dbpwd["status"] == 'N'){
			header("Location:http://localhost/EmployeeSUS/employeelogin/pages/employeeAdd.php");
		}*/
	#	elseif($dbpwd["status"]  == 'Y') { 
			header("Location:http://localhost/EmployeeSUS/employeelogin/pages/status.php");
       # }
		/*else{
			header("Location:http://localhost/EmployeeSUS/employeelogin/pages/employeeAdd.php");
		}*/
	}
	else{
		$message = "Password you entered is wrong..!";
        $_SESSION['status'] = $message;
		header("Location:http://localhost/EmployeeSUS/employeelogin/login.php");
    }
}



?>