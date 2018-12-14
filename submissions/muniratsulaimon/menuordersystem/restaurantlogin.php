<?php
include('header.php');
$msg='';
if (isset($_POST['login'])) {
    $email=$_POST['email'];
    $password=$_POST["password"];
    if(empty($email)|| empty($password)){
        $msg= "<p class= 'red'>email and password required </p>";
    }
    else{ 
        $server='localhost';
        $user="root";
        $pass="";
        $dbname="talia_kitchen";
        //connect to database signup
        $conn= mysqli_connect($server,$user,$pass,$dbname);
        if (!$conn){
            die("connection failed" . mysqli_connect_error());}
        else{
         $query= "SELECT * FROM admin WHERE email='{$email}'&& password='{$password}'";
         $result= mysqli_query($conn,$query);
         if ((mysqli_num_rows($result))==0){
            $msg="<p class= 'red'>invalid login Credentials </p>";
            }  
        else{
            header('location:adminpage.php');   
        
        }
    }
    mysqli_close($conn);
}
}

?>
    <div class="container p-5">
    <div class="row">
    <div class="col-12">
        <h3 class>Restaurant login(Admin only)</h3>
        <div class="card p-2 bg-light" style= "width:25rem;">
            <div class="card-body">
              <?php echo  $msg ?>
                <form action="" method="POST">
                    <div class="row">
                            <div class="col">
                                <div class="p-2">
                                    <label for="name"> Email</label>
                                    <input type="text" class="form-control" id="name" name="email" placeholder="@mail.com">
                                </div>
                                <div class="p-2">
                                    <label for="email">Password</label>
                                    <input type="text" class="form-control" id="email" name="password"  >
                                </div>
                                <div> <button  name="login" class= "btn btn-primary"> Log In</button> </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>

    </div>
    
  
        
  <?php
  include('footer.php')

   ?>
