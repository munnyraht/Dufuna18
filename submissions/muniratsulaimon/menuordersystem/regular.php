<?php
include('header.php');
session_start();
if(isset($_POST['order'])){
    //assign meal details to session according to the value of order button clicked
     //unset all session variables
    $_SESSION= array();
   if ($_POST['order'] == "jollofrice"){
    $_SESSION['mealimage'] ="images/regular/jollofrice.jpg"; 
    $_SESSION['mealname']= 'Jollof Rice';    
    $_SESSION['mealamount']=  3000;
   }
   elseif( $_POST['order'] == "jollofriceandplantain"){
       //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/regular/jollofriceandplantain.jpg";
    $_SESSION['mealname']= 'Jollof Rice and Plantain with beef';
    $_SESSION['mealamount']= 4000;
   }
   elseif( $_POST['order'] == "jollofriceandchicken"){
    //unset all session variables
 $_SESSION= array();
 $_SESSION['mealimage'] = "images/regular/jollofriceandchicken.jpg";
 $_SESSION['mealname']= 'Jollof Rice and Chicken';
 $_SESSION['mealamount']= 3000;
}
elseif( $_POST['order'] == "friedrice"){
 //unset all session variables
 $_SESSION= array();
 $_SESSION['mealimage'] = "images/regular/friedrice.jpeg";
 $_SESSION['mealname']= 'Fried Rice';
 $_SESSION['mealamount']= 4000;
}
elseif( $_POST['order'] == "friedriceandchicken"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/regular/friedriceandchicken.jpg";
    $_SESSION['mealname']= 'Fried Rice with Chicken';
    $_SESSION['mealamount']= 5000;
   }
   elseif( $_POST['order'] == "friedricewithchickenwors"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/regular/friedricewithchickenwors.jpg";
    $_SESSION['mealname']= 'Fried Rice with Chickenwors';
    $_SESSION['mealamount']= 5000;
   }
   elseif( $_POST['order'] == "yamporridge"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/regular/yamporridge.jpg";
    $_SESSION['mealname']= 'Yam Porridge';
    $_SESSION['mealamount']= 4000;
   }
   elseif( $_POST['order'] == "porridgewithfish"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/regular/porridgewithfish.jpg";
    $_SESSION['mealname']= 'Porridge with Fish';
    $_SESSION['mealamount']= 5000;
   }
   elseif( $_POST['order'] == "moimoi"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/regular/moimoi.jpg";
    $_SESSION['mealname']= 'Moi Moi';
    $_SESSION['mealamount']= 2000;
   }
   elseif( $_POST['order'] == "bakedbeans"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/regular/bakedbeans.jpg";
    $_SESSION['mealname']= 'Beans';
    $_SESSION['mealamount']= 2500;
   }
   elseif( $_POST['order'] == "beansandplantain"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/regular/beansandplantain.jpg";
    $_SESSION['mealname']= 'Beans and Plantain';
    $_SESSION['mealamount']= 3500;
   }
   elseif( $_POST['order'] == "spag"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/regular/spag.jpeg";
    $_SESSION['mealname']= 'Spag';
    $_SESSION['mealamount']= 3500;
   }
   header('Location:orderpage.php'); 
}
?>
<div class="carousel slide">
    <div class="carousel-inner"> 
        <div class="carousel-item active" >
            <img class="d-block w-100 h-75" src="images/regular/regularbanner.jpeg" alt="Second slide">
                <div class="carousel-caption">
                    <h1 class="display-2">Talia's Kitchen </h1>
                      <h3> your favourite Nigerian cuisine meals, made specially!</h3>
                </div>
        </div>
    </div>
</div>
    <form action="" method="POST">
        <div class="p-5"> <h2>Regulars </h2></div>
        <div class="row pl-5 pr-5">
            <div class="p-4 col-md-4 col-sm-6"> 
                <div class="text-center"><img src="images/regular/jollofrice.jpg" alt="jollof rice" class="img-thumbnail"> </div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5> Jollof Rice </h5>
                    <h5> &#8358;3000</h5>
                    <button  class="btn btn-primary" name="order" value="jollofrice"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"> <img src="images/regular/jollofriceandplantain.jpg" alt="jollofriceanplantain" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Jollof Rice and Plantain with beef </h5>
                   <h5> &#8358;3500</h5>
                   <button  class="btn btn-primary" name="order" value="jollofriceandplantain"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"><img src="images/regular/jollofriceandchicken.jpg" alt="jollofriceandchicken" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                   <h5>Jollof Rice and Chicken  </h5>
                   <h5> &#8358;3000</h5>
                    <button class="btn btn-primary"  name="order" value="jollofriceandchicken">Order Now</button>
                </div>
            </div>

            <div class="p-4 col-md-4 col-sm-6"> 
                <div class="text-center"> <img src="images/regular/friedrice.jpeg" alt="Fried Rice" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Fried Rice  </h5>
                   <h5> &#8358;4000</h5>
                    <button class="btn btn-primary" name="order" value="friedrice"> Order Now</button>
                </div>
            </div>

            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"> <img src="images/regular/friedriceandchicken.jpg" alt="Fried Rice and Chicken" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                   <h5> Fried Rice and Chicken </h5>
                    <h5>&#8358;5000</h5>
                    <button class="btn btn-primary" name="order" value="friedriceandchicken"> Order Now </button>
                </div>
            </div>
    

            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"> <img src="images/regular/friedricewithchickenwors.jpg" alt="friedricewithchickenwors" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Fried Rice with Chickenwors </h5>
                     <h5>&#8358;5500</h5>
                    <button class="btn btn-primary" name="order" value="friedricewithchickenwors"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center" > <img src="images/regular/yamporridge.jpg" alt="yamporridge" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Yam Porridge</h5>
                     <h5> &#8358;4000</h5>
                    <button class="btn btn-primary" name="order" value="yamporridge"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div   class="text-center"> <img src="images/regular/porridgewithfish.jpg" alt="porridgewithfish" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Porridge with Fish </h5>
                    <h5>&#8358;5000</h5>
                    <button class="btn btn-primary" name="order" value="porridgewithfish">Order Now</button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center" > <img src="images/regular/moimoi.jpg" alt="moimoi" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Moi Moi </h5>
                     <h5>&#8358;3800</h5>
                    <button class="btn btn-primary" name="order" value="moimoi"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"> <img src="images/regular/bakedbeans.jpg" alt="bakedbeans" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Beans </h5>
                     <h5>&#8358;2500</h5>
                    <button class="btn btn-primary" name="order" value="bakedbeans">Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center" > <img src="images/regular/beansandplantain.jpg" alt="stew with meat" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                     <h5>Beans and Plantain </h5>
                     <h5>&#8358;3500</h5>
                    <button class="btn btn-primary" name="order" value="beansandplantain"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center" > <img src="images/regular/spag.jpg" alt="spag" class="img-thumbnail" name="spag"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Spaghetti </h5>
                    <h5> &#8358;3500</h5>
                    <button class="btn btn-primary" name="order" value="spag"> Order Now </button>
                </div>
            </div>
            
        </div>
    </form>



<?php
include('footer.php')
?>




