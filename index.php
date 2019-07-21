<!DOCTYPE html>
<html>
    <head>
        <title>Trip_India</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--              --------------------------------------------                -----           -->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="style_index.css">
    </head>
    
    <body class="container">
        <div class="row" > 
      
        <?php
            require "header.php";
        ?>
   
       <div id="background-image"> 
          <center>       
          <div id="content">  
          <h1>Welcome to     <br>  Trip-India</h1>  
          </div>
          </center>
       </div>
  
      <div id="tours">
          <marquee>  <h2> Indian Regions </h2> </marquee>
            
            <div class="tours_div" > 
                <a href="east.php"><img src="img/tour1.jpg" alt="East"></a>
                    <h4> East India </h4>
            </div>

            <div class="tours_div">
                <a href="west.php"><img src="img/tour2.jpg" alt="West"></a>
                    <h4> West India </h4>
            </div>

            <div class="tours_div">
                <a href="north.php"><img src="img/tour3.jpg" alt="North"></a>
                    <h4> North India </h4>     
            </div>
            
            <div class="tours_div">
                <a href="south.php"><img src="img/tour4.jpg" alt="South"></a>
                    <h4> South India </h4>
            </div>        
        </div>
        
       <?php
            require "footer.php";
        ?>

        </div>   
    </body>
</html>