<?php
session_start();
?>


<html>
<head>
      <title>HomePage</title>
	  <link rel="stylesheet" type="text/css" href="css/afterlogin.css">
</head>
<body>
   <header>
       <div class="main">
	   <div id="logo_left">
                    <h1><marquee behavior="scroll" direction="right">Welcome  <?php echo $_SESSION['uname']; ?></marquee> </h1>
</div>          
		 <div class ="button">
		    <a href="adddetails.php" class="btn">Add Details</a>
			<a href="delete.php" class="btn">Delete Details</a>
			<a href="update.php" class="btn">Update Details</a>
			<a href="logout.php" class="btn">LOG OUT</a>
		     
		
		
		
		
		
		</div>
		  
		</div><br/> <br/><br/> <br/><br/> <br/><br/> <br/>
		
    </header>
</body>
</html>	
		