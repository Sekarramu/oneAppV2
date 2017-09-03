<<<<<<< HEAD
<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 
$qid = $_POST['questionid'];
$question = $_POST['question'];
$squestion = $_POST['squestion'];
$opt1 = $_POST['opt1'];
$opt2 = $_POST['opt2'];
$opt3 = $_POST['opt3'];
$opt4 = $_POST['opt4'];
$answer = $_POST['answer'];
$itype = $_POST['updateInputtype'];

//echo $question;

 	$updateQuestionQuery = "update surveyquestion set question = '$question' , subquestion ='$squestion' , option1 = '$opt1'
													   , option2 = '$opt2' , option3 = '$opt3' , option4 = '$opt4' , inputtype = '$itype',answer = '$answer'
							where id = $qid;";
    $updateQuestionQueryresult = mysqli_query($conn, $updateQuestionQuery);
    if($updateQuestionQueryresult)
	{
		$_SESSION['update'] = 'Updated Successfully';
		header("Location:http://10.85.166.100/SyscoSUS/admin/pages/question.php");
	}
	else
	{
		$_SESSION['update'] = 'Error Occured';
		header("Location:http://10.85.166.100/SyscoSUS/admin/pages/question.php");
	}


	 
=======
<?php
session_start();
$_SESSION['update'] = 'Failed';
include "../../php/connection/connect.php"; 
$qid = $_POST['questionid'];
$question = $_POST['question'];
$squestion = $_POST['squestion'];
$opt1 = $_POST['opt1'];
$opt2 = $_POST['opt2'];
$opt3 = $_POST['opt3'];
$opt4 = $_POST['opt4'];
$answer = $_POST['answer'];
$itype = $_POST['updateInputtype'];

//echo $question;

 	$updateQuestionQuery = "update surveyquestion set question = '$question' , subquestion ='$squestion' , option1 = '$opt1'
													   , option2 = '$opt2' , option3 = '$opt3' , option4 = '$opt4' , inputtype = '$itype',answer = '$answer'
							where id = $qid;";
    $updateQuestionQueryresult = mysqli_query($conn, $updateQuestionQuery);
    if($updateQuestionQueryresult)
	{
		$_SESSION['update'] = 'Updated Successfully';
		header("Location:http://10.85.166.100/SyscoSUS/admin/pages/question.php");
	}
	else
	{
		$_SESSION['update'] = 'Error Occured';
		header("Location:http://10.85.166.100/SyscoSUS/admin/pages/question.php");
	}


	 
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
?>