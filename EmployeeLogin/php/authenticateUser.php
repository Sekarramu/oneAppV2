<<<<<<< HEAD
<?php
session_start(); 
include "../../php/connection/connect.php"; 
$_SESSION['status'] = '';
$_SESSION['name'] = '';


$username = $_POST['Username'];
$pwd = $_POST['Password'];

$usernameExistsQuery = "select * from admin where username='$username'";

$result = mysqli_query($conn, $usernameExistsQuery);
$rowcount = mysqli_num_rows($result);
if ($rowcount == FALSE) {

    $message = "You are not an valid user..!!";
	$_SESSION['status'] = $message;
	header("Location:http://10.85.166.100/SyscoSUS/admin/login.php");
} else {

    $credentialsCheckQuery = "select Name,username,password from admin where username='$username'";
    $result = mysqli_query($conn, $credentialsCheckQuery);
    $dbpwd = mysqli_fetch_assoc($result);

    if ($dbpwd["password"] == $pwd) {
		$_SESSION['status'] = 'OK';
		$_SESSION['name'] = $dbpwd["Name"];
		header("Location:http://10.85.166.100/SyscoSUS/admin/index.php");
	} else {

        $message = "Password you entered is wrong..!";
        $_SESSION['status'] = $message;
		header("Location:http://10.85.166.100/SyscoSUS/admin/login.php");
    }
}


=======
<?php
session_start(); 
include "../../php/connection/connect.php"; 
$_SESSION['status'] = '';
$_SESSION['name'] = '';


$username = $_POST['Username'];
$pwd = $_POST['Password'];

$usernameExistsQuery = "select * from admin where username='$username'";

$result = mysqli_query($conn, $usernameExistsQuery);
$rowcount = mysqli_num_rows($result);
if ($rowcount == FALSE) {

    $message = "You are not an valid user..!!";
	$_SESSION['status'] = $message;
	header("Location:http://10.85.166.100/SyscoSUS/admin/login.php");
} else {

    $credentialsCheckQuery = "select Name,username,password from admin where username='$username'";
    $result = mysqli_query($conn, $credentialsCheckQuery);
    $dbpwd = mysqli_fetch_assoc($result);

    if ($dbpwd["password"] == $pwd) {
		$_SESSION['status'] = 'OK';
		$_SESSION['name'] = $dbpwd["Name"];
		header("Location:http://10.85.166.100/SyscoSUS/admin/index.php");
	} else {

        $message = "Password you entered is wrong..!";
        $_SESSION['status'] = $message;
		header("Location:http://10.85.166.100/SyscoSUS/admin/login.php");
    }
}


>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
?>