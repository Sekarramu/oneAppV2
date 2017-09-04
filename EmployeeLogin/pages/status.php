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
						    <li><a href="changePassword.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Change Password</a></li>
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
			<li><a href="employeeHome.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Personal Info</a></li>
			<li class="active"><a href="status.php"><svg class="glyph stroked clock"><use xlink:href="#stroked-clock"></use></svg>Certification Status</a></li>
	<!--sekar		<li><a href="../tables.php"><svg class="glyph stroked clock"><use xlink:href="#stroked-clock"></use></svg> Employees in Shifts</a></li>sekar-->
		 </ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Pages / Status</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Certification Status</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-primary" onclick="addQuestionShow()">Add Certification</button> &nbsp;&nbsp; <!--sekar<button class="btn btn-info" onclick="updateQuestionShow()">Update Employee</button> sekar-->
				<div class="panel panel-default" id="updateQuestionTable">
			<!--sekar		<div class="panel-heading">Employee Table</div>-->
					<div class="panel-body">
						<table data-toggle="table" data-url="../tables/data2.json" class="table table-hover">
						    <thead>
						    <tr>
						        <th data-align="right">Id</th>
						        <th >Certification Name</th>
						        <th >Registered?</th>
								<th >Slots Booked on</th>
								<th >Status</th>
							<!--sekar	<th >Mode of Transport</th>
								<th >Infosys ID</th>
								<th >Address</th>
								<th >Contact No</th>
								<th> Birthday </th>sekar-->
								<th>Action</th>
						    </tr>
						    </thead>
							<tr>
<?php
$username1 = 'Sekar_Ramu';
								$fetchCertiQuery = "select * from certification where email ='$username'";
								$fetchCertiQueryResult = mysqli_query($conn, $fetchCertiQuery);
								while ($fetchCertiRow = $fetchCertiQueryResult->fetch_assoc()) {
										$qid = $fetchCertiRow['id'];
								
										echo '<tr><td>';
										echo $fetchCertiRow['id'];
										echo '</td><td>';
										echo $fetchCertiRow['name'];
										echo '</td><td>';
										if($fetchCertiRow['applied'] != NULL || $fetchCertiRow['applied'] != '')
										{
										echo $fetchCertiRow['applied'];
										}
										else
										{
										echo "------";
										}
										echo '</td><td>';
										if($fetchCertiRow['booked'] != NULL || $fetchCertiRow['booked'] != '')
										{
										echo $fetchCertiRow['booked'];
										}
										else
										{
										echo "------";
										}
										
										echo '</td><td>';
										
										if($fetchCertiRow['status'] != NULL || $fetchCertiRow['status'] != '')
										{
										echo $fetchCertiRow['status'];
										}
										else
										{
										echo "------";
										}
										
										echo '</td><td>';					
																	
																			
										
										
																	
										echo "<button class='btn btn-info btn-xs' onclick=\"{
										document.getElementById('updateQuestionTable').style.display = 'none';
										document.getElementById('updateQuestionForm').style.display = '';
										document.getElementById('id').value = '".$qid."';
										document.getElementById('name').value = '".$fetchCertiRow['name']."';
										document.getElementById('applied').value = '".$fetchCertiRow['applied']."';
										document.getElementById('booked').value = '".$fetchCertiRow['booked']."';
										document.getElementById('status').value = '".$fetchCertiRow['status']."';
										document.getElementById('email').value = '".$fetchCertiRow['email']."';									
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
			
		</div><!--/.row-->				
		
		<div class="row" id="addQuestionForm" style="display:none;">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Add Certification</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="../php/addCertification.php" method="POST">
							
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" class="form-control" placeholder="Please Enter Certification Name">
								</div>
																
								<div class="form-group">
									<label>Registered?</label>
									<input type="text" name="applied" class="form-control" placeholder="Please Mention Yes or No">
								</div>
								<div class="form-group">
									<label>Booked Slots on?</label>
									<input type="text" name="booked" class="form-control" placeholder="Please Enter Certification Date">
								</div>
								<div class="form-group">
									<label>Status</label>
									<input type="text" name="status" class="form-control" placeholder="Please Enter the Status of the course">
								</div>
								
						<!--	sekar	<div class="form-group">
									<label>Infosys ID</label>
									<input type="text" name="email" class="form-control" placeholder="Please Enter Infosys ID">
								</div>-->
								
								
								
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
								<button type="submit" class="btn btn-primary">Insert Certification</button>
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
					<div class="panel-heading">Update Certification</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="../php/updateCerti.php" method="POST">
							     
								<div class="form-group">
									<label>ID</label>
									<input name="id" id="id" class="form-control" readonly >
								</div>
								<div class="form-group">
									<label>Infosys ID</label>
									<input type="text" name="email"  id="email"  class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Certification Name</label>
									<input type="text" name="name"  id="name" class="form-control" readonly >
								</div>
																
								<div class="form-group">
									<label>Registered?</label>
									<input type="text" name="applied"  id="applied" class="form-control" placeholder="Please Mention Yes or No">
								</div>
								<div class="form-group">
									<label>Booked on?</label>
									<input type="text" name="booked"  id="booked" class="form-control" placeholder="Please Enter the date">
								</div>
								<div class="form-group">
									<label>Status</label>
									<input type="text" name="status"  id="status"  class="form-control" placeholder="Please Enter Status">
								</div>
						<!--sekar		<div class="form-group">
									<label>Mode Of Transport</label>
									<input type="text" name="modeoftransport"  id="modeoftransport"  class="form-control" placeholder="Please Enter Mode Of Transport">
								</div>
								
								
								<div class="form-group">
									<label>Address</label>
									<input type="text" name="address" id="address" class="form-control" placeholder="Please Enter Address">
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
								<button type="submit" class="btn btn-primary">Update Details</button>
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
	header("Location:http://localhost/EmployeeSUS/admin/login.php");
}
?>
</html>
