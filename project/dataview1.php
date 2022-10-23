
<?php
session_start();
?>

<head>
 <title>Table with database</title>
<link rel="stylesheet" type="text/css" href="css/afterlogin.css">
 </head>
<body>
<header>
       <div class="main">
	   <div id="logo_left">
                    <h1><marquee behavior="scroll" direction="right">Welcome  <?php echo $_SESSION['uname']; ?></marquee> </h1>
</div>          
	<ul>
		     <li class="active"><a href="home.html">Home</a></li>     
			 </ul>
			
		</div><br/> <br/><br/> <br/><br/> <br/><br/> <br/>
		
    
 <table cellspacing="30">
 <tr>
  <th>Name</th>
  
  <th>Department</th> 
  
    <th>Email</th>
	<th></th>
<th>Hospital Name</th>
<th>Contact Number</th>
<th></th>
<th>Availability</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "project411");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT  name, deptname,email,hname,cnumber,availability FROM profile";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["name"]. "</td> <td>" . $row["deptname"]. "</td><td>" . $row["email"]. "</td><td><a href='delete.php?em=$result[email]'> DELETE</a> </td><td>" . $row["hname"]. "</td><td>" .$row["cnumber"]. " </td><td><a href='delete.php?cnum=$result[cnumber]'> DELETE</a> </td><td>" .$row["availability"]. " </td><td><a href='delete.php?avail=$result[availability]'> DELETE</a> </td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</header>
</body>
</html>