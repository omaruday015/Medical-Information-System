<?php

session_start();
$con = mysqli_connect('localhost', 'root','');
mysqli_select_db($con, 'project411');
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$s = "SELECT * FROM informations WHERE uname = '$uname' && pass = '$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
	$_SESSION['uname'] = $uname;
	header('location: afterlogin.php' );
	
}
else{
	header('location: login.php' );
}
?>