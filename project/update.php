
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
		       <!--input type="text" name="name" placeholder="Name.." required-->
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
//$name = filter_input(INPUT_POST, 'name');
 $deptname = filter_input(INPUT_POST, 'deptname');
	//$email = filter_input(INPUT_POST, 'email');
 $hname = filter_input(INPUT_POST, 'hname');
 $cnumber = filter_input(INPUT_POST, 'cnumber');
 $availability = filter_input(INPUT_POST, 'availability');
  $pic = filter_input(INPUT_POST, 'pic');
$user =$_SESSION['uname'];
$con = mysqli_connect('localhost', 'root','');
mysqli_select_db($con, 'project411');
$s = "SELECT * FROM informations WHERE uname = '$user'";
$result = mysqli_query($con, $s);
while($row = mysqli_fetch_assoc($result)) {
        $mail=$row["email"];
    }

echo $mail;

$sql = "UPDATE profile SET deptname ='$deptname', email = '$mail', hname='$hname', cnumber = '$cnumber', availability= '$availability', pic = '$pic' WHERE email = '$mail'";
mysqli_query($con, $sql);

mysqli_close($con);
?>