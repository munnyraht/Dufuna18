<?php
if (isset($_POST['submit'])){
$message='';
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$phoneno=$_POST["phoneno"];
$dob=$_POST["dob"];
$country=$_POST["country"];
$password=$_POST["password"];
$repassword=$_POST["rePassword"];

if ( empty($fname) || empty($lname) || empty($gender) || empty($email) || empty($phoneno) || empty($dob) || empty($country) || empty($password) || empty($repassword)){
    $message = ' <p class="error"> All fields are required  </p>';
}
if ((!is_numeric($phoneno))){
    $message .=  ' <p class="error"> Phone no must be numeric </p>';
}
if ( $password != $repassword){
    $message .= ' <p class="error">password does not match </p>';
} 
if ( empty($message)){
    $message = '<p class="success"> All input are valid </p>';
}
}
?>
<!Doctype html>
<html>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="x-ua Compatible" content="IE=edge">
        <title>
            Simple Signup Form
        </title>
    <style>
        body{ font-family: calibri; }
        *{box-sizing: border-box; }
        form{ padding: 5px;  width: 80%; }
        legend{ font-size: 2rem;}
        .inputs{ padding: 10px;}
        label{ font-weight: 800; font-size: 1.2rem; color: #218ed6;}
        input[type=text],input[type=email],input[type=password],input[type=text],input[type=tel],input[type=date], select {background:  #f1f1f1; width: 100%;padding: 15px; border: none; }
        input[type=submit]{ color: white; font-size: 1.1rem; padding:2px; margin:none; border:none; background-color:blue; }
        .error{ 
            color:red;
        }
        .success{
            color:green;
        }
    </style>
    <!--<script src="FormValidation\validation.js"> </script> -->
    </head>
    <body>
<form action="" method="POST" enctype="multipart/form-data" onsubmit="return formvalidation()" name="Signup"> 
<fieldset>
    <legend> SignUp Form</legend>
    <br>

    <?php echo  $message ?>
<div class="inputs">   <label for="firstname"> First Name<label> <input type="text" name="firstname" id="firstname"> </div> 
<div class="inputs">  <label for="lastname"> Last Name<label> <input type="text" name="lastname" id="lasttname"> </div> 
<div class="inputs"> <label>Gender</label> <input type="radio" name="gender" id="female" value="female"> <label for="female">Female</label>
                                             <input type="radio" name="gender" id="male" value="male"> <label for="male">Male</label> </div> 

<div class="inputs"> <label for="email"> Email</label> <input type="email" name="email" id="email" placeholder="Enter email"> </div> 
<div class="inputs">  <label for="tel"> Phone No</label> <input type="tel" name="phoneno" id="tel"></div> 
<div class="inputs">  <label for="dob">Date of Birth</label> <input type="date" name="dob" id="dob"  ></div> 
<div class="inputs">  <label for="country">Country </label> <select name="country" id="country">
         <option selected value='1'> select country</option>
         <option  value="Nigeria">Nigeria</option> 
         <option value="Ghana"> Ghana</option>
         <option value="Kenya">  Kenya</option>
         <option value="Cameroon">Cameroon</option></select> </div>
<div class="inputs"> <label for="Password">Password</label> <input type="password" id="password" name="password"> </div>
<div class="inputs"> <label for="rePassword"> Confirm Password</label> <input type="password" id="rePassword" name="rePassword" > </div>

<div class="inputs"><input type="Submit" value="Sign Up" name="submit"></div>
    




</fieldset>



</form>


    </body>
</html>