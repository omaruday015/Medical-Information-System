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
	$_SESSION['uname']  = $uname;
	header('location: afterlogin.php' );
	
}
else{
	header('location: login.php' );
}
?>
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
<html>
<head>
      <title>HomePage</title>
	  <link rel="stylesheet" type="text/css" href="css/sup.css">
</head>
<body>
   <header>
       <div class="main">
	   <div id="logo_left">
                    <h1><marquee behavior="scroll" direction="right">Welcome TO S A M Medical Information Website</marquee> </h1>

                </div>
	      <ul>
		     <li><a href="home.html">Home</a></li>
			 <li><a href="signup.html">Sign Up</a></li>
			 <li class="active"><a href="login.php">Login</a></li>
			 <li><a href="patient.html">Patient</a></li>
			 <li><a href="help.html">Help</a></li>
		  </ul>
		</div><br/>
		 <div class="wrap">
		 <h2>Login Here!</h2>
		 <form action="login.php" method="POST">
		       
			   <input type="text" name="uname" placeholder="Username.." required>
			   <input type="password" name="pass" placeholder="Password.." required>
			   <input type="submit" value="Submit">
		 </form>
    
            
    </header>
</body>
</html>	
		