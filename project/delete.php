<?php
session_start();

$user=$_SESSION['uname'];

$con = mysqli_connect('localhost', 'root','');
mysqli_select_db($con, 'project411');
$s = "SELECT * FROM informations WHERE uname = '$user'";
$result = mysqli_query($con, $s);
while($row = mysqli_fetch_assoc($result)) {
        $mail=$row["email"];
    }

$sql = "DELETE FROM profile WHERE email = '$mail'";
if(mysqli_query($con, $sql))
{
	header('location: afterlogin.php' );
}

mysqli_close($con);
?>