<?php
session_start();
//connect to database signup
$conn= mysqli_connect("localhost:810","root"," ","Signup");
if (!$conn){
    die( "connection failed" . mysqli_connect_error());
}
$email=Session['email'];
$query= "SELECT * FROM user WHERE email= '$email'" ;
$result= mysqli_query($conn,$query);
if (mysqli_num_rows($result)==0){ 
    $msg='invalid login Credentials';
}
else {
    while($row=mysqli_fetch_asso($result)){
        $fname =$row['firstname'];
        $lname=$row['lastname'];
        $gender=$row['gender'];
        $phoneno=$row["phoneno"];
        $dob=$row["dateofbirth"];
        $country=$row["country"];
    }
        session["firstname"]=$fname;
        session["lastname"]=$lname;
        session['gender']=$gender;
        session["phoneno"]=$phoneno;
        session["dob"]=$dob;
        session["country"]=$country;

   }
   
    ?>

    <html>
        <head>
            <title>Welcome page</title>
            <style>
                header{ color:blue ; font-weight:600;font-size: 1.2em; padding:10px;}
                *{ font-family:calibri; font-size:1.1em;}
            </style>
        </head>
        <body>
            <header> Your bio: </header> 
            <div> 
               <div> <?php echo ('Firstname :'. $_SESSION['firstname']) ?> <br>
            <?php echo ('Lastname :' .$_SESSION['lastname']) ?> <br>
             Click here for more details <a href="details.php"> Read more</a> </div>
</div>
        </body>
    </html>