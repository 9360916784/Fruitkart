<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/fruitkartlogo.png" />
        <title>FruitKart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We are selling.</h1>
                       <p>Buy fresh fruits on FruitKart with low cost.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/banana.jpg" alt="banana">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Banana</p>
                                        <p>The best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/redapples.jpg" alt="redapples">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Red Apples</p>
                                    <p>Fresh Apples for Jammu-Kashmir.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/toorder.jpg" alt="ordermore">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Order now</p>
                                   <p>Your orders are awaiting for you.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href="https://fruitkart.in">FruitKart</a> Store. All Rights Reserved.</p>
                   <p>This website is developed by Team 17</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>