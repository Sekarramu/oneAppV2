<!DOCTYPE html>
<html>
<head>
<?php  
session_start(); 
include "../../php/connection/connect.php"; 
if($_SESSION['status'] == 'OK')
{
$name = $_SESSION['name'];
$username = $_SESSION['adminID'];


?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin | Profile</title>
<link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
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
						    <li><a href="changePassword.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Change Password</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-record" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Shift Employees</a></li>
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
			<li ><a href="adminHome.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<!--sekar<li><a href="../shiftEmployee.php"><svg class="glyph stroked clock"><use xlink:href="#stroked-clock"></use></svg>Employees Coming in Shift</a></li>sekar-->
			<li><a href="certiStatus.php"><svg class="glyph stroked clock"><use xlink:href="#stroked-clock"></use></svg>Modify Certification</a></li>
			<li><a href="../certiDetails.php"><span class="glyphicon glyphicon-record" aria-hidden="true"></span> Certification</a></li>
		 </ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Pages / Thoughts</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Every Question Deserves An Answer</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
	<!--sekar		<button class="btn btn-primary" onclick="addQuestionShow()">Add Employee</button> &nbsp;&nbsp; <!--sekar<button class="btn btn-info" onclick="updateQuestionShow()">Update Employee</button> sekar-->
				<div class="panel panel-default" id="updateQuestionTable">
			<!--sekar		<div class="panel-heading">Employee Table</div>-->
					<div class="panel-body">
					<section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Wall</h3>
              </div>
              <div class="panel-body">
                <form action="../php/shareThoughts.php" method="POST" >
                  <div class="form-group">
                    <textarea class="form-control" name="thoughts" placeholder="Write on the wall"></textarea>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                  <div class="pull-right">
                 <!--sekar   <div class="btn-toolbar">
                      <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i>Text</button>
                      <button type="button" class="btn btn-default"><i class="fa fa-file-image-o"></i>Image</button>
                      <button type="button" class="btn btn-default"><i class="fa fa-file-video-o"></i>Video</button>
                    </div>-->
                  </div>
                </form>
              </div>
            </div>
			<?php

								$fetchThoughtsQuery = "select * from thoughts order by id DESC";
								$fetchThoughtsQueryResult = mysqli_query($conn, $fetchThoughtsQuery);
								while ($fetchThoughtsRow = $fetchThoughtsQueryResult->fetch_assoc()) {
								$thoughtId = $fetchThoughtsRow['id'];
									
           echo  '<div class="panel panel-default post">';
           echo  '   <div class="panel-body">';
           echo  '      <div class="row">';
           echo  '        <div class="col-sm-2">';
           echo  '          <a href="profile.html" class="post-avatar thumbnail"><img src="img/user.png" alt=""><div class="text-center">';
							echo $fetchThoughtsRow['email'];
							echo '</div></a>';
      
           echo  '        </div>';
           echo  '        <div class="col-sm-10">';
           echo  '          <div class="bubble">';
           echo  '            <div class="pointer">';
           echo  '              <p>';
							echo $fetchThoughtsRow['question'];
							echo '</p>';
           echo  '            </div>';
           echo  '            <div class="pointer-border"></div>';
           echo  '          </div>';
           echo  '       <!--sekar   <p class="post-actions"><a href="#">Comment</a> - <a href="#">Like</a> - <a href="#">Follow</a> - <a href="#">Share</a></p>-->';
                               
									
		   echo  '          <div class="comment-form">';
           echo  '            <form class="form-inline" action="../php/updateComment.php" method="POST" >';
           echo  '             <div class="form-group">';
           echo  '               <input type="text" class="form-control" name="comment" id="comment" placeholder="enter comment">';
		   echo  '               <input type="hidden" class="form-control" name="thought" id="thought" value='.$fetchThoughtsRow['id'].'>';
           echo  '             </div>';
           echo  '             <button type="submit" class="btn btn-default">Add</button>';
           echo  '           </form>';
           echo  '          </div>';
		    $fetchCommentsQuery = "select * from comments where thoughtId ='$thoughtId'";
								$fetchCommentsQueryResult = mysqli_query($conn, $fetchCommentsQuery);
								while ($fetchCommentsRow = $fetchCommentsQueryResult->fetch_assoc()) {
           echo  '          <div class="clearfix"></div>';

           echo  '          <div class="comments">';
           echo  '            <div class="comment">';
           echo  '              <a href="#" class="comment-avatar pull-left"><img src="img/user.png" alt=""></a>';
           echo  '              <div class="comment-text">';
           echo  '                <p>';
								echo $fetchCommentsRow['comments'];
								echo '</p>';
           echo  '              </div>';
           echo  '          </div>';
		   echo  '             <div class="clearfix"></div>';
           echo  '          </div>';
								}
			echo '					</div>';
echo '                 </div>';
      echo '        </div>';
          echo '  </div>';
								}
								?>
		  
                <!--sekar       <div class="clearfix"></div>
                      <div class="comment">
                        <a href="#" class="comment-avatar pull-left"><img src="img/user.png" alt=""></a>
                        <div class="comment-text">
                         <p>
									echo $I am just going to paste in a paragraph, then we will add another clearfix.</p>
                         </div>
                       </div>
                      <div class="clearfix"></div>';
                     </div>-->
								
        <!--sekar            </div>
                 </div>
              </div>
            </div>
           <!--sekar <div class="panel panel-default post">
              <div class="panel-body">
                 <div class="row">
                   <div class="col-sm-2">
                     <a href="profile.html" class="post-avatar thumbnail"><img src="img/user.png" alt=""><div class="text-center">DevUser1</div></a>
                     <div class="likes text-center">7 Likes</div>
                   </div>
                   <div class="col-sm-10">
                     <div class="bubble">
                       <div class="pointer">
                         <p>Hey I was wondering if you wanted to go check out the football game later. I heard they are supposed to be really good!</p>
                       </div>
                       <div class="pointer-border"></div>
                     </div>
                     <p class="post-actions"><a href="#">Comment</a> - <a href="#">Like</a> - <a href="#">Follow</a> - <a href="#">Share</a></p>
                     <div class="comment-form">
                       <form class="form-inline">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="enter comment">
                        </div>
                        <button type="submit" class="btn btn-default">Add</button>
                      </form>
                     </div>
                     <div class="clearfix"></div>

                     <div class="comments">
                       <div class="comment">
                         <a href="#" class="comment-avatar pull-left"><img src="img/user.png" alt=""></a>
                         <div class="comment-text">
                           <p>I am just going to paste in a paragraph, then we will add another clearfix.</p>
                         </div>
                       </div>
                       <div class="clearfix"></div>
                       <div class="comment">
                         <a href="#" class="comment-avatar pull-left"><img src="img/user.png" alt=""></a>
                         <div class="comment-text">
                           <p>I am just going to paste in a paragraph, then we will add another clearfix.</p>
                         </div>
                       </div>
                       <div class="clearfix"></div>
                     </div>
                   </div>
                 </div>
              </div>
            </div>
            <div class="panel panel-default post">
              <div class="panel-body">
                 <div class="row">
                   <div class="col-sm-2">
                     <a href="profile.html" class="post-avatar thumbnail"><img src="img/user.png" alt=""><div class="text-center">DevUser1</div></a>
                     <div class="likes text-center">7 Likes</div>
                   </div>
                   <div class="col-sm-10">
                     <div class="bubble">
                       <div class="pointer">
                         <p>Hey I was wondering if you wanted to go check out the football game later. I heard they are supposed to be really good!</p>
                       </div>
                       <div class="pointer-border"></div>
                     </div>
                     <p class="post-actions"><a href="#">Comment</a> - <a href="#">Like</a> - <a href="#">Follow</a> - <a href="#">Share</a></p>
                     <div class="comment-form">
                       <form class="form-inline">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="enter comment">
                        </div>
                        <button type="submit" class="btn btn-default">Add</button>
                      </form>
                     </div>
                     <div class="clearfix"></div>

                     <div class="comments">
                       <div class="comment">
                         <a href="#" class="comment-avatar pull-left"><img src="img/user.png" alt=""></a>
                         <div class="comment-text">
                           <p>I am just going to paste in a paragraph, then we will add another clearfix.</p>
                         </div>
                       </div>
                       <div class="clearfix"></div>
                       <div class="comment">
                         <a href="#" class="comment-avatar pull-left"><img src="img/user.png" alt=""></a>
                         <div class="comment-text">
                           <p>I am just going to paste in a paragraph, then we will add another clearfix.</p>
                         </div>
                       </div>
                       <div class="clearfix"></div>
                     </div>
                   </div>
                 </div>
              </div>
            </div>sekar-->
          </div>
          </div>
          </div>
        </div>
      </div>
    </section>

			<!--sekar			<table data-toggle="table" data-url="../tables/data2.json" class="table table-hover">
						    <thead>
						    <tr>
						        <th data-align="right">Id</th>
						        <th >Employee Name</th>
						        <th >Username</th>
								<th>Action</th>
						    </tr>
						    </thead>
							<tr>-->
							<?php
/*
								$fetchEmployeeQuery = "select * from admin where username ='$username'";
								$fetchEmployeeQueryResult = mysqli_query($conn, $fetchEmployeeQuery);
								while ($fetchEmployeeRow = $fetchEmployeeQueryResult->fetch_assoc()) {
										$qid = $fetchEmployeeRow['id'];
								
										echo '<tr><td>';
										echo $fetchEmployeeRow['id'];
										echo '</td><td>';
										echo $fetchEmployeeRow['Name'];
										echo '</td><td>';
										if($fetchEmployeeRow['username'] != NULL || $fetchEmployeeRow['username'] != '')
										{
										echo $fetchEmployeeRow['username'];
										}
										else
										{
										echo "------";
										}
										
										echo '</td>';
										
										
										
										echo '<td>';
										
										echo "<button class='btn btn-info btn-xs' onclick=\"{
										document.getElementById('updateQuestionTable').style.display = 'none';
										document.getElementById('updateQuestionForm').style.display = '';
										document.getElementById('employeeid').value = '".$qid."';
										document.getElementById('name').value = '".$fetchEmployeeRow['Name']."';
										document.getElementById('emailId').value = '".$fetchEmployeeRow['username']."';
										document.getElementById('oldPassword').value = '".$fetchEmployeeRow['password']."';
										}\">Update</button><hr/>";
										#echo "<button class='btn btn-warning btn-xs' onclick=\"if(confirm('Confirm Delete Action on Question ".$qid."') == true){location.href='../php/deleteQuestion.php?qid=".$qid."'}\">Delete</button>";
										 echo "<input type='hidden' id='qid$qid' value='" .$qid."'>";
										echo '</td></tr>';
										
								}

*/
?>
			<!--sekar				</tr>
						</table>-->
					</div>
				</div>
			</div>
			
		</div><!--/.row-->				
		
		
		<div class="row" id="updateQuestionForm" style="display:none;">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Update Employee</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="../php/updatePassword.php" method="POST">
							     
								<div class="form-group">
									<label>ID</label>
									<input name="employeeid" id="employeeid" class="form-control" readonly >
								</div>
								
								<div class="form-group">
									<label>Employee Name</label>
									<input type="text" name="name"  id="name" class="form-control" readonly>
								</div>
																
								<div class="form-group">
									<label>User Name</label>
									<input type="text" name="emailId"  id="emailId" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Old Password</label>
									<input type=password name="oldPassword"  id="oldPassword" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>New Password</label>
									<input type="text" name="newpassword"  id="newpassword"  class="form-control" placeholder="Please Enter New password" required>
								</div>

								<button type="submit" class="btn btn-primary">Update Password</button>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
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
	header("Location:http://10.87.166.79/EmployeeSUS/admin/login.php");
}
?>
</html>


