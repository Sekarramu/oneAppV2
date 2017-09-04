<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 

$qid = $_GET['qid'];

	$deleteQuestionQuery = "delete from surveyquestion where id=$qid";
    $deleteQuestionQueryresult = mysqli_query($conn, $deleteQuestionQuery);
    if($deleteQuestionQueryresult)
	{
		$_SESSION['update'] = 'Deleted Successfully';
		header("Location:http://10.87.166.79/SyscoSUS/admin/pages/question.php");
	}
	else
	{
		$_SESSION['update'] = 'Error Occured';
		header("Location:http://10.87.166.79/SyscoSUS/admin/pages/question.php");
	}

?>