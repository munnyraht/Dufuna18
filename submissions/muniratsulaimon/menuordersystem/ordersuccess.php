<?php
include('header.php');
session_start();
$name = $_SESSION['name'];
$phoneno = $_SESSION['phoneno'];
$email = $_SESSION['email'];
$location = $_SESSION['location'];
$mealname = $_SESSION['mealname'];
$mealamount=$_SESSION['mealamount'];
$noofpacks = $_SESSION['itemno'];
$total=$_SESSION['totalamount'];
$server='localhost';
$user="root";
$pass="";
$dbname="talia_kitchen";
 $conn= mysqli_connect($server,$user,$pass,$dbname); 
 if ($conn){
     //insert entered delivery details into db
   $query= "INSERT INTO orders (`name`, `phoneno`, `email`, `location`, `mealname`, `mealamount`, `no_of_packs`, `total_amount`, `order_time`,`Resolved`) 
                        VALUES ('{$name}','{$phoneno}','{$email}','{$location}','{$mealname}','{$mealamount}','{$noofpacks}','{$total}',CURRENT_TIMESTAMP,'unchecked')";
   $result =mysqli_query( $conn,$query);
   if ($result){ 
  echo("<div class='alert alert-success'> <strong> Details submitted successfully!</strong></div>");
   } 
   else{
       echo ("<div class='alert alert-warning'> <strong> Details not submitted </strong></div>");
   }
//close connection 
mysqli_close($conn);
}

?>
<div class="text-left p-5"> <h2>  Order Sucessful! </h2>
    <h5>  <p class="p-1">Dear customer, </p>
        <p class="p-1">You have succesully ordered for <?php echo ($_SESSION['itemno'] .' packs of '.$_SESSION['mealname']. ' for &#8358;'. $_SESSION['totalamount'] ) ?></p>
        <p class="p-1">You will recieve your order  at address  <?php   echo $_SESSION['location'] ?> </p>
        <p class="p-1">Visit our contact page to send us your review about our services <a href="contact.php">here</a>  </p>
        <p class="p-1">Click <a href='index.php'>here</a> to go back to home page </p>
    </h5>
    <h3 class="blue"> <p class="pl-4"> Thank you for your patronage </p>
      <p class="pl-4">We hope to serve you More! </p></h3>

</div>












<?php
include('footer.php')
?>  