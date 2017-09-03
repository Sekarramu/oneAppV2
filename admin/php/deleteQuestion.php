<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 

$qid = $_GET['qid'];

	$deleteQuestionQuery = "delete from employee where id=$qid";
    $deleteQuestionQueryresult = mysqli_query($conn, $deleteQuestionQuery);
    if($deleteQuestionQueryresult)
	{
		$_SESSION['update'] = 'Deleted Successfully';
		header("Location:http://10.85.166.100/EmployeeSUS/admin/pages/question.php");
	}
	else
	{
		$_SESSION['update'] = 'Error Occured';
		header("Location:http://10.85.166.100/EmployeeSUS/admin/pages/question.php");
	}

?>