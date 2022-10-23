<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project411";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE profile (
name VARCHAR(30) NOT NULL,
deptname VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
hname VARCHAR(30) NOT NULL,
cnumber VARCHAR(30)  NOT NULL,
availability VARCHAR(30)  NOT NULL,
pic VARCHAR(300)  NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table profile created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($conn);
?>