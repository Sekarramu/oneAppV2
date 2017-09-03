<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 


$timer = $_POST['timer'];


//echo $timer;
		$myfile = fopen("../../timer.txt", "w") or die("Unable to open file!");
		fwrite('../../timer.txt', 50);
		fclose($myfile);
		
		$_SESSION['update'] = 'Updated Successfully';
		header("Location:http://10.85.166.100/SyscoSUS/admin/pages/timer.php");
	 
?>