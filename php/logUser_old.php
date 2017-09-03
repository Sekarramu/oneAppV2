<?php
session_start();
include "connection/connect.php";

	$userName = $_POST['email'];
	$fetchUsernameQuery       = "select status from userInfo where email='$userName'";
    $fetchUsernameQueryResult = mysqli_query($conn, $fetchUsernameQuery);
	while ($usernameRow = $fetchUsernameQueryResult->fetch_assoc()) {
        $status = $usernameRow['status'];
    }
   if($status == 'N'){
		setcookie("questionid", 1, time() + 300, "/"); 
		$_SESSION['endUserData'] = array('user' => $userName);
		header("Location://10.85.166.100/SyscoSUS/index.php");
   }
	elseif($status == 'Y'){
	$_SESSION['endUserData'] = array('user' => $userName);
	setcookie("submittedOrNot", "Y", time() + 36000, "/");
	
	header("Location://10.85.166.100/SyscoSUS/pages/successPage.php");
	}
	else{
		
			setcookie("questionid", 1, time() + 300, "/"); 
			$_SESSION['endUserData'] = array('user' => $userName);
			header("Location://10.85.166.100/SyscoSUS/index.php");
		
	}

mysqli_close($conn);
?>

