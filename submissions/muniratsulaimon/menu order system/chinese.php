<?php
include('header.php');
session_start();
if(isset($_POST['order'])){
    //assign meal details to session according to the value of order button clicked
   if ($_POST['order'] == "Dipsum"){
    $_SESSION['mealimage'] ="images/chinese/dipsum.jpeg"; 
    $_SESSION['mealname']= 'Chinese Dipsum';    
    $_SESSION['mealamount']=  3800;
   }
   elseif( $_POST['order'] == "Pasta"){
       //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/chinese/pasta.jpeg";
    $_SESSION['mealname']= 'Chinese Pasta';
    $_SESSION['mealamount']= 3500;
   }
   elseif( $_POST['order'] == "Chineserice"){
    //unset all session variables
 $_SESSION= array();
 $_SESSION['mealimage'] = "images/chinese/chineserice.jpeg";
 $_SESSION['mealname']= 'Chinese Rice';
 $_SESSION['mealamount']= 3000;
}
elseif( $_POST['order'] == "chinesebrownsoup"){
 //unset all session variables
 $_SESSION= array();
 $_SESSION['mealimage'] = "images/chinese/chinesebrownsoup.jpeg";
 $_SESSION['mealname']= 'Chinese Brown Soup';
 $_SESSION['mealamount']= 1500;
}
elseif( $_POST['order'] == "chinesebrownsoup"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/chinese/chinesebrownsoup.jpeg";
    $_SESSION['mealname']= 'Chinese Brown Soup';
    $_SESSION['mealamount']= 1500;
   }
   elseif( $_POST['order'] == "sushi"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/chinese/sushi.jpeg";
    $_SESSION['mealname']= 'Sushi';
    $_SESSION['mealamount']= 3800;
   }
   elseif( $_POST['order'] == "whitepasta"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/chinese/whitepasta.jpeg";
    $_SESSION['mealname']= 'White Pasta';
    $_SESSION['mealamount']= 4200;
   }
   elseif( $_POST['order'] == "chinesewhitenoodles"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/chinese/chinesewhitenoodles.jpeg";
    $_SESSION['mealname']= 'Chinese White Noodles';
    $_SESSION['mealamount']= 3200;
   }
   elseif( $_POST['order'] == "chineseseafood"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/chinese/chineseseafood.jpeg";
    $_SESSION['mealname']= 'Chinese Sea Food';
    $_SESSION['mealamount']= 4200;
   }
   elseif( $_POST['order'] == "spag"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/chinese/spag.jpeg";
    $_SESSION['mealname']= 'Spagetti Bolonis';
    $_SESSION['mealamount']= 3800;
   }
   elseif( $_POST['order'] == "chinesericeandcurrysauce"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/chinese/chinesericeandcurrysauce.jpeg";
    $_SESSION['mealname']= 'Chinese Rice with Curry Sauce';
    $_SESSION['mealamount']= 2500;
   }
   elseif( $_POST['order'] == "chinesestewwithmeat"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/chinese/chinesestewwithmeat.jpg";
    $_SESSION['mealname']= 'Chinese stew with meat';
    $_SESSION['mealamount']= 3000;
   }
   elseif( $_POST['order'] == "chinesechips"){
    //unset all session variables
    $_SESSION= array();
    $_SESSION['mealimage'] = "images/chinese/chinesechips.jpeg";
    $_SESSION['mealname']= 'Chinese chips with meat';
    $_SESSION['mealamount']= 3500;
   }
   header('Location:orderpage.php'); 
}
?>
<div class="carousel slide">
    <div class="carousel-inner"> 
        <div class="carousel-item active" >
            <img class="d-block w-100 h-75" src="images/chinese/chinese.jpeg" alt="Second slide">
                <div class="carousel-caption">
                    <h1 class="display-2">Talia's Kitchen </h1>
                      <h3> your favourite chinese meals, made specially!</h3>
                </div>
        </div>
    </div>
</div>
    <form action="" method="POST">
        <div class="p-5"> <h2>Chinese Food </h2></div>
        <div class="row pl-5 pr-5">
            <div class="p-4 col-md-4 col-sm-6"> 
                <div><img src="images/chinese/dipsum.jpeg" alt="dipsum" class="img-thumbnail"> </div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Chinese Dipsum </h5>
                    <h5> &#8358;3800</h5>
                    <button  class="btn btn-primary" name="order" value="Dipsum"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div> <img src="images/chinese/pasta.jpeg" alt="Pasta" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Pasta  </h5>
                   <h5> &#8358;3800</h5>
                   <button  class="btn btn-primary" name="order" value="Pasta"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <img src="images/chinese/chineserice.jpeg" alt="Chinese rice" class="img-thumbnail"><br>
                <div class="text-center blue font-weight-bold p-2 ">
                   <h5>Chinese Rice  </h5>
                   <h5> &#8358;3000</h5>
                    <button class="btn btn-primary"  name="order" value="Chineserice">Order Now</button>
                </div>
            </div>

            <div class="p-4 col-md-4 col-sm-6"> 
                <div > <img src="images/chinese/chinesebrownsoup.jpeg" alt="Chinese brown soup" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Brown Soup  </h5>
                   <h5> &#8358;1500</h5>
                    <button class="btn btn-primary" name="order" value="chinesebrownsoup"> Order Now</button>
                </div>
            </div>

            <div class="p-4 col-md-4 col-sm-6"> 
                <div > <img src="images/chinese/sushi.jpeg" alt="Sushi" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                   <h5> Sushi </h5>
                    <h5>&#8358;3800</h5>
                    <button class="btn btn-primary" name="order" value="sushi"> Order Now </button>
                </div>
            </div>
    

            <div class="p-4 col-md-4 col-sm-6"> 
                <div > <img src="images/chinese/whitepasta.jpeg" alt="white pasta" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>White Pasta </h5>
                     <h5>&#8358;4200</h5>
                    <button class="btn btn-primary" name="order" value="whitepasta"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div > <img src="images/chinese/chinesewhitenoodles.jpeg" alt="chinesewhitenoodles" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Chinese White Noodles </h5>
                     <h5> &#8358;3200</h5>
                    <button class="btn btn-primary" name="order" value="chinesewhitenoodles"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div > <img src="images/chinese/chineseseafood.jpeg" alt="chineseseafood" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Chinese Sea Food </h5>
                    <h5>&#8358;4200</h5>
                    <button class="btn btn-primary" name="order" value="chineseseafood">Order Now</button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div > <img src="images/chinese/spag.jpeg" alt="spag" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Spagetthi Bolonis </h5>
                     <h5>&#8358;3800</h5>
                    <button class="btn btn-primary" name="order" value="spag"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div > <img src="images/chinese/chinesericeandcurrysauce.jpeg" alt="riceandsauce" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Chinese Rice with Curry Sauce </h5>
                     <h5>&#8358;2500</h5>
                    <button class="btn btn-primary" name="order" value="chinesericeandcurrysauce">Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div > <img src="images/chinese/chinesestewwithmeat.jpg" alt="stew with meat" class="img-thumbnail"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                     <h5>Chinese Stew with Meat </h5>
                     <h5>&#8358;3000</h5>
                    <button class="btn btn-primary" name="order" value="chinesestewwithmeat"> Order Now </button>
                </div>
            </div>
            <div class="p-4 col-md-4 col-sm-6"> 
                <div > <img src="images/chinese/chinesechips.jpeg" alt="chinese chips" class="img-thumbnail" name="chinesechips"></div>
                <div class="text-center blue font-weight-bold p-2 ">
                    <h5>Chinese Chips with Meat </h5>
                    <h5> &#8358;3500</h5>
                    <button class="btn btn-primary" name="order" value="chinesechips"> Order Now </button>
                </div>
            </div>
            
        </div>
    </form>



<?php
include('footer.php')
?>




