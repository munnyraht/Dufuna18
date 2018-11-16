<!doctype html>
<html>
    <head>
        <title>
            Details
        </title>
        <style>
            h2{color:blue;}
            *{ font-family: calibri; }
            div{ padding:3px; font-size:1.05em;}
        </style>
    </head>
    <body>
       <h2> Full Bio: </h2>
       <div> Firstname: <?php $_SESSION['firstname'] ?> </div>
       <div> Lastname: <?php $_SESSION['lastname'] ?> </div>
       <div> Gender: <?php $_SESSION['gender'] ?> </div>
       <div> Email: <?php $_SESSION['email'] ?> </div>
       <div> Phone No: <?php $_SESSION['phoneno'] ?> </div>
       <div> Date of Birth: <?php $_SESSION['dob'] ?> </div>
       <div> Country: <?php $_SESSION['country'] ?> </div>
    </body>







</html>
