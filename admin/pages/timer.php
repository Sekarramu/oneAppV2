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
<title>Admin | Update Timer</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">
<script src="../js/lumino.glyphs.js"></script>
	<script>
	function addTimerShow()
	{
		var row = document.getElementById("addTimerForm");
		var row1 = document.getElementById("updateTimerTable");
		var row2 = document.getElementById("updateTimerForm");
		
		row.style.display = "";  // shows the row
		row1.style.display = "none";
		row2.style.display = "none";
	}
	
	function updateTimerShow()
	{
		var row = document.getElementById("updateTimerTable");
		var row1 = document.getElementById("addTimerForm");
		var row2 = document.getElementById("updateTimerForm");
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
				<a class="navbar-brand" href="#"><span>Welcome &nbsp;</span><?php echo $name?></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $name?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						    <li><a href="question.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Question</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-record" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Countdown Timer</a></li>
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
				<li class="active">Pages / Update Timer</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Timer</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
			<!--<button class="btn btn-primary">--> <!--onclick="addTimerShow()"--> <!--Add Timer</button> &nbsp;&nbsp; <button class="btn btn-info" onclick="updateTimerShow()">Update Timer</button> -->
				<div class="panel panel-default" id="updateTimerTable">
					<div class="panel-heading">Timer Table</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="../tables/data2.json" class="table table-hover">
						    <thead>
						    <tr>
						        <th data-align="right">Id</th>
						        <th >Count Down Time</th>
						        <th>Action</th>
						    </tr>
						    </thead>
							<tr>
							<?php
								$counter = 0;
								$myfile = fopen("../../timer.txt", "r") or die("Unable to open file!");
									$time = fread($myfile,filesize("../../timer.txt"));
								fclose($myfile);
								if($time != '' || $time != NULL)
								{
								
										
										$lid = 1;
										$counter++;
										echo '<tr><td>';
										echo $counter;
										echo '</td><td>';
										echo  $time;
										echo '</td><td>';
										
									
										
										
										
										/*echo "<button class='btn btn-info btn-xs' onclick=\"{
										document.getElementById('updateTimerTable').style.display = 'none';
										document.getElementById('updateTimerForm').style.display = '';
										}\">Update</button><hr/>";
										echo "<button class='btn btn-warning btn-xs' onclick=\"if(confirm('Confirm Delete Action on Timer ".$lid."') == true){location.href='../php/deleteTimer.php?lid=".$lid."'}\">Delete</button>";
										*/
										echo '</td></tr>';
										
								
								}
								else
								{
									echo '<td></td>';
									echo '<td>No Records Found!</td>';
									echo '<td></td>';
								}

?>
							</tr>
						</table>
					</div>
				</div>
			</div>
			
		</div><!--/.row-->				
		
		<div class="row" id="addTimerForm" style="display:none;">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Add Timer</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="../php/addTimer.php" method="POST">
							
														
								<div class="form-group">
									<label>Count Down Time</label>
									<input type="text" name="aTimer" class="form-control" placeholder="Please Enter Timer Value">
								</div>
								
								<button type="submit" class="btn btn-primary">Insert Timer</button>
								<button type="reset" class="btn btn-default">Reset</button>
							
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
		
		<div class="row" id="updateTimerForm" style="display:none;">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Update Timer</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="../php/updateTimer.php" method="POST">
							
								<div class="form-group">
									<label>Count Down Time</label>
									<input name="timer" id="timer" class="form-control">
								</div>
								
								
								<button type="submit" class="btn btn-primary">Update Timer</button>
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
	header("Timer:http://10.85.166.100/SyscoSUS/admin/login.php");
}
?>
</html>
