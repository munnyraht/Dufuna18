<?php 
include('header.php');
$server='localhost';
$user="root";
$pass="";
$dbname="talia_kitchen";
//connect to database signup
$conn= mysqli_connect($server,$user,$pass,$dbname);
if (!$conn){
    die("connection failed" . mysqli_connect_error());}

 $query= "SELECT * FROM orders";
 $result= mysqli_query($conn,$query);
 session_start();
 
 if (mysqli_num_rows($result) > 0) {
    // output data of each row
    //display information in a table
    echo "<div class='container-fluid p-5'>
    <table border='1'>
    <tr>
    <th> S/N </th>
    <th>Name </th>
    <th>Phone No </th>
    <th>Email </th>
    <th>Address </th>
    <th>Meal-name </th>
    <th>Meal-amount </th>
    <th>No of packs </th>
    <th>Total Amount</th>
    <th>Ordered time</th>
    <th>Resolved</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>". $row["S/N"]  . "</td>";
        //unset all array
        $_SESSION= array();
        $_SESSION['s/n'] = $row["S/N"] ;
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>"  . $row["phoneno"]. "</td>";
        echo "<td>"  . $row["email"]. "</td>";
        echo "<td>"  . $row["location"]. "</td>";
        echo "<td>"  . $row["mealname"]. "</td>";
        echo "<td>"  . $row["mealamount"]. "</td>";
        echo "<td>"  . $row["no_of_packs"]. "</td>";
        echo "<td>"  . $row["total_amount"]. "</td>";
        echo "<td>"  . $row["order_time"]. "</td>";
        //display checkbox and a submit button for each details, check or uncheck according to value of row['resolved']
        echo "<td> <form action='processresolve.php' method='POST'> <input type='checkbox' name='resolved' value='yes'". $row["Resolved"]." >
        <input type='hidden' name='checknum' value= '" .$row['S/N'] . "'>
        <input type='submit' name='submit'class='btn btn-primary'> </form> </td>";
        
    }
    echo "</table>";
}


mysqli_close($conn);
?>

