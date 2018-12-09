<?php
include('header.php');
session_start();
if(isset($_POST['order'])){
    $_SESSION= array();
   if ($_POST['order'] == "brownbiscuit"){
    $_SESSION['mealimage'] ="images/dessert/brownbiscuit.jpeg"; 
    $_SESSION['mealname']= ' Brownbiscuit';    
    $_SESSION['mealamount']=  3000;
   }
   elseif( $_POST['order'] == "browncake"){
       //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/dessert/browncake.jpeg";
    $_SESSION['mealname']= 'Brown Cake';
    $_SESSION['mealamount']= 5000;
   }
   elseif( $_POST['order'] == "buttercookie"){
    //unset all session variables
 $_SESSION= array();
 $_SESSION['mealimage'] = "images/dessert/buttercookie.jpeg";
 $_SESSION['mealname']= 'Butter Cookie';
 $_SESSION['mealamount']= 8000;
}
elseif( $_POST['order'] == "marblecake"){
 //unset all session variables
 $_SESSION= array();
 $_SESSION['mealimage'] = "images/dessert/marblecake.jpg";
 $_SESSION['mealname']= 'Marble cake';
 $_SESSION['mealamount']= 5000;
}
elseif( $_POST['order'] == "chococake"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/dessert/chococake.jpeg";
    $_SESSION['mealname']= 'Choco-Cake';
    $_SESSION['mealamount']= 1500;
   }
   elseif( $_POST['order'] == "fruitcake"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/dessert/fruitcake.jpeg";
    $_SESSION['mealname']= 'Fruit Cake';
    $_SESSION['mealamount']= 8000;
   }
   elseif( $_POST['order'] == "pinkcake"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/dessert/pinkcake.jpeg";
    $_SESSION['mealname']= 'Pink Cake';
    $_SESSION['mealamount']= 6000;
   }
   elseif( $_POST['order'] == "redvelvet"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/dessert/redvelvet.jpeg";
    $_SESSION['mealname']= 'redvelvet';
    $_SESSION['mealamount']= 5000;
   }
   
   elseif( $_POST['order'] == "vanillacake"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/dessert/vanillacake.jpeg";
    $_SESSION['mealname']= 'Vanilla Cake';
    $_SESSION['mealamount']= 5000;
   }
   header('Location:orderpage.php'); 
}
?>
<div class="carousel slide">
    <div class="carousel-inner"> 
        <div class="carousel-item active" >
            <img class="d-block w-100 h-75" src="images/dessert/cakesbanner.jpeg" alt="Second slide">
                <div class="carousel-caption">
                    <h1 class="display-2">Talia's Kitchen </h1>
                      <h3> your favourite after meals  cakes and dessert !</h3>
                </div>
        </div>
    </div>
</div>
    <form action="" method="POST">
        <div class="p-5"> <h2>Roasts</h2></div>
        <div class="row pl-5 pr-5">
            <div class="p-4 col-md-4 col-sm-6"> 
                <div class="text-center"><img src="images/dessert/brownbiscuit.jpeg" alt="brownbiscuit" class="img-thumbnail"> </div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5> Brown Biscuit </h5>
                    <h5> &#8358;3000</h5>
                    <button  class="btn btn-primary" name="order" value="brownbiscuit"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"> <img src="images/dessert/browncake.jpeg" alt="browncake" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Brown Cake</h5>
                   <h5> &#8358;5000</h5>
                   <button  class="btn btn-primary" name="order" value="browncake"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"><img src="images/dessert/buttercookie.jpeg" alt="grilledfish" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                   <h5>Butter Cookie </h5>
                   <h5> &#8358;8000</h5>
                    <button class="btn btn-primary"  name="order" value="buttercookie">Order Now</button>
                </div>
            </div>

            <div class="p-4 col-md-4 col-sm-6"> 
                <div class="text-center"> <img src="images/dessert/marblecake.jpg" alt="marblecake" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5> Marble Cake </h5>
                   <h5> &#8358;5000</h5>
                    <button class="btn btn-primary" name="order" value="marblecake"> Order Now</button>
                </div>
            </div>

            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"> <img src="images/dessert/chococake.jpeg" alt="chococake" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                   <h5> Choco-Cake </h5>
                    <h5>&#8358;1500</h5>
                    <button class="btn btn-primary" name="order" value="chococake"> Order Now </button>
                </div>
            </div>
    

            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"> <img src="images/dessert/fruitcake.jpeg" alt="fruitcake" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Fruit Cake </h5>
                     <h5>&#8358;8000</h5>
                    <button class="btn btn-primary" name="order" value="fruitcake"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center" > <img src="images/dessert/pinkcake.jpeg" alt="pinkcake" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Pink cake</h5>
                     <h5> &#8358;6000</h5>
                    <button class="btn btn-primary" name="order" value="pinkcake"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div   class="text-center"> <img src="images/dessert/redvelvet.jpeg" alt="redvelvet" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Red Velvet </h5>
                    <h5>&#8358;5000</h5>
                    <button class="btn btn-primary" name="order" value="redvelvet">Order Now</button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center" > <img src="images/dessert/vanillacake.jpeg" alt="vanillacake" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Vanilla cake </h5>
                     <h5>&#8358;5000</h5>
                    <button class="btn btn-primary" name="order" value="vanillacake"> Order Now </button>
                </div>
            </div>
            
            </div>
            
        </div>
    </form>



<?php
include('footer.php')
?>




