<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 
$qid = NULL;
$question = $_POST['question'];
$squestion = $_POST['squestion'];
$opt1 = $_POST['opt1'];
$opt2 = $_POST['opt2'];
$opt3 = $_POST['opt3'];
$opt4 = $_POST['opt4'];
$answer = $_POST['answer'];
$itype = $_POST['inputtype'];

	$getQuestionIdQuery = "select max(id) as id from surveyquestion";
	$getQuestionIdQueryresult = mysqli_query($conn, $getQuestionIdQuery);
	
	if($getQuestionIdQueryresult)
	{
	$qidRow = mysqli_fetch_assoc($getQuestionIdQueryresult);
	$qid = $qidRow['id'];
	$qid = $qid + 1;
	$insertQuestionQuery = "insert into surveyquestion (id,question,subquestion,option1,option2,option3,option4,inputtype,answer)
							values($qid,'$question','$squestion','$opt1','$opt2','$opt3','$opt4','$itype','$answer');";
    $insertQuestionQueryresult = mysqli_query($conn, $insertQuestionQuery);
    if($insertQuestionQueryresult)
	{
		$_SESSION['update'] = 'Inserted Successfully';
		header("Location:http://10.87.166.79/SyscoSUS/admin/pages/question.php");
	}
	else
	{
		$_SESSION['update'] = 'Error Occured';
		header("Location:http://10.87.166.79/SyscoSUS/admin/pages/question.php");
	}

	
	}
	
?>