<!DOCTYPE html>
	<?php include "php/connection/connect.php"; ?>
	<?php 
session_start(); 
$userName = $_SESSION['user'];
$fetchUsernameQuery       = "select email,status from userInfo where email = '$userName'";
$fetchUsernameQueryResult = mysqli_query($conn, $fetchUsernameQuery);
$rowcount           = mysqli_num_rows($fetchUsernameQueryResult);
   
if ($rowcount == FALSE) {
    header("Location:http://10.87.96.132/RCLSurvey/signup.php");
} 
else
{
while ($row = $fetchUsernameQueryResult->fetch_assoc()) {
        $status = $row['status'];
    }
	
	if($status == 'Y'){
	 header("Location:http://10.87.96.132/RCLSurvey/pages/successPage.php");
	}

else {
$questionid = $_SESSION['questionid'];

?>
	<?php 


if(isset($_SESSION["timer"]))
{
$fetchTimeQueryValue = $_SESSION["timer"];


if($fetchTimeQueryValue >0)
{
if (!isset($_SESSION['endOfTimer'])){ 
    $endOfTimer = time() + $fetchTimeQueryValue; 
    $_SESSION['endOfTimer'] = $endOfTimer; 
	
} 

if(($_SESSION['endOfTimer'] - time()) < 0) { 
      $timeTilEnd = 0; 
} 
else { 
      $timeTilEnd = $_SESSION['endOfTimer'] - time(); 
	 
} 
if($timeTilEnd <=0)
{

}
}
}

foreach ($_SESSION['answer'] as $key => $value) {
    echo "Key: $key; Value: $value<br />\n";
}

?> 

<html>
<head>
    <meta charset="utf-8" />
    <title>iCount Challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	
	<script src="js/jquery.countdown360.js" type="text/javascript" charset="utf-8"></script>
<script>
function myFunction()
{
var time = document.getElementById("submittedAt").value;
alert(time);
}
</script>
	
</head>
<body>


<div class="container">

<div class="page-header">
    <h1>iCount Challenge<small> </small></h1>
	<span style="color:red;"></span>
</div>
	<div id="countdown" align="right"></div>
<!-- Satisfaction Survey - START -->
<div class="container" id="cnt1">
    <div class="col-md-3">
    </div>

    <div class="col-md-6" id="panel1">
	<?php
		$totalQuestionCount;
		$quesCountQuery = "select count(*) as count from surveyquestion";
		$quesCountQueryResult = mysqli_query($conn, $quesCountQuery);
		while ($quesCount = $quesCountQueryResult->fetch_assoc()) {
				$totalQuestionCount = $quesCount['count'];
		}
		
		

		$id = '';
		$Question = '';
		$SubQuestion = '';
		$Option1 = '';
		$Option2 = '';
		$Option3 = '';
		$Option4 = '';
		$getQuesQuery = "select * from surveyquestion where id=$questionid";
		$getQuesQueryResult = mysqli_query($conn, $getQuesQuery);
		
		$rowcount = mysqli_num_rows($getQuesQueryResult);
		
		//echo "<script>alert('Max Question Count->".$totalQuestionCount."');</script>";
		if($questionid<$totalQuestionCount){

		if ($rowcount == FALSE ) {
			
			echo "Ended";
			
		}
		else{
		while ($row = $getQuesQueryResult->fetch_assoc()) {
			
			$id = $row['id'];
			$Question = $row['question'];
			$Option1 = $row['option1'];
			$Option2 = $row['option2'];
			$Option3 = $row['option3'];
			$Option4 = $row['option4'];
			$SubQuestion = $row['subquestion'];
			$QuestionType = $row['inputtype'];
			
			//echo "<script>alert('Question Id->".$id."');</script>";
			//echo "<script>alert('Question ->".$Question."');</script>";
			
			if($QuestionType == 'text')
			{
			//Timer For Radio Button Only
			if(isset($_SESSION['endOfTimer']))
			{
			
			echo '<script type="text/javascript"> 
var TimeLeft = '.$timeTilEnd.';
	
CountFunc = setInterval(countdown,1000); 

function countdown() 
{ 
      if(TimeLeft > 0) { 
            TimeLeft -= 1; 
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
				<form method="POST" action="" name="surveyForm">
				<input type="hidden" name="submittedAt" value='.$timeTilEnd.'>
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
                        <input type="submit" class="btn btn-success btn-sm btn-block" id="nextques" onclick="myFunction()" value="Next">
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
				<form method="POST" action="" name="surveyForm">
				
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
                        <input type="submit" class="btn btn-success btn-sm btn-block" id="nextques" onclick="myFunction()" value="Next">
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
		}
		else
		{
		if ($rowcount == FALSE ) {
			
		echo "Ended";	
		}
		else{
		while ($row = $getQuesQueryResult->fetch_assoc()) {
			
			$id = $row['id'];
			$Question = $row['question'];
			$Option1 = $row['option1'];
			$Option2 = $row['option2'];
			$Option3 = $row['option3'];
			$Option4 = $row['option4'];
			$SubQuestion = $row['subquestion'];
			$QuestionType = $row['inputtype'];

			
			if($QuestionType == 'text')
			{
			//Timer For Radio Button Only
			if(isset($_SESSION['endOfTimer']))
			{
			echo '<script type="text/javascript"> 
var TimeLeft = '.$timeTilEnd.';
	
CountFunc = setInterval(countdown,1000); 

function countdown() 
{ 
      if(TimeLeft > 0) { 
            TimeLeft -= 1; 
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
				<form method="POST" action="" name="surveyForm">
				<input type="hidden" name="submittedAt" value='.$timeTilEnd.'>
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
                        <input type="submit" class="btn btn-success btn-sm btn-block" id="nextques" onclick="myFunction()" value="Submit Survey">
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
				<form method="POST" action="" name="surveyForm">
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
                        <input type="submit" class="btn btn-success btn-sm btn-block" id="nextques" onclick="myFunction()" value="Submit Survey">
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

<!-- Satisfaction Survey - END -->

	<div class="pull-right" style="padding-top: -50px !important;" >
		<a style="text-decoration: none !important; cursor: pointer;" >RCLADM iCount Communiqué</a>
	</div>

</div>
</div>
<?php }} ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</body>
</html>