<?php
 if (isset($_POST['sign-in'])){
    $email=$_POST['email'];
    $password=$_POST["password"];
    $msg=" ";
    if(empty($email)|| empty($password)){
        $msg= "email and password required";
    }
    else{ 
        //connect to database signup
        $conn= mysqli_connect("localhost:810","root"," ","Signup");
        if (!$conn){
            die( "connection failed" . mysqli_connect_error());
        
        $query= "SELECT * FROM user WHERE email= '$email'" ;
        $result= mysqli_query($conn,$query);
        if (mysqli_num_rows($result)==0){ 
            $msg='invalid login Credentials';
            }  
        else{
        //uncomment the session section and comment the cookie section to use session and vice versa
        //using cookie 
        setcookie("email",$email,time()+3600,"/","",0);
        setcookie("password",$password,time()+3600,"/","",0);
        header('Location:cookies/Welcome.php');
        //using session
       /* session["email"]= $email;
        session["password"]=$password;
        header('Location:sessions/welcome.php');*/
      }
    }
     
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign In Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .input{ padding:10px; }
            body{font-family:calibri;}
            legend{font-size: 2rem; color:blue;}
            input{ width:40%; padding:10px; border:none; background:  #f1f1f1}
            label{font-weight:800; font-size:1.3em; color: blue;}
            button{ font-size:1.1em; color:white; font-weight:700; background:#00adff; }
        
        </style>
    </head>
    <body>
        <form action="" method="POST"  name="signin">
            <fieldset>
                <legend> Sign In</legend> <br>
                <?php echo $msg?>
                <div class="input">  <label for="email">Email Address</label> <input type="email" name="email" id="email"></div>
                <div class="input">  <label for="password">Password</label> <input type="password" id="password" name="password"> </div>
                <button name="sign-in"> Sign In</button>
         </fieldset>

        </form>
        
    </body>
</html>