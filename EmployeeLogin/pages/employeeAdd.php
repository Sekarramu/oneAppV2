<!DOCTYPE html>
<html>
<head>
<?php  
session_start(); 
include "../../php/connection/connect.php"; 
if($_SESSION['status'] == 'OK')
{
$name = $_SESSION['username'];
$username = $_SESSION['loginID'];

?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Employee | Employee Details</title>

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
						    <li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Change Password</a></li>
						<!--sekar	<li><a href="timer.php"><span class="glyphicon glyphicon-record" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Shift Employees</a></li>sekar-->
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
			<li class="active"><a href="employeeHome.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<!--sekar<li><a href="../shiftEmployee.php"><svg class="glyph stroked clock"><use xlink:href="#stroked-clock"></use></svg>Employees Coming in Shift</a></li>sekar-->
	<!--sekar		<li><a href="../tables.php"><svg class="glyph stroked clock"><use xlink:href="#stroked-clock"></use></svg> Employees in Shifts</a></li>sekar-->
		 </ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Pages / Employee Home</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Employee Details</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
	<!--sekar		<button class="btn btn-primary" onclick="addQuestionShow()">Add Employee</button> &nbsp;&nbsp; <!--sekar<button class="btn btn-info" onclick="updateQuestionShow()">Update Employee</button> sekar-->
			<!--sekar	<div class="panel panel-default" id="updateQuestionTable"> -->
			<!--sekar		<div class="panel-heading">Employee Table</div>-->
					<div class="panel-body">
				
				<div class="panel panel-default">
					<div class="panel-heading">Add Employee</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="../pages/addDetails.php" method="POST">
							
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" class="form-control" placeholder="Please Enter Name">
								</div>
																
								<div class="form-group">
									<label>Team</label>
									<input type="text" name="team" class="form-control" placeholder="Please Enter Team details">
								</div>
								<div class="form-group">
									<label>Reporting To</label>
									<input type="text" name="reportingto" class="form-control" placeholder="Please Enter Immediate reporting">
								</div>
								<div class="form-group">
									<label>Manager</label>
									<input type="text" name="manager" class="form-control" placeholder="Please Enter Manager">
								</div>
								<div class="form-group">
									<label>Mode Of Transport</label>
									<input type="text" name="modeoftransport" class="form-control" placeholder="Please Enter Mode Of Transport">
								</div>
								<div class="form-group">
									<label>Infosys ID</label>
									<input type="text" name="email" class="form-control" placeholder="Please Enter Infosys ID">
								</div>
								
								<div class="form-group">
									<label>Address</label>
									<input type="text" name="address" class="form-control" placeholder="Please Enter Address">
								</div>
								<div class="form-group">
									<label>Contact No</label>
									<input type="text" name="mobileno" class="form-control" placeholder="Please Enter Contact No">
								</div>
								<div>
								<label>Birthday</label>
									<input type="text" name="birthday" class="form-control" placeholder="Please Enter Birthday">
								</div>
								<!--sekar<label>Contact No</label>
									<div class="radio">
										<label>
											<input type="radio" name="inputtype" id="inputtype" value="text" checked>Text
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="inputtype" id="inputtype" value="textarea">Comments
										</label>
									</div>sekar-->
								<button type="submit" class="btn btn-primary">Insert Employee</button>
								<button type="reset" class="btn btn-default">Reset</button>
							
							</div>
						</form>
				
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	  
							
						</table>
					</div>
				</div>
			</div>
			
		</div><!--/.row-->				
		
		
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
	header("Location:http://10.87.166.79/EmployeeSUS/employeelogin/login.php");
}
?>
</html>
