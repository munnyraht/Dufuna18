<?php
$message=" ";
session_start();
if(isset($_POST['submit'])){
    //save submitted info into  a session value for delivery details
    $name = $_POST["name"];
    $_SESSION['name'] = $name;
    $email = $_POST["email"];
    $_SESSION['email']=$email;
    $phoneno = $_POST["phone"];
    $_SESSION['phoneno']=$phoneno;
    $location = $_POST["location"];
    $_SESSION['location'] = $location;
    if ( empty($name) || empty($email) || empty($phoneno) || empty($location)) {
        $message = ' <p class="red"> All fields are required </p>';
    }
    elseif ((!is_numeric($phoneno))){
        $message .=  ' <p class="red"> Phone no must be numeric </p>';
    } 
    else{
       header('Location:ordersuccess.php');
    }
}
include('header.php');

?>
<div class="container-fluid" >
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <form action="" method="POST">
                <div class="container p-5">
                    <div><h2> Enter Your Delivery Details</h2></div>
                    <div class=" row p-2">
                    <?php echo $message ?>
                        <div class="col-md-12">
                            <label for="name"> Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class=" row p-2">
                        <div class="col-md-6 col-sm-12">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="@yourmail.com">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="phone"> Phone number</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div> 
                    </div> 
                        <div class=" row p-2">
                            <div class="col-md-6 col-sm-12">
                                <label for="location">Location</label>
                                <input type="text" name="location" id="location" class="form-control">
                            </div>
                        </div>
                        <div class="p-2"> 
                        <input type="submit" class="btn btn-primary" value="Submit" name="submit"></button>
                        </div>  
                </div>
            </form>
        </div>
        <div class="col-md-6 col-sm-12 p-4">
            <div class="text-center">
            <!-- display meal information with session saved from previous page -->
                    <img src="<?php echo $_SESSION['mealimage']; ?>" alt="picture"/>
            </div>
            <div class="text-center p-3 blue">
                <?php 
            //Default values
                $totalamount='';
                $_SESSION['itemno']=1;
                $amount=$_SESSION['mealamount'];
                $totalamount= $amount * $_SESSION['itemno'];
                $_SESSION['totalamount']= $totalamount;
                if(isset($_POST['go'])){
                    $_SESSION['itemno'] = $_POST['itemno'];
                    $itemno=intval($_POST['itemno']);
                    $amount=$_SESSION['mealamount'];
                    $totalamount= $amount * $itemno;
                    $_SESSION['totalamount']= $totalamount;
                }
                    echo ($_SESSION['mealname'] .'<br> &#8358;'. $_SESSION['mealamount'] );
                    echo ('<br>');
                ?>
                    <form action="" method="POST" class="text-center"> 
                    <label for="itemno"> No of Packs</label> <input id="itemno" class="w-25" type="number" value="<?php echo isset($_SESSION['itemno']) ? $_SESSION['itemno'] : ''; ?>" name="itemno" />
                    <input type="submit" Value="Go" class="btn btn-primary" name="go"> <br>
                     <p class="amountbox"> <h5>Total amount </h5><?php echo ('&#8358;'); echo(isset($_SESSION['totalamount']) ? $_SESSION['totalamount'] : '');  ?> </p>
                    </form>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php')
?>
