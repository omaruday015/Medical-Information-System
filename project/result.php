<?php
    $conn = mysqli_connect("localhost", "root", "", "project411");
    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    } 
    if(isset($_POST['name_search'])){
        $name=$_POST['name'];
		$sql = "SELECT  name, deptname,email,hname,cnumber,availability FROM profile where name='$name'";
            $res = $conn->query($sql);
		
    }
    if(isset($_POST['hospital_search'])){
        $hospital=$_POST['hospital'];
		$sql = "SELECT  name, deptname,email,hname,cnumber,availability FROM profile where hname='$hospital'";
        $res = $conn->query($sql);
		
	}
?>
</head>
<body>
<center>

<div id="body">
	<div id="content">
    <table align="center">
    
     <tr>
    <th> Name</th>
    <th> deptname</th>
    <th> email</th>
    <th> hname</th>
    <th> cnumber</th>
    <th> availability</th>
    </tr>
    <?php
	while($row=mysqli_fetch_row($res))
	{
			?>
            <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[5]; ?></td>
	
            </tr>
            <?php
	}
	?>
    </table>
    </div>
</div>

</center>
</body>
</html>