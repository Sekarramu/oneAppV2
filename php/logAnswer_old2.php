<?php
session_start();
unset($_SESSION['endUserData']['endOfTimer']);
include "connection/connect.php";

$email    = $_SESSION['endUserData']['user'];
$question = $_POST['qid'];
$answer   = $_POST[$question];
$time =  $_COOKIE['timer'] - $_POST['submittedAt'];
$_SESSION['endUserData']['timeToSubmit'] = $_SESSION['endUserData']['timeToSubmit'] + $time;
$totalQuestionCount = count(unserialize($_COOKIE['quesArray']));
    
    if (!isset($_SESSION['endUserData']['answerArray'])) {
		$answerArr = array($email);
        //setcookie("answerArray", serialize($answerArr), time() + (86400 * 30), "/"); 
		$_SESSION['endUserData']['answerArray'] = $answerArr;
    }
	$answerArr = $_SESSION['endUserData']['answerArray'];
    array_push($answerArr, $question, $answer);
	//setcookie("answerArray", serialize($answerArr), time() + (86400 * 30), "/"); 
    $_SESSION['endUserData']['answerArray'] = $answerArr;
    if (($question == $totalQuestionCount) && (count($answerArr) == (($question)*2)+1 ) && (count($answerArr) == (($totalQuestionCount)*2) + 1)) {
        
        $finalValue = $totalQuestionCount * 2;
        for ($i = 0; $i < $finalValue + 1; $i++) {
            if ($i == 0) {
                $email = $answerArr[$i];
            } elseif ($i % 2 != 0) {
                $questionNo = $answerArr[$i];
            } elseif ($i % 2 == 0) {
                $answer = $answerArr[$i];
            }
            if ($i != 0 && $i % 2 == 0) {
                $insertSurveyDataQuery       = "INSERT into surveydata(email,questionno,answer) values('$email','$questionNo','$answer')";
                $insertSurveyDataQueryResult = mysqli_query($conn, $insertSurveyDataQuery);
            }
			
        }
        
        				
					
            $insertUserinfoQuery       = "insert into userinfo(email,status,score,TimeToSubmit) values('$email','Y','$correctAnswerCount','$timeToSubmit')";
            $insertUserinfoQueryResult = mysqli_query($conn, $insertUserinfoQuery);
				
			setcookie("submittedOrNot", "Y", time() + 36000, "/");
			 if ($insertUserinfoQueryResult) {
			header("Location:http:/SyscoSUS/pages/successPage.php");
           }else
		   {
		      $deleteSurveyDataQuery       = "delete from surveydata where email = '$email'";
              $deleteSurveyDataQueryResult = mysqli_query($conn, $deleteSurveyDataQuery);
			  setcookie("submittedOrNot", "N", time() + 36000, "/");
			
		   }
			
        }
		else
		{
			setcookie("submittedOrNot", "N", time() + 36000, "/");
			header("Location:http:/SyscoSUS/pages/errorPage.php");
		}
       
    }
    
	if($question >= $totalQuestionCount)
	{
		 header("Location:http:/SyscoSUS/pages/successPage.php");
	}
	else
	{
	$question = $question + 1;
    setcookie("questionid", $question, time() + 300, "/");
	header("Location:http:/SyscoSUS/index.php");
	}
	mysqli_close($conn);
?>