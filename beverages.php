<?php include "includes/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Beverages</title>
  <!-- favicon <link rel="icon" href="includes/favicon.png?"/> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo&family=Orbitron:wght@500&family=Roboto&display=swap" rel="stylesheet">

    <!--link to stylesheet -->
    <link rel="stylesheet" href="resources\css\style.css">


  </head>
  <style>
    /* Custom CSS */

img{
    height: 250px;
    width: 300px;
}

.aisle-item{
    margin: 10px 20px;
}

.h4{
    font-size:100%;
}
#Uzair{
 background-image: url("https://ihpl.llu.edu/sites/ihpl.llu.edu/files/field/image/beverage-aisle.jpg");
    width: 100%;
    height: auto;
    min-height: 500px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    : 250px;
    color: black;
}


  </style>
  <body>
    <?php include "includes/header.php";
          include "includes/dbc.php"; 
    ?>


    <!--CONTENTS OF PAGE STARTS HERE-->
    <div class="custom-page-container">
        <div style="margin-bottom: 20px">
            <h1 id="Uzair" style="font-size: 150%; text-align: center;padding-top: 50px"> Beverages</h1>

        </div>

        <div class="d-flex flex-wrap justify-content-evenly">

        <?php
                 $sql = "SELECT * FROM products WHERE aisle = 'Beverages'";
                 $result = mysqli_query($conn, $sql);
                 $index = 0;
                 while ($row = mysqli_fetch_assoc($result))
                 {
                     echo"
                     
                     <div class='aisle-item'>
                        <a href='product_display.php?varname={$row['product_id']}'>
                        <img src='{$row['image']}' alt='{$row['name']}'>
                        <h4 style='font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;'>{$row['name']}</h4>
                        <p style='margin-bottom: 0 '>{$row['price']}$/{$row['unit']}</p>
                        </a>
     
                         <div class='d-flex bd-highlight'>
                             <div class='flex-grow-1 bd-highlight'>
                                 <form action=\"\" method=\"post\">
                                 <button type='button' class='btn btn-primary rounded-circle btn-sm py-0 minusButton' id='{$index}' style='background-color:  #EE4F3E; border-color:  #EE4F3E;'> - </button>
                                 <input type='text' name='qty' value='1' id ='{$index}' class='amount' pattern='^[1-9]\d*$'>
                                 <input hidden type='text' name='chosenFormat' value='{$row['format']}'>
                                 <input hidden type=\"text\"  name='product_id' value={$row['product_id']}>
                                 <button type='button' class='btn btn-primary rounded-circle btn-sm py-0 plusButton'   id='{$index}' style='background-color:  #EE4F3E; border-color:  #EE4F3E;'> + </button>                                
                             </div>
     
                            <div class='bd-highlight'>
                                 <button class='btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton' id='{$index}' style='background-color:  #EE4F3E; border-color: #EE4F3E;' onClick='this.form.submit()'> Add to Cart</button>
                                 </form>
                            </div>
                        </div>
                    </div> ";
                    $index++;
                 }           
            
            ?>

    </div>


    <?php include "includes/footer.html"; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>



    <script>
        var counterArrayBeverages;

        window.addEventListener('load', (event) => {
            counterArrayBeverages = getCountArray();

        }); // var numOfProducts = document.getElementsByClassName("amount").length;
        // var counterArrayBeverages = new Array(numOfProducts);



        // CART BUTTON 
        var cartButtons = document.querySelectorAll(".cartButton"); //array of all the cart buttons
        var cartButtonsLength = cartButtons.length;
        for (var i = 0; i < cartButtonsLength; i++) {
            cartButtons[i].onclick = function() {
                addToCart(this);
                storeCountArray();
            }
        }


        function addToCart(button) { //what happens when add to cart is clicked
            var index = button.id;
            counterArrayBeverages[index] = parseInt(document.getElementsByClassName("amount")[index].value);
        }


        function storeCountArray() {
            console.log(sessionStorage.getItem("counterArrayBeverages"));
            // localStorage.setItem("names", JSON.stringify(names));
            sessionStorage.setItem("counterArrayBeverages", JSON.stringify(counterArrayBeverages));
            console.log(counterArrayBeverages + "hello");
            // alert("worked");
        };



        //retreives countarray on refresh
        function getCountArray() {
            counterArrayBeverages = JSON.parse(sessionStorage.getItem("counterArrayBeverages")); //get them back
            console.log(counterArrayBeverages);
            if (counterArrayBeverages != null) {
                var numOfProducts = document.getElementsByClassName("amount").length;
                for (var i = 0; i < numOfProducts; i++) {
                    document.getElementsByClassName("amount")[i].value = parseInt(counterArrayBeverages[i]);

                }
                return counterArrayBeverages;
            }
            //localStorage.getItem("counterArrayBeverages");

            if (counterArrayBeverages == null) {
                var numOfProducts = document.getElementsByClassName("amount").length;
                var counterArrayBeverages = new Array(numOfProducts);
                for (var i = 0; i < numOfProducts; i++) {
                    counterArrayBeverages[i] = 1;
                }
                console.log(counterArrayBeverages);
                return counterArrayBeverages;
            }
        }







        // INCREMENT BUTTON
        var plusButtons = document.querySelectorAll(".plusButton"); //array of all the plus buttons
        var plusButtonsLength = plusButtons.length;

        for (var i = 0; i < plusButtonsLength; i++) {
            plusButtons[i].onclick = function() {
                increment(this, counterArrayBeverages);
                storeCountArray();
            }
        }

        function increment(button, counterArrayBeverages) {
            var index = button.id;
            console.log(counterArrayBeverages);
            counterArrayBeverages[index]++;
            document.getElementsByClassName("amount")[index].value = counterArrayBeverages[index];
        }

        //DECREMENT BUTTON
        var minusButtons = document.querySelectorAll(".minusButton");
        var minusButtonsLength = minusButtons.length;

        for (var i = 0; i < minusButtonsLength; i++) {
            minusButtons[i].onclick = function() {
                decrement(this, counterArrayBeverages);
                storeCountArray();
            }
        }

        function decrement(button, counterArrayBeverages) {
            var index = button.id;
            if (counterArrayBeverages[index] == 1)
                return;
            else
                counterArrayBeverages[index]--;

            document.getElementsByClassName("amount")[index].value = counterArrayBeverages[index];
        }
    </script>
  </body>
</html>

