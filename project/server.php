<?php
session_start();

$name = "";
$address = "";
$id = 0;
$edit_state = false;

$db = mysqli_connect('localhost', 'root','', 'crud');

if(isset($_POST['save'])){
	$name = $_POST['name'];
	$address = $_POST['address'];
	
	$query = "INSERT INTO info(name, address) VALUES ('$name', '$address')";
	mysqli_query($db, $query);
	$_SESSION['msg'] = "Adress saved";
	header('location: test.php');
	
}

if(isset($_POST['update'])) {
	$name = mysql_real_escape_string($_POST['name']);
	$address = mysql_real_escape_string($_POST['address']);
	$id = mysql_real_escape_string($_POST['id']);
	
	mysqli_query($db, "UPDATE info SET name='$name', address='$adress WHERE id=$id'");
	$_SESSION['msg'] = "Adress updated";
	header('location: test.php');
}

if(isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['msg'] = "Adress deleted";
	header('location: test.php');
}

$result = mysqli_query($db, "SELECT * FROM info");



?>