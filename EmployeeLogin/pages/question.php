<!DOCTYPE html>
<html>
<head>
<?php  
session_start(); 
include "../../php/connection/connect.php"; 
if($_SESSION['status'] == 'OK')
{
$name = $_SESSION['name'];

?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin | Update Question</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">
<script src="../js/lumino.glyphs.js"></script>
	<script>
	function addQuestionShow()
	{
		var row = document.getElementById("addQuestionForm");
		var row1 = document.getElementById("updateQuestionTable");
		var row2 = document.getElementById("updateQuestionForm");
		
		row.style.display = "";  // shows the row
		row1.style.display = "none";
		row2.style.display = "none";
	}
	
		function updateQuestionShow()
	{
		var row = document.getElementById("updateQuestionTable");
		var row1 = document.getElementById("addQuestionForm");
		var row2 = document.getElementById("updateQuestionForm");
		
		row.style.display = "";  // shows the row
		row1.style.display = "none";
		row2.style.display = "none";
	}
	</script>
	


</head>

<body>
	<?php
	if(isset($_SESSION['update']))
	{
	$update = $_SESSION['update'];
	echo "<script>alert('".$update."');</script>";
	unset($_SESSION['update']);
	}
	?>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Welcome &nbsp;</span><?php echo $name?></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $name?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						    <li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Question</a></li>
							<li><a href="timer.php"><span class="glyphicon glyphicon-record" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Countdown Timer</a></li>
							<li><a href="../php/logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
			<hr/>
		
		<ul class="nav menu">
			<li class="active"><a href="../index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
		<!--	<li><a href="../charts.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>-->
			
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Pages / Update Question</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Question</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
			<button class="btn btn-primary" onclick="addQuestionShow()">Add Question</button> &nbsp;&nbsp; <button class="btn btn-info" onclick="updateQuestionShow()">Update Question</button> 
				<div class="panel panel-default" id="updateQuestionTable">
					<div class="panel-heading">Question Table</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="../tables/data2.json" class="table table-hover">
						    <thead>
						    <tr>
						        <th data-align="right">Id</th>
						        <th >Question</th>
						        <th >Sub-Question</th>
								<th >Option1</th>
								<th >Option2</th>
								<th >Option3</th>
								<th >Option4</th>
								<th >Type</th>
								<th >Answer</th>
								<th>Action</th>
						    </tr>
						    </thead>
							<tr>
							<?php

								$fetchQuestionQuery = "select * from surveyquestion";
								$fetchQuestionQueryResult = mysqli_query($conn, $fetchQuestionQuery);
								while ($fetchQuestionRow = $fetchQuestionQueryResult->fetch_assoc()) {
										$qid = $fetchQuestionRow['id'];
								
										echo '<tr><td>';
										echo $fetchQuestionRow['id'];
										echo '</td><td>';
										echo $fetchQuestionRow['question'];
										echo '</td><td>';
										if($fetchQuestionRow['subquestion'] != NULL || $fetchQuestionRow['subquestion'] != '')
										{
										echo $fetchQuestionRow['subquestion'];
										}
										else
										{
										echo "------";
										}
										echo '</td><td>';
										if($fetchQuestionRow['option1'] != NULL || $fetchQuestionRow['option1'] != '')
										{
										echo $fetchQuestionRow['option1'];
										}
										else
										{
										echo "------";
										}
										
										echo '</td><td>';
										
										if($fetchQuestionRow['option2'] != NULL || $fetchQuestionRow['option2'] != '')
										{
										echo $fetchQuestionRow['option2'];
										}
										else
										{
										echo "------";
										}
										
										echo '</td><td>';
										
										if($fetchQuestionRow['option3'] != NULL || $fetchQuestionRow['option3'] != '')
										{
										echo $fetchQuestionRow['option3'];
										}
										else
										{
										echo "------";
										}
										
										echo '</td><td>';
										
										if($fetchQuestionRow['option4'] != NULL || $fetchQuestionRow['option4'] != '')
										{
										echo $fetchQuestionRow['option4'];
										}
										else
										{
										echo "------";
										}
										
										echo '</td><td>';
										echo $fetchQuestionRow['inputtype'];
										
										echo '</td><td >';
										echo $fetchQuestionRow['answer'];
										echo '</td><td>';
										
										
										
										echo "<button class='btn btn-info btn-xs' onclick=\"{
										document.getElementById('updateQuestionTable').style.display = 'none';
										document.getElementById('updateQuestionForm').style.display = '';
										document.getElementById('questionid').value = '".$qid."';
										document.getElementById('question').value = '".$fetchQuestionRow['question']."';
										document.getElementById('squestion').value = '".$fetchQuestionRow['subquestion']."';
										document.getElementById('opt1').value = '".$fetchQuestionRow['option1']."';
										document.getElementById('opt2').value = '".$fetchQuestionRow['option2']."';
										document.getElementById('opt3').value = '".$fetchQuestionRow['option3']."';
										document.getElementById('opt4').value = '".$fetchQuestionRow['option4']."';
										document.getElementById('answer').value = '".$fetchQuestionRow['answer']."';										
										}\">Update</button><hr/>";
										echo "<button class='btn btn-warning btn-xs' onclick=\"if(confirm('Confirm Delete Action on Question ".$qid."') == true){location.href='../php/deleteQuestion.php?qid=".$qid."'}\">Delete</button>";
										echo "<input type='hidden' id='qid$qid' value='" . $qid ."'>";
										echo '</td></tr>';
										
								}


?>
							</tr>
						</table>
					</div>
				</div>
			</div>
			
		</div><!--/.row-->				
		
		<div class="row" id="addQuestionForm" style="display:none;">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Add Question</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="../php/addQuestion.php" method="POST">
							
								<div class="form-group">
									<label>Question</label>
									<input type="text" name="question" class="form-control" placeholder="Please Enter Question">
								</div>
																
								<div class="form-group">
									<label>Sub-Question</label>
									<input type="text" name="squestion" class="form-control" placeholder="Please Enter Sub-Question">
								</div>
								<div class="form-group">
									<label>Option1</label>
									<input type="text" name="opt1" class="form-control" placeholder="Please Enter Option1">
								</div>
								<div class="form-group">
									<label>Option2</label>
									<input type="text" name="opt2" class="form-control" placeholder="Please Enter Option2">
								</div>
								<div class="form-group">
									<label>Option3</label>
									<input type="text" name="opt3" class="form-control" placeholder="Please Enter Option3">
								</div>
								<div class="form-group">
									<label>Option4</label>
									<input type="text" name="opt4" class="form-control" placeholder="Please Enter Option4">
								</div>
								
								<div class="form-group">
									<label>Correct Answer</label>
									<input type="text" name="answer" class="form-control" placeholder="Please Enter Correct Answer">
								</div>
								<label>Input Type</label>
									<div class="radio">
										<label>
											<input type="radio" name="inputtype" id="inputtype" value="text" checked>Text
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="inputtype" id="inputtype" value="textarea">Comments
										</label>
									</div>
								<button type="submit" class="btn btn-primary">Insert Question</button>
								<button type="reset" class="btn btn-default">Reset</button>
							
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
		
		<div class="row" id="updateQuestionForm" style="display:none;">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Update Question</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="../php/updateQuestion.php" method="POST">
							
								<div class="form-group">
									<label>Question ID</label>
									<input name="questionid" id="questionid" class="form-control" readonly >
								</div>
								
								<div class="form-group">
									<label>Question</label>
									<input type="text" name="question"  id="question" class="form-control" placeholder="Please Enter Question" >
								</div>
																
								<div class="form-group">
									<label>Sub-Question</label>
									<input type="text" name="squestion"  id="squestion" class="form-control" placeholder="Please Enter Sub-Question">
								</div>
								<div class="form-group">
									<label>Option1</label>
									<input type="text" name="opt1"  id="opt1" class="form-control" placeholder="Please Enter Option1">
								</div>
								<div class="form-group">
									<label>Option2</label>
									<input type="text" name="opt2"  id="opt2"  class="form-control" placeholder="Please Enter Option2">
								</div>
								<div class="form-group">
									<label>Option3</label>
									<input type="text" name="opt3"  id="opt3"  class="form-control" placeholder="Please Enter Option3">
								</div>
								<div class="form-group">
									<label>Option4</label>
									<input type="text" name="opt4"  id="opt4"  class="form-control" placeholder="Please Enter Option4">
								</div>
								
								<div class="form-group">
									<label>Correct Answer</label>
									<input type="text" name="answer" id="answer" class="form-control" placeholder="Please Enter Correct Answer">
								</div>
								<label>Input Type</label>
									<div class="radio">
										<label>
											<input type="radio" name="updateInputtype" id="updateText" value="text">Text
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="updateInputtype" id="updateTextArea" value="textarea">Comments
										</label>
									</div>
								<button type="submit" class="btn btn-primary">Update Question</button>
								<button type="reset" class="btn btn-default">Reset</button>
							
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>
<?php
}
else
{
	header("Location:http://10.85.166.100/SyscoSUS/admin/login.php");
}
?>
</html>
