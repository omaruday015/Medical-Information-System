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
$sql = "CREATE TABLE informations (
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
uname VARCHAR(30) NOT NULL,
pass VARCHAR(30)  NOT NULL

)";

if (mysqli_query($conn, $sql)) {
    echo "Table informations created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($conn);
?>