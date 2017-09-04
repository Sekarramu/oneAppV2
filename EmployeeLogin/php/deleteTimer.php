<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 
		$myfile = fopen("../../timer.txt", "w") or die("Unable to open file!");
		fwrite('../../timer.txt', 0);
		fclose($myfile);
		
		$_SESSION['update'] = 'Deleted Successfully';
	
?>