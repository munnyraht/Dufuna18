<?php
include('header.php');
session_start();
if(isset($_POST['order'])){
    //assign meal details to session according to the value of order button clicked
     //unset all session variables
    $_SESSION= array();
   if ($_POST['order'] == "applejuice"){
    $_SESSION['mealimage'] ="images/drinks/applejuice.jpg"; 
    $_SESSION['mealname']= 'Apple Juice';    
    $_SESSION['mealamount']=  2000;
   }
   elseif( $_POST['order'] == "carlorossi"){
       //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/drinks/carlorossi.jpg";
    $_SESSION['mealname']= 'Carlo Rossi';
    $_SESSION['mealamount']= 4000;
   }
   elseif( $_POST['order'] == "cellarchateau"){
    //unset all session variables
 $_SESSION= array();
 $_SESSION['mealimage'] = "images/drinks/cellarchateau.jpg";
 $_SESSION['mealname']= 'Cellar Chateau';
 $_SESSION['mealamount']= 4000;
}
elseif( $_POST['order'] == "chivita"){
 //unset all session variables
 $_SESSION= array();
 $_SESSION['mealimage'] = "images/drinks/chivita.jpg";
 $_SESSION['mealname']= 'Chivita';
 $_SESSION['mealamount']= 2000;
}
elseif( $_POST['order'] == "cooper"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/drinks/cooper.jpg";
    $_SESSION['mealname']= 'Cooper';
    $_SESSION['mealamount']= 5000;
   }
   elseif( $_POST['order'] == "dreamingtee"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/drinks/dreamingtee.jpg";
    $_SESSION['mealname']= 'dreamingtee';
    $_SESSION['mealamount']= 5000;
   }
   elseif( $_POST['order'] == "fortknox"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/drinks/fortknox.jpg";
    $_SESSION['mealname']= 'Fort Knox';
    $_SESSION['mealamount']= 4000;
   }
   elseif( $_POST['order'] == "mangojuice"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/drinks/mangojuice.jpg";
    $_SESSION['mealname']= 'Mango Juice';
    $_SESSION['mealamount']= 2000;
   }
   elseif( $_POST['order'] == "moimoi"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/drinks/martini.jpg";
    $_SESSION['mealname']= 'Martini';
    $_SESSION['mealamount']= 3000;
   }
   elseif( $_POST['order'] == "peterson"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/drinks/peterson.jpg";
    $_SESSION['mealname']= 'peterson';
    $_SESSION['mealamount']= 4000;
   }
   elseif( $_POST['order'] == "roscato"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/drinks/roscato.jpg";
    $_SESSION['mealname']= 'Rascato';
    $_SESSION['mealamount']= 4000;
   }
   elseif( $_POST['order'] == "steenberg"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/drinks/steenberg.jpg";
    $_SESSION['mealname']= 'Steenberg';
    $_SESSION['mealamount']= 4000;
   }
   
   header('Location:orderpage.php'); 
}
?>
<div class="carousel slide">
    <div class="carousel-inner"> 
        <div class="carousel-item active" >
            <img class="d-block w-100 h-75" src="images/drinks/drinksbanner.jpeg" alt="Second slide">
                <div class="carousel-caption">
                    <h1 class="display-2">Talia's Kitchen </h1>
                      <h3> your favourite Drinks and Wine!</h3>
                </div>
        </div>
    </div>
</div>
    <form action="" method="POST">
        <div class="p-5"> <h2>Drinks and Wine </h2></div>
        <div class="row pl-5 pr-5">
            <div class="p-4 col-md-4 col-sm-6"> 
                <div class="text-center"><img src="images/drinks/applejuice.jpg" alt="applejuice" class="img-thumbnail"> </div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5> Apple Juice </h5>
                    <h5> &#8358;2000</h5>
                    <button  class="btn btn-primary" name="order" value="applejuice"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"> <img src="images/drinks/carlorossi.jpg" alt="carlorossi" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Carlo Rossi</h5>
                   <h5> &#8358;4000</h5>
                   <button  class="btn btn-primary" name="order" value="carlorossi"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"><img src="images/drinks/cellarchateau.jpg" alt="cellarchateau" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                   <h5>Cellar Chateau  </h5>
                   <h5> &#8358;4000</h5>
                    <button class="btn btn-primary"  name="order" value="cellarchateau">Order Now</button>
                </div>
            </div>

            <div class="p-4 col-md-4 col-sm-6"> 
                <div class="text-center"> <img src="images/drinks/chivita.jpg" alt="chivita" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Chivita </h5>
                   <h5> &#8358;2000</h5>
                    <button class="btn btn-primary" name="order" value="chivita"> Order Now</button>
                </div>
            </div>

            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"> <img src="images/drinks/cooper.jpg" alt="cooper" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                   <h5> Cooper </h5>
                    <h5>&#8358;5000</h5>
                    <button class="btn btn-primary" name="order" value="cooper"> Order Now </button>
                </div>
            </div>
    

            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"> <img src="images/drinks/dreamingtee.jpg" alt="dreamingtee" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Dreaming tee </h5>
                     <h5>&#8358;5000</h5>
                    <button class="btn btn-primary" name="order" value="dreamingtee"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center" > <img src="images/drinks/fortknox.jpg" alt="fortknox" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Fort Knox</h5>
                     <h5> &#8358;4000</h5>
                    <button class="btn btn-primary" name="order" value="fortknox"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div   class="text-center"> <img src="images/drinks/mangojuice.jpg" alt="mangojuice" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Mango Juice </h5>
                    <h5>&#8358;2000</h5>
                    <button class="btn btn-primary" name="order" value="mangojuice">Order Now</button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center" > <img src="images/drinks/martini.jpg" alt="martini" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5> Martini </h5>
                     <h5>&#8358;3000</h5>
                    <button class="btn btn-primary" name="order" value="martini"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center"> <img src="images/drinks/peterson.jpg" alt="peterson" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Peterson </h5>
                     <h5>&#8358;4000</h5>
                    <button class="btn btn-primary" name="order" value="peterson">Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center" > <img src="images/drinks/roscato.jpg" alt="roscato" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                     <h5>Roscata </h5>
                     <h5>&#8358;4000</h5>
                    <button class="btn btn-primary" name="order" value="roscato"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div  class="text-center" > <img src="images/drinks/steenberg.jpg" alt="steenberg" class="img-thumbnail" name="spag"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Steenberg </h5>
                    <h5> &#8358;4000</h5>
                    <button class="btn btn-primary" name="order" value="steenberg"> Order Now </button>
                </div>
            </div>
            
        </div>
    </form>



<?php
include('footer.php')
?>




