<<<<<<< HEAD
<?php
session_start(); //to ensure you are using same session
unset($_SESSION['username']);
unset($_SESSION['status']);
session_destroy(); //destroy the session
header("Location:http://localhost/employeeSUS/employeelogin/login.php");
exit();
=======
<?php
session_start(); //to ensure you are using same session
unset($_SESSION['username']);
unset($_SESSION['status']);
session_destroy(); //destroy the session
header("Location:http://localhost/employeeSUS/employeelogin/login.php");
exit();
>>>>>>> b785fa47186e5fbc55784ca4b66c68a701013d8a
?>