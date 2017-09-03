<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin - Charts</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<?php  
session_start(); 
include "../php/connection/connect.php"; 
if($_SESSION['status'] == 'OK')
{
?>
<?php
$name = $_SESSION['name'];
?>
</head>	
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Welcome &nbsp;</span><?php echo $name?></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $name?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						    <li><a href="pages/question.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Question</a></li>
							<li><a href="pages/timer.php"><span class="glyphicon glyphicon-record" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Countdown Timer</a></li>
							<li><a href="php/logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<hr/>
		<ul class="nav menu">
			<li><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
		<!--	<li class="active"><a href="charts.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>-->
			
		</ul>

	</div><!--/.sidebar-->
		
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Charts</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Survey Charts</h1>
				
			</div>
		</div><!--/.row-->
		
	<?php include "functions/pieChart.php";  ?>	
	
	<!--Pie Chart container div start-->
	<div class="container">
	<table class="table">
	<tr><th>S.No</th><th>Topic</th><th>Sub - Topic</th></tr>
	<?php
	$selectQuestionQuery1       = "select * from surveyquestion  where inputtype <> 'textarea'";
	$selectQuestionQuery1Result = mysqli_query($conn, $selectQuestionQuery1);
	//$quesCountRow1            = mysqli_fetch_assoc($selectQuestionQuery1Result);
	
	while ($quesCountRow1 = $selectQuestionQuery1Result->fetch_assoc()) {
	echo "<tr><td>".$quesCountRow1['id'];
	echo"</td><td>".$quesCountRow1['question'];
	echo"</td><td>".$quesCountRow1['subquestion'];
	echo"</td></tr>";
	}
	?>
	
	</table>
	<h4>View 1 (Question Basis)</h4>
	<?php
	
	$selectQuestionQuery       = "select count(*) as count from surveyquestion  where inputtype <> 'textarea'";
	$selectQuestionQueryResult = mysqli_query($conn, $selectQuestionQuery);
	$quesCountRow            = mysqli_fetch_assoc($selectQuestionQueryResult);
	$quesCount = $quesCountRow['count'];
	for($i=0;$i<$quesCount;$i++)
	{
		$j = $i +1;
		
		$selectQuestionNameQuery       = "select question from surveyquestion  where id = $j";
		$selectQuestionNameQueryResult = mysqli_query($conn, $selectQuestionNameQuery);
		$quesNameRow            = mysqli_fetch_assoc($selectQuestionNameQueryResult);
		$quesName = $quesNameRow['question'];
		if($i%4 ==0)
		{
			echo '<div class="row">';
			echo '
				<div class="col-md-3">
				<div class="panel panel-default">
					
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="pieChartData'.$j.'" ></canvas>
						</div>
					</div>
				</div>
			</div>
			';
		}
		else if($i%4 == 3)
		{
			
			echo '
				<div class="col-md-3">
				<div class="panel panel-default">
					
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="pieChartData'.$j.'" ></canvas>
						</div>
					</div>
				</div>
			</div>
			';
			echo '</div>';
		}
		else
		{
			echo '
				<div class="col-md-3">
				<div class="panel panel-default">
					
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="pieChartData'.$j.'" ></canvas>
						</div>
					</div>
				</div>
			</div>
			';
		}
		if(($quesCount%4) != 0)
		{
		if($i == $quesCount-1)
		{
			echo '</div>';
		}
		}
	}
	?>
	</div>	<!--Pie Chart container div end-->
	
	
	</div><!--/.main-->
	<script>	
window.onload = function(){

	<?php
		for($i=1;$i<=$quesCount;$i++)
		{
			echo '
					var pieChartData'.$i.' = document.getElementById("pieChartData'.$i.'").getContext("2d");
					window.myPie = new Chart(pieChartData'.$i.').Pie(pieData'.$i.', {responsive : true
					});
			';
		}
	?>


	
};
</script> 

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
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
=======
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin - Charts</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<?php  
session_start(); 
include "../php/connection/connect.php"; 
if($_SESSION['status'] == 'OK')
{
?>
<?php
$name = $_SESSION['name'];
?>
</head>	
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Welcome &nbsp;</span><?php echo $name?></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $name?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						    <li><a href="pages/question.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Question</a></li>
							<li><a href="pages/timer.php"><span class="glyphicon glyphicon-record" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Countdown Timer</a></li>
							<li><a href="php/logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<hr/>
		<ul class="nav menu">
			<li><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
		<!--	<li class="active"><a href="charts.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>-->
			
		</ul>

	</div><!--/.sidebar-->
		
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Charts</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Survey Charts</h1>
				
			</div>
		</div><!--/.row-->
		
	<?php include "functions/pieChart.php";  ?>	
	
	<!--Pie Chart container div start-->
	<div class="container">
	<table class="table">
	<tr><th>S.No</th><th>Topic</th><th>Sub - Topic</th></tr>
	<?php
	$selectQuestionQuery1       = "select * from surveyquestion  where inputtype <> 'textarea'";
	$selectQuestionQuery1Result = mysqli_query($conn, $selectQuestionQuery1);
	//$quesCountRow1            = mysqli_fetch_assoc($selectQuestionQuery1Result);
	
	while ($quesCountRow1 = $selectQuestionQuery1Result->fetch_assoc()) {
	echo "<tr><td>".$quesCountRow1['id'];
	echo"</td><td>".$quesCountRow1['question'];
	echo"</td><td>".$quesCountRow1['subquestion'];
	echo"</td></tr>";
	}
	?>
	
	</table>
	<h4>View 1 (Question Basis)</h4>
	<?php
	
	$selectQuestionQuery       = "select count(*) as count from surveyquestion  where inputtype <> 'textarea'";
	$selectQuestionQueryResult = mysqli_query($conn, $selectQuestionQuery);
	$quesCountRow            = mysqli_fetch_assoc($selectQuestionQueryResult);
	$quesCount = $quesCountRow['count'];
	for($i=0;$i<$quesCount;$i++)
	{
		$j = $i +1;
		
		$selectQuestionNameQuery       = "select question from surveyquestion  where id = $j";
		$selectQuestionNameQueryResult = mysqli_query($conn, $selectQuestionNameQuery);
		$quesNameRow            = mysqli_fetch_assoc($selectQuestionNameQueryResult);
		$quesName = $quesNameRow['question'];
		if($i%4 ==0)
		{
			echo '<div class="row">';
			echo '
				<div class="col-md-3">
				<div class="panel panel-default">
					
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="pieChartData'.$j.'" ></canvas>
						</div>
					</div>
				</div>
			</div>
			';
		}
		else if($i%4 == 3)
		{
			
			echo '
				<div class="col-md-3">
				<div class="panel panel-default">
					
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="pieChartData'.$j.'" ></canvas>
						</div>
					</div>
				</div>
			</div>
			';
			echo '</div>';
		}
		else
		{
			echo '
				<div class="col-md-3">
				<div class="panel panel-default">
					
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="pieChartData'.$j.'" ></canvas>
						</div>
					</div>
				</div>
			</div>
			';
		}
		if(($quesCount%4) != 0)
		{
		if($i == $quesCount-1)
		{
			echo '</div>';
		}
		}
	}
	?>
	</div>	<!--Pie Chart container div end-->
	
	
	</div><!--/.main-->
	<script>	
window.onload = function(){

	<?php
		for($i=1;$i<=$quesCount;$i++)
		{
			echo '
					var pieChartData'.$i.' = document.getElementById("pieChartData'.$i.'").getContext("2d");
					window.myPie = new Chart(pieChartData'.$i.').Pie(pieData'.$i.', {responsive : true
					});
			';
		}
	?>


	
};
</script> 

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
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
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
