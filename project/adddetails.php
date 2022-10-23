<?php
session_start();
?>


<html>
<head>
      <title>HomePage</title>
	  <link rel="stylesheet" type="text/css" href="css/adddetails.css">
</head>
<body>
   <header>
       <div class="main">
	   <div id="logo_left">
                    <h1><marquee behavior="scroll" direction="right">Welcome  <?php echo $_SESSION['uname']; ?></marquee> </h1>
</div>          <ul>
		     <li><a href="login.html">LOGOUT</a></li>     
			 </ul>
			 </div>
		  <div class="wrap">
		 <h2>Fill Up The Form </h2>
		 <form method="post" enctype="multipart/form-data">
		       <input type="text" name="name" placeholder="Name.." required>
			   <input type="text" name="deptname" placeholder="Department.." required>
			   <!--input type="email" name="email" placeholder="Email.." -->
			   <input type="text" name="hname" placeholder="Hospital Name.." required >
			   <input type="tel" name="cnumber" placeholder="Contact Number.." >
			   <input type="time" name="availability" placeholder="Availability.." ><br/>
			    Picture:
			   <input type="file" name="pic" placeholder=" Choose Picture..">
			   <input type="submit" name="sub" value="signup">
		 </form>
		</div><br/> <br/><br/> <br/><br/> <br/><br/> <br/>
		
    </header>
</body>
</html>	

           
  <?php
	$name = filter_input(INPUT_POST, 'name');
 $deptname = filter_input(INPUT_POST, 'deptname');
 //$email = filter_input(INPUT_POST, 'email');
 $hname = filter_input(INPUT_POST, 'hname');
 $cnumber = filter_input(INPUT_POST, 'cnumber');
 $availability = filter_input(INPUT_POST, 'availability');
  $pic = filter_input(INPUT_POST, 'pic');
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

$conn = mysqli_connect('localhost', 'root','');
mysqli_select_db($conn, 'project411');
$s = "SELECT * FROM informations WHERE uname = '$_SESSION['uname']'";
$result = mysqli_query($conn, $s);
while($row = mysqli_fetch_assoc($result)) {
        $mail=$row["email"];
    }

  $sql = "INSERT INTO profile(name, deptname, email, hname, cnumber, availability,pic)
             values ('$name','$deptname', '$mail', '$hname','$cnumber', '$availability','$pic')";

if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>