<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Error Page | Employee Engagement Survey</title>
	    <?php include  "../php/connection/connect.php";  ?>
    
    <link rel="stylesheet" href="../css/reset.css">
	
    
        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body {
  background: #fa9075;
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
  font-size: 100px;
  font-family: Helvetica, sans-serif;
  text-shadow: 0px 2px 0px rgba(0, 0, 0, 0.2);
  color: #fff;
}
.counterup {
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
  top: 20%;
  margin-top: -15px;
  font-size: 30px;
  font-family: Helvetica, sans-serif;
  text-shadow: 0px 2px 0px rgba(0, 0, 0, 0.2);
  color: #fff;
}

    </style>
	
	
    
      
		
  </head>

  <body>

    <div class="counter" id="counter"></div>
	<h1 class="counterup">Sorry ! Try again later !</h1>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  </body>
    <?php 
if(isset( $_SESSION['endOfTimer']))
{
unset($_SESSION['endOfTimer']);
}
if(isset( $_SESSION['user']))
{
unset( $_SESSION['user']);
}
if(isset($_SESSION['answerArray']))
{
unset( $_SESSION['answerArray']);
} 
if(isset($_SESSION['timeToSubmit']))
{
unset( $_SESSION['timeToSubmit']);
} 
if(isset($_COOKIE['quesArray']))
{
unset($_COOKIE['quesArray']);
setcookie("quesArray", "", time()-3600);
}
  ?>
</html>
