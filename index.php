<!DOCTYPE html>
	<?php include "php/connection/connect.php"; ?>
	<?php 
session_start();
  
if (!isset($_SESSION['endUserData']['user'])) {
    header("Location:http://10.85.166.100/SyscoSUS/signup.php");
} 
else
{	
	
$questionid = $_COOKIE['questionid'];

?>
	<?php 


if(isset($_COOKIE["timer"]))
{
$fetchTimeQueryValue = $_COOKIE["timer"];


if($fetchTimeQueryValue >0)
{
if (!isset($_SESSION['endUserData']['endOfTimer'])){ 
    $endOfTimer = time() + $fetchTimeQueryValue; 
    $_SESSION['endUserData']['endOfTimer'] = $endOfTimer; 
	
} 

if(($_SESSION['endUserData']['endOfTimer'] - time()) < 0) { 
      $timeTilEnd = 0; 
} 
else { 
      $timeTilEnd = $_SESSION['endUserData']['endOfTimer'] - time(); 
	 
} 
if($timeTilEnd <=0)
{

}
}
}


?> 

<html>
<head>
    <meta charset="utf-8" />
    <title>SUS Challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	
	<script src="js/jquery.countdown360.js" type="text/javascript" charset="utf-8"></script>

	
</head>
<body>


<div class="container">

<div class="page-header">
    <h1><span style="color:red;">SUS</span> Challenge<small> </small></h1>
	
</div>
	<div id="countdown" align="right"></div>
<!-- Quiz - START -->
<div class="container" id="cnt1">
    <div class="col-md-3">
    </div>

    <div class="col-md-6" id="panel1">
	<?php
//	print_r($_SESSION['endUserData']['answerArray'] );
		$totalQuestionCount;
		
		
		$quesArray = unserialize($_COOKIE['quesArray']);
		$totalQuestionCount = count($quesArray);
		

		$id = '';
		$Question = '';
		$SubQuestion = '';
		$Option1 = '';
		$Option2 = '';
		$Option3 = '';
		$Option4 = '';
		
		

		//echo "<script>alert('Max Question Count->".$totalQuestionCount."');</script>";
		if($questionid<$totalQuestionCount){

		if (count($quesArray) < $questionid ) {
			
			echo "Ended";
			
		}
		else{
		
			$quesString =  $quesArray[$questionid];
			$row = explode(":::",$quesString);
			$id = $row[0];
			$Question = $row[1];
			$Option1 = $row[3];
			$Option2 = $row[4];
			$Option3 = $row[5];
			$Option4 = $row[6];
			$SubQuestion = $row[2];
			$QuestionType = $row[7];
			if(($Option1 == '' OR $Option1 == NULL) || ($Option2 == '' OR $Option2 == NULL) && ($Option3 != '' OR $Option3 != NULL)){
			if(($Option1 == '' OR $Option1 == NULL) && ($Option3 != '' OR $Option3 != NULL))
			{
					$tmp = $Option1;
					$Option1 = $Option3;	
					$Option3 = $tmp;
			}
			elseif(($Option2 == '' OR $Option2 == NULL) && ($Option3 != '' OR $Option3 != NULL))
			{
					$tmp = $Option2;
					$Option2 = $Option3;	
					$Option3 = $tmp;
			}
			}
			elseif(($Option1 == '' OR $Option1 == NULL) || ($Option2 == '' OR $Option2 == NULL) && ($Option4 != '' OR $Option4 != NULL)){
			if(($Option2 == '' OR $Option2 == NULL) && ($Option4 != '' OR $Option4 != NULL))
			{
					$tmp1 = $Option2;
					$Option2 = $Option4;	
					$Option4 = $tmp1;
			}
			elseif(($Option1 == '' OR $Option1 == NULL) && ($Option4 != '' OR $Option4 != NULL))
			{
					$tmp1 = $Option1;
					$Option1 = $Option4;	
					$Option4 = $tmp1;
			}
			}
			//echo "<script>alert('Question Id->".$id."');</script>";
			//echo "<script>alert('Question ->".$Question."');</script>";
			
			if($QuestionType == 'text')
			{
			//Timer For Radio Button Only
			if(isset($_SESSION['endUserData']['endOfTimer']))
			{
			
			echo '<script type="text/javascript"> 
var TimeLeft = '.$timeTilEnd.';
	
CountFunc = setInterval(countdown,1000); 

function countdown() 
{ 
      if(TimeLeft > 0) { 
            TimeLeft -= 1; 
			document.getElementById("submittedAt").value = TimeLeft;
			
		} 
	if(TimeLeft <= 0) { 
			document.surveyForm.submit();
      }
	  
}
</script>';


echo '<script type="text/javascript" charset="utf-8">

		 	var countdown =  $("#countdown").countdown360({
       	 	radius      : 40,
         	seconds     : '.$timeTilEnd.',
         	fontColor   : "#FFFFFF",
         	autostart   : false,
         	
		   });
			countdown.start();
			
		 	
		  </script>';
	}		
			
			
			echo '
				<form method="POST" action="php/logAnswer.php" name="surveyForm">
				<input type="hidden" name="submittedAt" id="submittedAt" value="">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
				<input type="hidden" name="qid" value="'.$questionid.'" />
                    <span style="font-weight:bold;">'.$questionid.')&nbsp;'.$Question.'</span></h3>';
					
					if($SubQuestion != NULL || $SubQuestion != '')
					{
						echo '<hr/><h3 class="panel-title">&emsp;'.$SubQuestion.'</h3>';
					}
			
					echo'
            </div>
			
			
			
            <div class="panel-body two-col">
                <div class="row">
				';
				if($Option1 != null || $Option1 != '')
				{
				echo'
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <div class="checkbox">
                                <label>
                                    <input type="radio" name="'.$id.'" value="'.$Option1.'">
                                    '.$Option1.'
                                </label>
                            </div>
                        </div>
                    </div>';
					}
				if($Option2 != null || $Option2 != '')
				{
				echo'	
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <div class="checkbox">
                                <label>
                                    <input type="radio" name="'.$id.'" value="'.$Option2.'">
                                   '.$Option2.'
                                </label>
                            </div>
                        </div>
                    </div>';
				}
				echo '
                </div>
                <div class="row">
				';
				if($Option3 != null || $Option3 != '')
				{
				echo'
                    <div class="col-md-6">
                        <div class="well well-sm margin-bottom-none">
                            <div class="checkbox">
                                <label>
                                    <input type="radio" name="'.$id.'" value="'.$Option3.'">
                                    '.$Option3.'
                                </label>
                            </div>
                        </div>
                    </div>';
				}
				if($Option4 != null || $Option4 != '')
				{
				echo'
                    <div class="col-md-6">
                        <div class="well well-sm margin-bottom-none">
                            <div class="checkbox">
                                <label>
                                    <input type="radio" name="'.$id.'" value="'.$Option4.'">
                                    '.$Option4.'
                                </label>
                            </div>
                        </div>
                    </div>';
				}
				echo '	
                </div>
               

            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-sm btn-block" id="nextques" value="Next">
                            </input>
                    </div>
                </div>
            </div>
        </div>
		</form>
			';
		
		}
		
		else if($QuestionType == 'textarea')
		{
			echo '
				<form method="POST" action="php/logAnswer.php" name="surveyForm">
				
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
				<input type="hidden" name="qid" value="'.$questionid.'" />
                    <span style="font-weight:bold;">'.$questionid.')&nbsp;'.$Question.'</span></h3>';
					if($SubQuestion != NULL || $SubQuestion != '')
					{
						echo '<hr/><h3 class="panel-title">&emsp;'.$SubQuestion.'</h3>';
					}
			
					echo'
            </div>
            <div class="panel-body two-col">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="well well-sm margin-bottom-none">
                            <div class="checkbox">
                                <label>
                                   <textarea name='.$id.'  rows="6" cols="50" ></textarea>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
               

            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-sm btn-block" id="nextques" value="Next">
                            </input>
                    </div>
                </div>
            </div>
        </div>
		</form>
			';
			
		}
		
		}
		}
		else
		{
		if (count($quesArray) < $questionid ) {
			
			echo "Ended";
			
		}
		else{
		$quesString =  $quesArray[$questionid];
		$row = explode(":::",$quesString);
			
			$id = $row[0];
			$Question = $row[1];
			$Option1 = $row[3];
			$Option2 = $row[4];
			$Option3 = $row[5];
			$Option4 = $row[6];
			$SubQuestion = $row[2];
			$QuestionType = $row[7];

			
			if($QuestionType == 'text')
			{
			//Timer For Radio Button Only
			if(isset($_SESSION['endUserData']['endOfTimer']))
			{
			echo '<script type="text/javascript"> 
var TimeLeft = '.$timeTilEnd.';
	
CountFunc = setInterval(countdown,1000); 

function countdown() 
{ 
      if(TimeLeft > 0) { 
            TimeLeft -= 1; 
			document.getElementById("submittedAt").value = TimeLeft;
		} 
	if(TimeLeft <= 0) { 
			document.surveyForm.submit();
      }
	  
}
</script>';

echo '<script type="text/javascript" charset="utf-8">

		 	var countdown =  $("#countdown").countdown360({
       	 	radius      : 40,
         	seconds     : '.$timeTilEnd.',
         	fontColor   : "#FFFFFF",
         	autostart   : false,
         	
		   });
			countdown.start();
			
		 	
		  </script>';
			
	}		
			
			echo '
				<form method="POST" action="php/logAnswer.php" name="surveyForm">
				<input type="hidden" name="submittedAt" id="submittedAt" value="">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
				<input type="hidden" name="qid" value="'.$questionid.'" />
                    <span style="font-weight:bold;">'.$questionid.')&nbsp;'.$Question.'</span></h3>';
					
					if($SubQuestion != NULL || $SubQuestion != '')
					{
						echo '<hr/><h3 class="panel-title">&emsp;'.$SubQuestion.'</h3>';
					}
			
					echo'
            </div>
			<div class="panel-body two-col">
                <div class="row">
				';
				if($Option1 != null || $Option1 != '')
				{
				echo'
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <div class="checkbox">
                                <label>
                                    <input type="radio" name="'.$id.'" value="'.$Option1.'">
                                    '.$Option1.'
                                </label>
                            </div>
                        </div>
                    </div>';
					}
				if($Option2 != null || $Option2 != '')
				{
				echo'	
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <div class="checkbox">
                                <label>
                                    <input type="radio" name="'.$id.'" value="'.$Option2.'">
                                   '.$Option2.'
                                </label>
                            </div>
                        </div>
                    </div>';
				}
				echo '
                </div>
                <div class="row">
				';
				if($Option3 != null || $Option3 != '')
				{
				echo'
                    <div class="col-md-6">
                        <div class="well well-sm margin-bottom-none">
                            <div class="checkbox">
                                <label>
                                    <input type="radio" name="'.$id.'" value="'.$Option3.'">
                                    '.$Option3.'
                                </label>
                            </div>
                        </div>
                    </div>';
				}
				if($Option4 != null || $Option4 != '')
				{
				echo'
                    <div class="col-md-6">
                        <div class="well well-sm margin-bottom-none">
                            <div class="checkbox">
                                <label>
                                    <input type="radio" name="'.$id.'" value="'.$Option4.'">
                                    '.$Option4.'
                                </label>
                            </div>
                        </div>
                    </div>';
				}
				echo '	
                </div>
               

            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-sm btn-block" id="nextques" value="Submit Quiz">
                            </input>
                    </div>
                </div>
            </div>
        </div>
		</form>
			';
		
		}
	
		else if($QuestionType == 'textarea')
		{
	
			echo '
				<form method="POST" action="php/logAnswer.php" name="surveyForm">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
				<input type="hidden" name="qid" value="'.$questionid.'" />
                    <span style="font-weight:bold;">'.$questionid.')&nbsp;'.$Question.'</span></h3>';
					if($SubQuestion != NULL || $SubQuestion != '')
					{
						echo '<hr/><h3 class="panel-title">'.$SubQuestion.'</h3>';
					}
			
					echo'
            </div>
            <div class="panel-body two-col">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="well well-sm margin-bottom-none">
                            <div class="checkbox">
                                <label>
                                   <textarea name='.$id.'  rows="6" cols="50" ></textarea>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
               

            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-sm btn-block" id="nextques" value="Submit Quiz">
                            </input>
                    </div>
                </div>
            </div>
        </div>
		</form>
			';
			
		}
		
		}
		}

	?>
	
    </div>
</div>
<style>
#cnt1 {
    background-color: rgba(215, 212, 212, 0.88);
    margin-bottom: 20px;
}

#panel1 {
    padding:20px;
}

.panel-body:not(.two-col) {
    padding: 0px;
}

.panel-body .radio, .panel-body .checkbox {
    margin-top: 0px;
    margin-bottom: 0px;
}

.panel-body .list-group {
    margin-bottom: 0;
}

.margin-bottom-none {
    margin-bottom: 0;
}
</style>

<!-- Quiz - END -->

	<div class="pull-right" style="padding-top: -50px !important;" >
		<a style="text-decoration: none !important; cursor: pointer;" >SUS Terminology Challenge</a>
	</div>

</div>
</div>
<?php } mysqli_close($conn);?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</body>
</html>