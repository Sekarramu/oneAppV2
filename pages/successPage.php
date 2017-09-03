<?php session_start();
if((isset($_SESSION['endUserData']['user'])) && ($_COOKIE['submittedOrNot'] == "Y"))
{
?><!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Success Page | SUS Challenge</title>
    <?php include  "../php/connection/connect.php";  
	?>
    
    <link rel="stylesheet" href="../css/reset.css">
	
    
        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body {
  background: #33ab83;
}

button {
  -webkit-appearance: none;
  background: transparent;
  border: 0;
  outline: 0;
}

.paginate {
  position: relative;
  margin: 10px;
  width: 50px;
  height: 50px;
  cursor: pointer;
  transform: translate3d(0, 0, 0);
  position: absolute;
  top: 50%;
  margin-top: -20px;
  -webkit-filter: drop-shadow(0 2px 0px rgba(0, 0, 0, 0.2));
}
.paginate i {
  position: absolute;
  top: 40%;
  left: 0;
  width: 50px;
  height: 5px;
  border-radius: 2.5px;
  background: #fff;
  transition: all 0.15s ease;
}
.paginate.left {
  right: 58%;
}
.paginate.left i {
  transform-origin: 0% 50%;
}
.paginate.left i:first-child {
  transform: translate(0, -1px) rotate(40deg);
}
.paginate.left i:last-child {
  transform: translate(0, 1px) rotate(-40deg);
}
.paginate.left:hover i:first-child {
  transform: translate(0, -1px) rotate(30deg);
}
.paginate.left:hover i:last-child {
  transform: translate(0, 1px) rotate(-30deg);
}
.paginate.left:active i:first-child {
  transform: translate(1px, -1px) rotate(25deg);
}
.paginate.left:active i:last-child {
  transform: translate(1px, 1px) rotate(-25deg);
}
.paginate.left[data-state=disabled] i:first-child {
  transform: translate(-5px, 0) rotate(0deg);
}
.paginate.left[data-state=disabled] i:last-child {
  transform: translate(-5px, 0) rotate(0deg);
}
.paginate.left[data-state=disabled]:hover i:first-child {
  transform: translate(-5px, 0) rotate(0deg);
}
.paginate.left[data-state=disabled]:hover i:last-child {
  transform: translate(-5px, 0) rotate(0deg);
}
.paginate.right {
  left: 58%;
}
.paginate.right i {
  transform-origin: 100% 50%;
}
.paginate.right i:first-child {
  transform: translate(0, 1px) rotate(40deg);
}
.paginate.right i:last-child {
  transform: translate(0, -1px) rotate(-40deg);
}
.paginate.right:hover i:first-child {
  transform: translate(0, 1px) rotate(30deg);
}
.paginate.right:hover i:last-child {
  transform: translate(0, -1px) rotate(-30deg);
}
.paginate.right:active i:first-child {
  transform: translate(1px, 1px) rotate(25deg);
}
.paginate.right:active i:last-child {
  transform: translate(1px, -1px) rotate(-25deg);
}
.paginate.right[data-state=disabled] i:first-child {
  transform: translate(5px, 0) rotate(0deg);
}
.paginate.right[data-state=disabled] i:last-child {
  transform: translate(5px, 0) rotate(0deg);
}
.paginate.right[data-state=disabled]:hover i:first-child {
  transform: translate(5px, 0) rotate(0deg);
}
.paginate.right[data-state=disabled]:hover i:last-child {
  transform: translate(5px, 0) rotate(0deg);
}
.paginate[data-state=disabled] {
  opacity: 0.3;
  cursor: default;
}

.counter {
  text-align: center;
  position: absolute;
  width: 100%;
  top: 50%;
  margin-top: -15px;
  font-size: 30px;
  font-family: Helvetica, sans-serif;
  text-shadow: 0px 2px 0px rgba(0, 0, 0, 0.2);
  color: #fff;
}
.na {
  text-align: center;
  position: absolute;
  width: 100%;
  top: 40%;
  margin-top: -15px;
  font-size: 30px;
  font-family: Helvetica, sans-serif;
  text-shadow: 0px 2px 0px rgba(0, 0, 0, 0.2);
  color: #fff;
}
.countertop {
  text-align: center;
  position: absolute;
  width: 100%;
  top: 10%;
  margin-top: -15px;
  font-size: 30px;
  font-family: Helvetica, sans-serif;
  text-shadow: 0px 2px 0px rgba(0, 0, 0, 0.2);
  color: #fff;
}
.as {
  text-align: center;
  position: absolute;
  width: 100%;
  top: 50%;
  margin-top: -15px;
  font-size: 30px;
  font-family: Helvetica, sans-serif;
  text-shadow: 0px 2px 0px rgba(0, 0, 0, 0.2);
  color: #fff;
}

.ques {
  text-align: center;
  position: absolute;
  width: 100%;
  top: 70%;
  margin-top: -15px;
  font-size: 30px;
  font-family: Helvetica, sans-serif;
  text-shadow: 0px 2px 0px rgba(0, 0, 0, 0.2);
  color: #fff;
}
#smileyFace
{
font-size:50px;
}
</style>

		
        <script src="../js/prefixfree.min.js"></script>
			<script>
	$(document).ready(function() {
		<?php
			$userName   = $_SESSION['endUserData']['user'];
		?>
		
		});
		</script>
		
  </head>

  <body>

<?php
$ansCount;


$fetchAnsNotSubmittedQuery       = "select count(id) as count from surveydata where answer IS NULL OR answer = '' and email = '$userName'";
$fetchAnsNotSubmittedQueryResult = mysqli_query($conn, $fetchAnsNotSubmittedQuery);
while ($answerNotRow = $fetchAnsNotSubmittedQueryResult->fetch_assoc()) {
	$ansNotCount = $answerNotRow['count'];
}

$fetchAnsSubmittedQuery       = "select count(id) as count from surveydata where answer is NOT NULL and answer != ''  and email = '$userName'";
$fetchAnsSubmittedQueryResult = mysqli_query($conn, $fetchAnsSubmittedQuery);
while ($answerRow = $fetchAnsSubmittedQueryResult->fetch_assoc()) {
	$ansCount = $answerRow['count'];
}

$maxQuesCount = count(unserialize($_COOKIE['quesArray']));

?>
    <h1 class="countertop"><?php echo $userName; ?> ! Thanks For Spending time with us.. !! <span id="smileyFace">&#9786;</span></h1>
	<h2 class="na" id="question">Question&#146;s Not Answered / Timed Out&nbsp; - <?php echo $ansNotCount.'&nbsp;/&nbsp;'.$maxQuesCount ?></h2>
	<h2 class="as" id="question">Question&#146;s answered&nbsp; - <?php echo $ansCount.'&nbsp;/&nbsp;'.$maxQuesCount ?></h2>
	<?php  if(isset ($_COOKIE[$userName])){?><h2 class="ques" id="question">Score&nbsp; - <?php echo $_COOKIE[$userName]; ?></h2> <?php }?>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>  
  </body>
  <?php 
if(isset($_SESSION['endUserData']['answerArray']))
{
	unset($_SESSION['endUserData']['answerArray']);
}

	mysqli_close($conn);
  ?>
</html>
<?php
}
else
{
	header("Location:http://10.85.166.100/SyscoSUS/signup.php");
}
?>