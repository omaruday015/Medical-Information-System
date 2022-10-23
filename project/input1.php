<?php

 $name = filter_input(INPUT_POST, 'name');
 $deptname = filter_input(INPUT_POST, 'deptname');
 $email = filter_input(INPUT_POST, 'email');
 $hname = filter_input(INPUT_POST, 'hname');
 $cnumber = filter_input(INPUT_POST, 'cnumber');
 $availability = filter_input(INPUT_POST, 'availability');
 if (!empty($name)){
     if (!empty($deptname)){
         if (!empty($hname)){
         
         $host = "localhost";
         $username = "root";
         $password = "";
         $dbname = "project411";

         // Create connection
         $conn = new mysqli ($host, $username, $password, $dbname);
    
         if (mysqli_connect_error()){
             die('Connect Error ('. mysqli_connect_errno() .') '
                 . mysqli_connect_error());
         }
         else{
             $sql = "INSERT INTO profile(name, deptname, email, hname, cnumber, availability)
             values ('$name','$deptname','$email','$hname','$cnumber', '$availability')";
    
	
            if ($conn->query($sql)){
                
                header('Location: dataview.php');
            }
             else{
                 echo "Error: ". $sql ."
                 ". $conn->error;
             }
             $conn->close();
         }
     }
     else{
         echo "name should not be empty";
         die();
     }
 }
    else{
        echo "deptname should not be empty";
        die();
    }
 }
 else{
        echo "availability should not be empty";
        die();
 }
     
?>