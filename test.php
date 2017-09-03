<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sysco";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$quesArray = array();
 for($i =1 ; $i<=10 ; $i++)
{
		$getQuesQuery = "select * from surveyquestion where id=$i";
		$getQuesQueryResult = mysqli_query($conn, $getQuesQuery);
		$rowcount = mysqli_num_rows($getQuesQueryResult);
		while ($rowcount = $getQuesQueryResult->fetch_assoc()) {
		//$tmpArray = array($rowcount['id'],$rowcount['question'],$rowcount['subquestion'],$rowcount['option1'],$rowcount['option2'],$rowcount['option3'],$rowcount['option4'],$rowcount['inputtype']);
		//$quesArray = array_merge($quesArray,$tmpArray);
		
		$quesArray[$i] = $rowcount['id'] . ":::" . $rowcount['question'] . ":::" . $rowcount['subquestion'] .  ":::" . $rowcount['option1'] . ":::" . $rowcount['option2'] . ":::" . $rowcount['option3'] .":::" . $rowcount['option4'] . ":::" . $rowcount['inputtype'];
		}
		
		//$quesArray($i) = array_push($quesArray ,array($rowcount['id'],$rowcount['question'],$rowcount['subquestion'],$rowcount['option1'],$rowcount['option2'],$rowcount['option3'],$rowcount['option4'],$rowcount['inputtype']));
		
}



$j = 3;
print_r($quesArray);
$quesString =  $quesArray[$j];
$currentQuesArray = explode(":::",$quesString);
print_r($currentQuesArray);


?>