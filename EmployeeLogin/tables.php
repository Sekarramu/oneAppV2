<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin - Tables</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
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
							<li><a href="pages/location.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Location</a></li>
							<li><a href="pages/designation.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Designation</a></li>
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
		<!--	<li><a href="charts.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>-->
			<li  class="active"><a href="tables.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tables</a></li>
		</ul>

=======
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin - Tables</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
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
							<li><a href="pages/location.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Location</a></li>
							<li><a href="pages/designation.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Designation</a></li>
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
		<!--	<li><a href="charts.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>-->
			<li  class="active"><a href="tables.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tables</a></li>
		</ul>

>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Tables</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tables</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
<<<<<<< HEAD
					<div class="panel-heading">Comments Table</div>
=======
					<div class="panel-heading">Comments Table</div>
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
					
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
<<<<<<< HEAD
						        <th data-field="id" data-sortable="true">S.NO</th>
								<th data-field="IPAddress"  data-sortable="true">IPAddress</th>
								<th data-field="Designation"  data-sortable="true">Designation</th>
						        <th data-field="Location"  data-sortable="true">Location</th>
						        <th data-field="Question" data-sortable="true">Question</th>
								<th data-field="Answer" data-sortable="true">Answer</th>
						    </tr>
						    </thead>
							<?php
								$counter =1;
								$fetchCommentsQuery       = "select sd.IPAddress,sd.designation,sd.location,sd.answer,sq.question from surveydata sd JOIN surveyquestion sq ON sd.question = sq.id where sq.inputtype IN ('textarea')";
								$fetchCommentsQueryResult = mysqli_query($conn, $fetchCommentsQuery);
								while ($answerRow = $fetchCommentsQueryResult->fetch_assoc()) {
									
								echo '<tr><td>';
								echo $counter;
								echo '</td><td>';
								echo $answerRow['IPAddress'];
								echo '</td><td>';
								echo $answerRow['designation'];
								echo '</td><td>';
								echo $answerRow['location'];
								echo '</td><td>';
								echo $answerRow['question'];
								echo '</td><td>';
								echo $answerRow['answer'];
								echo '</td></tr>';
								$counter++;
									
								}
							?>
							
=======
						        <th data-field="id" data-sortable="true">S.NO</th>
								<th data-field="IPAddress"  data-sortable="true">IPAddress</th>
								<th data-field="Designation"  data-sortable="true">Designation</th>
						        <th data-field="Location"  data-sortable="true">Location</th>
						        <th data-field="Question" data-sortable="true">Question</th>
								<th data-field="Answer" data-sortable="true">Answer</th>
						    </tr>
						    </thead>
							<?php
								$counter =1;
								$fetchCommentsQuery       = "select sd.IPAddress,sd.designation,sd.location,sd.answer,sq.question from surveydata sd JOIN surveyquestion sq ON sd.question = sq.id where sq.inputtype IN ('textarea')";
								$fetchCommentsQueryResult = mysqli_query($conn, $fetchCommentsQuery);
								while ($answerRow = $fetchCommentsQueryResult->fetch_assoc()) {
									
								echo '<tr><td>';
								echo $counter;
								echo '</td><td>';
								echo $answerRow['IPAddress'];
								echo '</td><td>';
								echo $answerRow['designation'];
								echo '</td><td>';
								echo $answerRow['location'];
								echo '</td><td>';
								echo $answerRow['question'];
								echo '</td><td>';
								echo $answerRow['answer'];
								echo '</td></tr>';
								$counter++;
									
								}
							?>
							
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
	</div><!--/.main-->

<<<<<<< HEAD
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
=======
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
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
<<<<<<< HEAD
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
