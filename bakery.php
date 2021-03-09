<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Bakery</title>
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
    max-height: 250px;
    max-width: 320px;
}

.aisle-item{
    margin: 10px 0;
}

.h4{
    font-size:100%;
}



  </style>
  <body>
    <?php include "includes/header.html"; ?>


    <!--CONTENTS OF PAGE STARTS HERE-->
    <div class="custom-page-container">
        <div style="margin-bottom: 20px">
            <h1 style="font-size: 150%; text-align: center"> Bakery</h1>
        </div>

        <div class="d-flex flex-wrap justify-content-evenly"> 
            
            <div class="aisle-item"> 
                <img src="resources/img/bakery/bakery-bagel2.jpg" alt="Bagel">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Bagel</h4>
                <p style="margin-bottom: 0 ">10$/dozen</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="0" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <span class="amount">1</span>
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="0" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            
            <div class="aisle-item"> 
                <img src="resources/img/bakery/bakery-baguette2.jpg" alt="Baguette">
                 <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Baguette</h4>
                <p style="margin-bottom: 0 ">7$/unit</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="1" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <span class="amount">1</span>
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="1" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            
            <div class="aisle-item"> 
                <img src="resources/img/bakery/bakery-challah2.jpg" alt="Challah">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Challah</h4>
                <p style="margin-bottom: 0 ">5$/unit</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="2" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <span class="amount">1</span>
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="2" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            
            <div class="aisle-item"> 
                <img src="resources/img/bakery/bakery-chocolatine2.jpg" alt="Chocolatine"> 
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Chocolatine</h4>
                <p style="margin-bottom: 0 ">3$/unit</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 " id="3" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <span class="amount">1</span>
                        <button class="btn btn-primary rounded-circle btn-sm py-0 "  id="3" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <div class="aisle-item">
                <img src="resources/img/bakery/bakery-ciabatta2.jpg" alt="Ciabatta">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Ciabatta</h4>
                <p style="margin-bottom: 0 ">7$/unit</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 " id="4" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <span class="amount">1</span>
                        <button class="btn btn-primary rounded-circle btn-sm py-0 " id="4"  style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
        
            
            <div class="aisle-item"> 
                <img src="resources/img/bakery/bakery-donut2.jpg" alt="Donut">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Donut</h4>
                <p style="margin-bottom: 0 ">10$/dozen</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 " id="5" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <span class="amount">1</span>
                        <button class="btn btn-primary rounded-circle btn-sm py-0 " id="5" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            
            <div class="aisle-item"> 
                <img src="resources/img/bakery/bakery-white-bread2.jpg" alt="White Bread"> 
                <br>
                <!--
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">White Bread</h4> -->
                <h4>
                    <a href="product_whiteBread.php" style="color: white; text-decoration: none;">Bread </a>  
                </h4>
                <p style="margin-bottom: 0 ">7$/bag</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 " id="6" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <span class="amount">1</span>
                        <button class="btn btn-primary rounded-circle btn-sm py-0 "  id="6" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>    
            
        </div>
    </div> 


    <?php include "includes/footer.html"; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

    
    
    <script>

        var numOfProducts = document.getElementsByClassName("amount").length;
        var counterArray = new Array(numOfProducts);
            
        for (var i = 0; i < numOfProducts; i++) 
            counterArray[i] = 1;
        var amountArray = document.getElementsByClassName("amount");//span text array
        

        // INCREMENT BUTTON
        var plusButtons = document.querySelectorAll(".plusButton"); //array of all the plus buttons
        var plusButtonsLength = plusButtons.length; 
        console.log(plusButtonsLength);

        for(var i =0; i< plusButtonsLength; i++){
            plusButtons[i].onclick = function(){
                increment(this);
            }
        }

        function increment(button){
            var index = button.id;
            counterArray[index] ++;
            amountArray[index].textContent = counterArray[index];
        } 

        
        //DECREMENT BUTTON
        var minusButtons = document.querySelectorAll(".minusButton");
        var minusButtonsLength = minusButtons.length; 

        for(var i = 0; i<minusButtonsLength; i++){ 
            minusButtons[i].onclick = function(){
                decrement(this);
            }
        }   
        

        function decrement(button){
            var index = button.id;
            if(counterArray[index] == 1)
                return;
            else
                counterArray[index]--;

            amountArray[index].textContent = counterArray[index];  
        }        


    </script>
  </body>
</html>