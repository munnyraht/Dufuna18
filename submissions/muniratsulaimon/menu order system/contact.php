<?php
$message=" ";
if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phoneno = $_POST["phone"];
    $orderbefore = $_POST["orderbefore"];
    $custmessage= $_POST["message"];
    if ( empty($name) || empty($email) || empty($phoneno) || empty($orderbefore) || empty($custmessage)){
        $message = ' <p class="red"> All fields are required </p>';
    } 
    elseif ((!is_numeric($phoneno))){
        $message .=  ' <p class="red"> Phone no must be numeric </p>';
    } 
    else{
        $message = '<p class="success"> Message sucessfully sent </p>';
    }
}

include('header.php')
?>
<div class="carousel slide">
    <div class="carousel-inner"> 
        <div class="carousel-item active" >
            <img class="d-block w-100 h-75" src="images/contactbanner.jpeg" alt="Second slide">
                <div class="carousel-caption">
                    <h1 class="display-2">Talia's Kitchen </h1>
                      <h3> Making your favourite meals yummy!</h3>
                </div>
        </div>
    </div>
</div>
<div class="row jumbotron mb-0 p-3">
		<div class="col-12 text-center lead">
            Talia's kitchen offers the best of meals
        </div>
</div>
</div>
<div class="contactimg">
    <div class="row p-5">
        <div class="col-md-4 col-sm-12 text-center text-white">
            <i class="fas fa-map-marker-alt food-icon red"></i>
            <h4 class="pt-4"> Restuarant Address</h4>
            <p class="p-1"> Unity mall,Lekki phase one<br> Lekki, Lagos state</p>
        </div>
        <div class="col-md-4 col-sm-12 text-center text-white">
        <i class="fas fa-phone food-icon blue"></i>
            <h4 class="pt-4"> Phone no</h4>
            <p class="p-1"> +234-816-047-1777<br> +234-905-362-6291</p>
        </div>
        <div class="col-md-4 col-sm-12 text-center text-white">
            <i class="fab fa-facebook food-icon blue"></i>
            <h4 class="pt-4"> @talia_restaurant</h4>
        </div>
    </div>
    <div class="row p-5">
        <div class="col-md-4 col-sm-12 text-center text-white">
             <i class="fab fa-instagram  food-icon red"></i>
             <h4 class="pt-4"> @talia_restaurant</h4>
        </div>      
        <div class="col-md-4 col-sm-12 text-center text-white ">
            <i class=" fab fa-twitter food-icon blue"></i>
            <h4 class="pt-4"> @talia_restaurant</h4>
        </div>
        <div class="col-md-4 col-sm-12 text-center text-white">
            <i class="fas fa-at food-icon red"></i>
            <h4 class="pt-4">talia_kitchen@gmail.com</h4>
        </div>
    
        <form action="" method="POST">
        <div class="container p-5">
            <div><h2>Send Us a message. Lets know what you think </h2></div>
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
                        <label for="orderbefore">Have u ordered a meal from talia's kitchen before?</label>
                        <select name="orderbefore" id="orderbefore" class="form-control">
                            <option value="" selected> Choose...</option>
                            <option value="yes"> Yes</option>
                            <option value="no"> No</option>
                        </select>
                     </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-4 col-sm-9">
                        <label for="Title"> Title</label>
                        <input type="text" class="form-control" id="Title" name="Title">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-6 col-sm-12">
                        <label for="message"> Message</label>
                        <textarea type="text" class="form-control" id="message" name="message"></textarea>
                    </div>
                </div>
                <div class="p-2"> 
                <input type="submit" class="btn btn-primary" value="Send Message" name="submit"></button>
                 </div>  
        </div>
    </form>
    </div>
    
</div>






<?php
include('footer.php')
?>