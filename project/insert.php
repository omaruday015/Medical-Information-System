<?php

 $firstname = filter_input(INPUT_POST, 'firstname');
 $lastname = filter_input(INPUT_POST, 'lastname');
 $email = filter_input(INPUT_POST, 'email');
 $uname = filter_input(INPUT_POST, 'uname');
 $pass = filter_input(INPUT_POST, 'pass');

 if (!empty($firstname)){
     if (!empty($lastname)){
         if (!empty($uname)){
         
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
             $sql = "INSERT INTO informations(firstname, lastname, email, uname, pass)
             values ('$firstname','$lastname','$email','$uname','$pass')";
    
            if ($conn->query($sql)){
                
                header('Location: aftersignup.html');
            }
             else{
                 echo "Error: ". $sql ."
                 ". $conn->error;
             }
             $conn->close();
         }
     }
     else{
         echo "Username should not be empty";
         die();
     }
 }
    else{
        echo "Last name should not be empty";
        die();
    }
 }
 else{
        echo "First name should not be empty";
        die();
 }
     
?>