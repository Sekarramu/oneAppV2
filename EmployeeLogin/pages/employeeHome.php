<<<<<<< HEAD
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
<style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body {
  background: #333333;
}
</style>

	<?php
	if(isset($_SESSION['update']))
	{
	$update = $_SESSION['update'];
	
	echo "<script>alert('".$update."');</script>";
	unset($_SESSION['update']);
	}
=======
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
<style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body {
  background: #333333;
}
</style>

	<?php
	if(isset($_SESSION['update']))
	{
	$update = $_SESSION['update'];
	
	echo "<script>alert('".$update."');</script>";
	unset($_SESSION['update']);
	}
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
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
<<<<<<< HEAD
						<ul class="dropdown-menu" role="menu">
						    <li><a href="changePassword.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Change Password</a></li>
						<!--sekar	<li><a href="timer.php"><span class="glyphicon glyphicon-record" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Shift Employees</a></li>sekar-->
							<li><a href="../php/logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Logout</a></li>
=======
						<ul class="dropdown-menu" role="menu">
						    <li><a href="changePassword.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Change Password</a></li>
						<!--sekar	<li><a href="timer.php"><span class="glyphicon glyphicon-record" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Shift Employees</a></li>sekar-->
							<li><a href="../php/logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Logout</a></li>
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
<<<<<<< HEAD
		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
			<hr/>
		
		<ul class="nav menu">
			<li class="active"><a href="employeeHome.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Personal Info</a></li>
			<li><a href="status.php"><svg class="glyph stroked clock"><use xlink:href="#stroked-clock"></use></svg>Certification Status</a></li>
	<!--sekar		<li><a href="../tables.php"><svg class="glyph stroked clock"><use xlink:href="#stroked-clock"></use></svg> Employees in Shifts</a></li>sekar-->
		 </ul>

=======
		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
			<hr/>
		
		<ul class="nav menu">
			<li class="active"><a href="employeeHome.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Personal Info</a></li>
			<li><a href="status.php"><svg class="glyph stroked clock"><use xlink:href="#stroked-clock"></use></svg>Certification Status</a></li>
	<!--sekar		<li><a href="../tables.php"><svg class="glyph stroked clock"><use xlink:href="#stroked-clock"></use></svg> Employees in Shifts</a></li>sekar-->
		 </ul>

>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
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
<<<<<<< HEAD
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
	<!--sekar		<button class="btn btn-primary" onclick="addQuestionShow()">Add Employee</button> &nbsp;&nbsp; <!--sekar<button class="btn btn-info" onclick="updateQuestionShow()">Update Employee</button> sekar-->
				<div class="panel panel-default" id="updateQuestionTable">
			<!--sekar		<div class="panel-heading">Employee Table</div>-->
					<div class="panel-body">
						<table data-toggle="table" data-url="../tables/data2.json" class="table table-hover">
						    <thead>
						    <tr>
						        <th data-align="right">Id</th>
						        <th >Employee</th>
						        <th >Team</th>
								<th >Reporting To</th>
								<th >Manager</th>
								
								<th >Infosys ID</th>
								
								<th >Contact No</th>
								<th> Birthday </th>
								<th>Action</th>
						    </tr>
						    </thead>
							<tr>
<?php
$username1 = 'Sekar_Ramu';
								$fetchQuestionQuery = "select * from employee where email ='$username'";
								$fetchQuestionQueryResult = mysqli_query($conn, $fetchQuestionQuery);
								while ($fetchQuestionRow = $fetchQuestionQueryResult->fetch_assoc()) {
										$qid = $fetchQuestionRow['id'];
								
										echo '<tr><td>';
										echo $fetchQuestionRow['id'];
										echo '</td><td>';
										echo $fetchQuestionRow['name'];
										echo '</td><td>';
										if($fetchQuestionRow['team'] != NULL || $fetchQuestionRow['team'] != '')
										{
										echo $fetchQuestionRow['team'];
										}
										else
										{
										echo "------";
										}
										echo '</td><td>';
										if($fetchQuestionRow['reportingto'] != NULL || $fetchQuestionRow['reportingto'] != '')
										{
										echo $fetchQuestionRow['reportingto'];
										}
										else
										{
										echo "------";
										}
										
										echo '</td><td>';
										
										if($fetchQuestionRow['manager'] != NULL || $fetchQuestionRow['manager'] != '')
										{
										echo $fetchQuestionRow['manager'];
										}
										else
										{
										echo "------";
										}
										
										echo '</td><td>';
										
										
										
										if($fetchQuestionRow['email'] != NULL || $fetchQuestionRow['email'] != '')
										{
										echo $fetchQuestionRow['email'];
										}
										else
										{
										echo "------";
										}
										
										echo '</td><td>';
										
										echo $fetchQuestionRow['mobileno'];
										echo '</td><td>';
										echo $fetchQuestionRow['birthday'];
										echo '</td><td>';
										
										echo "<button class='btn btn-info btn-xs' onclick=\"{
										document.getElementById('updateQuestionTable').style.display = 'none';
										document.getElementById('updateQuestionForm').style.display = '';
										document.getElementById('employeeid').value = '".$qid."';
										document.getElementById('name').value = '".$fetchQuestionRow['name']."';
										document.getElementById('team').value = '".$fetchQuestionRow['team']."';
										document.getElementById('reportingto').value = '".$fetchQuestionRow['reportingto']."';
										document.getElementById('manager').value = '".$fetchQuestionRow['manager']."';
										document.getElementById('email').value = '".$fetchQuestionRow['email']."';
										document.getElementById('birthday').value = '".$fetchQuestionRow['birthday']."';
										document.getElementById('mobileno').value = '".$fetchQuestionRow['mobileno']."';											
										}\">Update</button><hr/>";
										#echo "<button class='btn btn-warning btn-xs' onclick=\"if(confirm('Confirm Delete Action on Question ".$qid."') == true){location.href='../php/deleteQuestion.php?qid=".$qid."'}\">Delete</button>";
										 echo "<input type='hidden' id='qid$qid' value='" .$qid."'>";
										echo '</td></tr>';
										
								}


?>
							</tr>
						</table>
					</div>
				</div>
			</div>
			
=======
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
	<!--sekar		<button class="btn btn-primary" onclick="addQuestionShow()">Add Employee</button> &nbsp;&nbsp; <!--sekar<button class="btn btn-info" onclick="updateQuestionShow()">Update Employee</button> sekar-->
				<div class="panel panel-default" id="updateQuestionTable">
			<!--sekar		<div class="panel-heading">Employee Table</div>-->
					<div class="panel-body">
						<table data-toggle="table" data-url="../tables/data2.json" class="table table-hover">
						    <thead>
						    <tr>
						        <th data-align="right">Id</th>
						        <th >Employee</th>
						        <th >Team</th>
								<th >Reporting To</th>
								<th >Manager</th>
								
								<th >Infosys ID</th>
								
								<th >Contact No</th>
								<th> Birthday </th>
								<th>Action</th>
						    </tr>
						    </thead>
							<tr>
<?php
$username1 = 'Sekar_Ramu';
								$fetchQuestionQuery = "select * from employee where email ='$username'";
								$fetchQuestionQueryResult = mysqli_query($conn, $fetchQuestionQuery);
								while ($fetchQuestionRow = $fetchQuestionQueryResult->fetch_assoc()) {
										$qid = $fetchQuestionRow['id'];
								
										echo '<tr><td>';
										echo $fetchQuestionRow['id'];
										echo '</td><td>';
										echo $fetchQuestionRow['name'];
										echo '</td><td>';
										if($fetchQuestionRow['team'] != NULL || $fetchQuestionRow['team'] != '')
										{
										echo $fetchQuestionRow['team'];
										}
										else
										{
										echo "------";
										}
										echo '</td><td>';
										if($fetchQuestionRow['reportingto'] != NULL || $fetchQuestionRow['reportingto'] != '')
										{
										echo $fetchQuestionRow['reportingto'];
										}
										else
										{
										echo "------";
										}
										
										echo '</td><td>';
										
										if($fetchQuestionRow['manager'] != NULL || $fetchQuestionRow['manager'] != '')
										{
										echo $fetchQuestionRow['manager'];
										}
										else
										{
										echo "------";
										}
										
										echo '</td><td>';
										
										
										
										if($fetchQuestionRow['email'] != NULL || $fetchQuestionRow['email'] != '')
										{
										echo $fetchQuestionRow['email'];
										}
										else
										{
										echo "------";
										}
										
										echo '</td><td>';
										
										echo $fetchQuestionRow['mobileno'];
										echo '</td><td>';
										echo $fetchQuestionRow['birthday'];
										echo '</td><td>';
										
										echo "<button class='btn btn-info btn-xs' onclick=\"{
										document.getElementById('updateQuestionTable').style.display = 'none';
										document.getElementById('updateQuestionForm').style.display = '';
										document.getElementById('employeeid').value = '".$qid."';
										document.getElementById('name').value = '".$fetchQuestionRow['name']."';
										document.getElementById('team').value = '".$fetchQuestionRow['team']."';
										document.getElementById('reportingto').value = '".$fetchQuestionRow['reportingto']."';
										document.getElementById('manager').value = '".$fetchQuestionRow['manager']."';
										document.getElementById('email').value = '".$fetchQuestionRow['email']."';
										document.getElementById('birthday').value = '".$fetchQuestionRow['birthday']."';
										document.getElementById('mobileno').value = '".$fetchQuestionRow['mobileno']."';											
										}\">Update</button><hr/>";
										#echo "<button class='btn btn-warning btn-xs' onclick=\"if(confirm('Confirm Delete Action on Question ".$qid."') == true){location.href='../php/deleteQuestion.php?qid=".$qid."'}\">Delete</button>";
										 echo "<input type='hidden' id='qid$qid' value='" .$qid."'>";
										echo '</td></tr>';
										
								}


?>
							</tr>
						</table>
					</div>
				</div>
			</div>
			
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
		</div><!--/.row-->				
		
		<div class="row" id="addQuestionForm" style="display:none;">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Add Question</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="../php/addQuestion.php" method="POST">
							
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" class="form-control" placeholder="Please Enter Name">
								</div>
																
								<div class="form-group">
									<label>Team</label>
									<input type="text" name="team" class="form-control" placeholder="Please Enter Team details">
<<<<<<< HEAD
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
									<label>Infosys ID</label>
									<input type="text" name="email" class="form-control" placeholder="Please Enter Infosys ID">
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
=======
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
									<label>Infosys ID</label>
									<input type="text" name="email" class="form-control" placeholder="Please Enter Infosys ID">
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
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
							
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
<<<<<<< HEAD
		</div><!-- /.row -->
		
		
		<div class="row" id="updateQuestionForm" style="display:none;">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Update Employee</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="../php/updateEmployee.php" method="POST">
							     
								<div class="form-group">
									<label>ID</label>
									<input name="employeeid" id="employeeid" class="form-control" readonly >
								</div>
								
								<div class="form-group">
									<label>Employee Name</label>
									<input type="text" name="name"  id="name" class="form-control" readonly >
								</div>
																
								<div class="form-group">
									<label>Team</label>
									<input type="text" name="team"  id="team" class="form-control" placeholder="Please Enter Team He/She belongs to">
								</div>
								<div class="form-group">
									<label>Reporting To</label>
									<input type="text" name="reportingto"  id="reportingto" class="form-control" placeholder="Please Enter Direct Report">
								</div>
								<div class="form-group">
									<label>Manager</label>
									<input type="text" name="manager"  id="manager"  class="form-control" placeholder="Please Enter Manager Name">
								</div>
								
								<div class="form-group">
									<label>Infosys ID</label>
									<input type="text" name="email"  id="email"  class="form-control" readonly>
								</div>
								
								
								<div class="form-group">
									<label>Mobile No</label>
									<input type="text" name="mobileno" id="mobileno" class="form-control" placeholder="Please Enter Mobile No">
								</div>
								<div class="form-group">
									<label>Birthday</label>
									<input type="text" name="birthday" id="birthday" class="form-control" placeholder="Please Enter Birthday">
								</div>
					<!--sekar			<label>Input Type</label>
									<div class="radio">
										<label>
											<input type="radio" name="updateInputtype" id="updateText" value="text">Text
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="updateInputtype" id="updateTextArea" value="textarea">Comments
										</label>
									</div>  sekar-->
								<button type="submit" class="btn btn-primary">Update Employee</button>
								<button type="reset" class="btn btn-default">Reset</button>
							
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
	
	
	<div class="row" id="updatePasswordForm" style="display:none;">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Update Employee</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="../php/changePassword.php" method="POST">
							     
								<div class="form-group">
									<label>ID</label>
									<input name="passwordId" id="passwordId" class="form-control" readonly >
								</div>
								
								<div class="form-group">
									<label>Employee Name</label>
									<input type="text" name="passwordName"  id="passwordName" class="form-control" readonly >
								</div>
																
								
								<div class="form-group">
									<label>User Name</label>
									<input type="text" name="passwordEmail"  id="passwordEmail" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Old Password</label>
									<input type="text" name="passwordOld"  id="passwordOld"  class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>New Password</label>
									<input type="text" name="passwordNew"  id="passwordNew"  class="form-control"  placeholder="Please Enter the New Password" required>
								</div>
								
								
								
								
								
					
								<button type="submit" class="btn btn-primary">Update Password</button>
								<button type="reset" class="btn btn-default">Reset</button>
							
							
							</form>
						</div>
					</div>
				</div><!-- /.col-->
			</div><!-- /.row -->
		</div>		
	</div><!--/.main-->


	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
=======
		</div><!-- /.row -->
		
		
		<div class="row" id="updateQuestionForm" style="display:none;">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Update Employee</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="../php/updateEmployee.php" method="POST">
							     
								<div class="form-group">
									<label>ID</label>
									<input name="employeeid" id="employeeid" class="form-control" readonly >
								</div>
								
								<div class="form-group">
									<label>Employee Name</label>
									<input type="text" name="name"  id="name" class="form-control" readonly >
								</div>
																
								<div class="form-group">
									<label>Team</label>
									<input type="text" name="team"  id="team" class="form-control" placeholder="Please Enter Team He/She belongs to">
								</div>
								<div class="form-group">
									<label>Reporting To</label>
									<input type="text" name="reportingto"  id="reportingto" class="form-control" placeholder="Please Enter Direct Report">
								</div>
								<div class="form-group">
									<label>Manager</label>
									<input type="text" name="manager"  id="manager"  class="form-control" placeholder="Please Enter Manager Name">
								</div>
								
								<div class="form-group">
									<label>Infosys ID</label>
									<input type="text" name="email"  id="email"  class="form-control" readonly>
								</div>
								
								
								<div class="form-group">
									<label>Mobile No</label>
									<input type="text" name="mobileno" id="mobileno" class="form-control" placeholder="Please Enter Mobile No">
								</div>
								<div class="form-group">
									<label>Birthday</label>
									<input type="text" name="birthday" id="birthday" class="form-control" placeholder="Please Enter Birthday">
								</div>
					<!--sekar			<label>Input Type</label>
									<div class="radio">
										<label>
											<input type="radio" name="updateInputtype" id="updateText" value="text">Text
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="updateInputtype" id="updateTextArea" value="textarea">Comments
										</label>
									</div>  sekar-->
								<button type="submit" class="btn btn-primary">Update Employee</button>
								<button type="reset" class="btn btn-default">Reset</button>
							
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
	
	
	<div class="row" id="updatePasswordForm" style="display:none;">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Update Employee</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="../php/changePassword.php" method="POST">
							     
								<div class="form-group">
									<label>ID</label>
									<input name="passwordId" id="passwordId" class="form-control" readonly >
								</div>
								
								<div class="form-group">
									<label>Employee Name</label>
									<input type="text" name="passwordName"  id="passwordName" class="form-control" readonly >
								</div>
																
								
								<div class="form-group">
									<label>User Name</label>
									<input type="text" name="passwordEmail"  id="passwordEmail" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Old Password</label>
									<input type="text" name="passwordOld"  id="passwordOld"  class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>New Password</label>
									<input type="text" name="passwordNew"  id="passwordNew"  class="form-control"  placeholder="Please Enter the New Password" required>
								</div>
								
								
								
								
								
					
								<button type="submit" class="btn btn-primary">Update Password</button>
								<button type="reset" class="btn btn-default">Reset</button>
							
							
							</form>
						</div>
					</div>
				</div><!-- /.col-->
			</div><!-- /.row -->
		</div>		
	</div><!--/.main-->


	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
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
<<<<<<< HEAD
</body>
<?php
}
else
{
	header("Location:http://localhost/EmployeeSUS/admin/login.php");
}
?>
</html>
=======
</body>
<?php
}
else
{
	header("Location:http://localhost/EmployeeSUS/admin/login.php");
}
?>
</html>
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
