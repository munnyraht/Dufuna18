<?php
include('header.php');
session_start();
if(isset($_POST['order'])){
    //assign meal details to session according to the value of order button clicked
     //unset all session variables
    $_SESSION= array();
   if ($_POST['order'] == "wholechicken"){
    $_SESSION['mealimage'] ="images/roasts/wholechicken.jpg"; 
    $_SESSION['mealname']= ' Roasted Whole Chicken';    
    $_SESSION['mealamount']=  7000;
   }
   elseif( $_POST['order'] == "cookedfish"){
       //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/roasts/cookedfish.jpg";
    $_SESSION['mealname']= 'Cooked Fish';
    $_SESSION['mealamount']= 4000;
   }
   elseif( $_POST['order'] == "jollofriceandchicken"){
    //unset all session variables
 $_SESSION= array();
 $_SESSION['mealimage'] = "images/regular/jollofriceandchicken.jpg";
 $_SESSION['mealname']= 'Jollof Rice and Chicken';
 $_SESSION['mealamount']= 3000;
}
elseif( $_POST['order'] == "grilledfish"){
 //unset all session variables
 $_SESSION= array();
 $_SESSION['mealimage'] = "images/roasts/grilledfish.jpeg";
 $_SESSION['mealname']= 'Grilled Fish';
 $_SESSION['mealamount']= 4000;
}
elseif( $_POST['order'] == "fishwithchilli"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/roasts/fishwithchilli.jpg";
    $_SESSION['mealname']= 'Fish with Chilli';
    $_SESSION['mealamount']= 4000;
   }
   elseif( $_POST['order'] == "cookedchicken"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/roasts/cookedchicken.jpg";
    $_SESSION['mealname']= 'Cooked Chicken';
    $_SESSION['mealamount']= 5000;
   }
   elseif( $_POST['order'] == "steakwithsauce"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/roasts/steakwithsauce.jpeg";
    $_SESSION['mealname']= 'Steak with Sauce';
    $_SESSION['mealamount']= 4000;
   }
   elseif( $_POST['order'] == "shrimps"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/roasts/shrimps.jpeg";
    $_SESSION['mealname']= 'Shrimps';
    $_SESSION['mealamount']= 3000;
   }
   elseif( $_POST['order'] == "friedtiplapiafish"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/roasts/friedtiplapiafish.jpg";
    $_SESSION['mealname']= 'Fried Tilapia Fish';
    $_SESSION['mealamount']= 5000;
   }
   elseif( $_POST['order'] == "friedchickencrunchy"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/roasts/friedchickencrunchy.jpeg";
    $_SESSION['mealname']= 'Fried Chicken Crunchy';
    $_SESSION['mealamount']= 5000;
   }
   header('Location:orderpage.php'); 
}
?>
<div class="carousel slide">
    <div class="carousel-inner"> 
        <div class="carousel-item active" >
            <img class="d-block w-100 h-75" src="images/roasts/roastbanner.jpeg" alt="Second slide">
                <div class="carousel-caption">
                    <h1 class="display-2">Talia's Kitchen </h1>
                      <h3> your favourite Nigerian roasts with garnishes made specially!</h3>
                </div>
        </div>
    </div>
</div>
    <form action="" method="POST">
        <div class="p-5"> <h2>Roasts</h2></div>
        <div class="row pl-5 pr-5">
            <div class="p-4 col-md-4 col-sm-6"> 
                <div class="text-center"><img src="images/roasts/wholechicken.jpg" alt="wholechicken" class="img-thumbnail"> </div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5> Whole Chicken </h5>
                    <h5> &#8358;7000</h5>
                    <button  class="btn btn-primary" name="order" value="wholechicken"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"> <img src="images/roasts/cookedfish.jpg" alt="cookedfish" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Cooked Fish </h5>
                   <h5> &#8358;4000</h5>
                   <button  class="btn btn-primary" name="order" value="cookedfish"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"><img src="images/roasts/grilledfish.jpeg" alt="grilledfish" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                   <h5>Grilled Fish
                   <h5> &#8358;4000</h5>
                    <button class="btn btn-primary"  name="order" value="grilledfish">Order Now</button>
                </div>
            </div>

            <div class="p-4 col-md-4 col-sm-6"> 
                <div class="text-center"> <img src="images/roasts/fishwithchilli.jpg" alt="fishwithchilli" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5> Cooked Fish with Chilli  </h5>
                   <h5> &#8358;4000</h5>
                    <button class="btn btn-primary" name="order" value="fishwithchilli"> Order Now</button>
                </div>
            </div>

            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"> <img src="images/roasts/cookedchicken.jpg" alt="Fried Rice and Chicken" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                   <h5> Cooked Chicken </h5>
                    <h5>&#8358;5000</h5>
                    <button class="btn btn-primary" name="order" value="cookedchicken"> Order Now </button>
                </div>
            </div>
    

            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"> <img src="images/roasts/steakwithsauce.jpeg" alt="steakwithsauce" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Steak with Sauce </h5>
                     <h5>&#8358;4000</h5>
                    <button class="btn btn-primary" name="order" value="steakwithsauce"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center" > <img src="images/roasts/shrimps.jpeg" alt="yamporridge" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Shrimps</h5>
                     <h5> &#8358;3000</h5>
                    <button class="btn btn-primary" name="order" value="shrimps"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div   class="text-center"> <img src="images/roasts/friedtiplapiafish.jpg" alt="friedtiplapiafish" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Fried Tilapia Fish </h5>
                    <h5>&#8358;5000</h5>
                    <button class="btn btn-primary" name="order" value="friedtiplapiafish">Order Now</button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center" > <img src="images/roasts/friedchickencrunchy.jpeg" alt="friedchickencrunchy" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Fried Chicken crunchy </h5>
                     <h5>&#8358;5000</h5>
                    <button class="btn btn-primary" name="order" value="friedchickencrunchy"> Order Now </button>
                </div>
            </div>
            
            </div>
            
        </div>
    </form>



<?php
include('footer.php')
?>




