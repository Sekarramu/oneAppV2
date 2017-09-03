<!DOCTYPE html>
	<?php include "php/connection/connect.php"; ?>
<?php

session_start(); 
if(isset($_SESSION['endUserData']))
{
unset($_SESSION['endUserData']);
$_SESSION['endUserData']['timeToSubmit'] = 0;
}
if(isset($_COOKIE['quesArray']))
{
unset($_COOKIE['quesArray']);
setcookie("quesArray", "", time()-(86400 * 30));
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
	<link rel="stylesheet" type="text/css" href="css/custom.css" />
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script>
	function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

	</script>
   
</head>
<body>

<div class="container">

<div class="page-header">
<div class="row">
<div class="col-md-5">
    <h1><span class="red">SYSCO</span> Challenge </h1>
</div>
<div class="col-md-offset-3 col-md-3 tag">
	<a class="tag">SUS Terminology Challenge</a>
</div>
</div>
</div>

<img src="images/sysco.png" alt="Survey" width="25%" height="75%" class="surveyImg">
 
<form class="form-inline" id="surveyForm" method="POST" action="php/logUser.php">
		
  <div class="form-group">
    <div class="input-group">
      <input type="text" class="form-control" id="email" name="email" placeholder="Emp #" onkeypress="return isNumber(event)" maxlength="6" required>
    </div>
  </div>
  <input type="submit" class="btn btn-primary userForm" value="click here to take the quiz" />
</form>
</div>	
</body>
</html>


<?php


$myfile = fopen("timer.txt", "r") or die("Unable to open file!");
$time = fread($myfile,filesize("timer.txt"));
setcookie("timer", $time, time() + (86400 * 30), "/"); 
fclose($myfile);




	$quesArray = array();
 
		$i = 1;
		$getQuesQuery = "select * from surveyquestion";
		$getQuesQueryResult = mysqli_query($conn, $getQuesQuery);
		$rowcount = mysqli_num_rows($getQuesQueryResult);
		while ($rowcount = $getQuesQueryResult->fetch_assoc()) {
		
		
		$opt1 = $rowcount['option2'];
		$opt2 = $rowcount['option3'];
		$opt3 = $rowcount['option1'];
		$opt4 = $rowcount['option4'];
		
		$quesArray[$i] = $rowcount['id'] . ":::" . $rowcount['question'] . ":::" . $rowcount['subquestion'] .  ":::" . $opt1 . ":::" . $opt2 . ":::" . $opt3 .":::" . $opt4 . ":::" . $rowcount['inputtype'];
		$i++;
		}
		
		
		
setcookie("quesArray", serialize($quesArray), time() + (86400 * 30), "/"); 
mysqli_close($conn);
?>