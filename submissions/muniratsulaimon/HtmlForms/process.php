<?php
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$phoneno=$_POST["Phoneo"];
$dob=$_POST["dob"];
$country=$_POST["country"];
$password=$_POST["password"];
$repassword=$_POST["rePassword"];
 
savetodatabase( $fname,$lname,$gender,$email,$phoneno,$dob,$country,$password,$repassword);
header('Location:sucess.html' );

 

//function definition of savetodatabase
 function savetodatabase( $fname,$lname,$gender,$email,$phoneno,$dob,$country,$password,$repassword){
    $servername="localhost:810";
    $databasename ="Signup";
    $username="root";
    $pasword="";
    //conect to database signup
    $conn= mysqli_connect( $servername,$username,$pasword,$databasename);
        if (!$conn){
            die( "connection failed" . "mysql connect error");
        }
    $query = "INSERT into Signup( firstname, lastname,gender,email,phoneno,dateofbirth,country,password,confirmpassword,created_date)
                          VALUES('$fname','$lname','$gender','$email','$phoneno','$dob','$country','$password','$repassword', NOW())";
    $result =mysqli_query( $conn,$query);
     if (!$result){ 
         die( "Error :" .$query. mysqli_error($conn) );
     }
 //close connection
 mysqli_close($conn);




}
