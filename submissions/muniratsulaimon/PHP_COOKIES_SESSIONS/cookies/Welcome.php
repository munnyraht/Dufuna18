<?php
//connect to database signup
$conn= mysqli_connect("localhost:810","root"," ","Signup");
if (!$conn){
    die( "connection failed" . mysqli_connect_error());
}
$email=$_COOKIE['email'];
$query= "SELECT * FROM user WHERE email= '$email'" ;
$result= mysqli_query($conn,$query);
    while($row=mysqli_fetch_asso($result)){
        $fname =$row['firstname'];
        $lname=$row['lastname'];
        $gender=$row['gender'];
        $email=$row["email"];
        $phoneno=$row["phoneo"];
        $dob=$row["dateofbirth"];
        $country=$row["country"];
    }
        setcookie("firstname",$fname,time()+3600,"/","",0);
        setcookie("lastname",$lname,time()+3600,"/","",0);
        setcookie("gender",$gender,time()+3600,"/","",0);
        setcookie("phoneno",$phoneno,time()+3600,"/","",0);
        setcookie("dob",$dob,time()+3600,"/","",0);
        setcookie("country",$country,time()+3600,"/","",0);

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
               <div> <?php echo ('Firstname :'. $_COOKIE['firstname']) ?> <br>
            <?php echo ('Lastname :' .$_COOKIE['lastname']) ?> <br>
             Click here for more details <a href="details.php"> Read more</a> </div>
</div>
        </body>
    </html>