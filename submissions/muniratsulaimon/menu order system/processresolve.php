<?php
$server='localhost';
$user="root";
 $pass="";
$dbname="talia_kitchen";
//connect to database talia_kitchen
$conn= mysqli_connect($server,$user,$pass,$dbname);
    if (!$conn){
        die("connection failed" . mysqli_connect_error());}
    else{
        $num=  $_POST['checknum'];
       
        if ($_POST['resolved']== 'yes'){  //if check box is checked
         $query= "UPDATE orders SET `Resolved`='checked' WHERE `S/N` ='{$num}'";
         $result= mysqli_query($conn,$query);
        }
        else{ // if checkbox is unchecked
            $query= "UPDATE orders SET `Resolved`='unchecked' WHERE `S/N` ='{$num}'";
            $result= mysqli_query($conn,$query);
         }
         header('location:adminpage.php');   
        }











?>