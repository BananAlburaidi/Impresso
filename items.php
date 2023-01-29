<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Impresso - items</title>
    <link rel="stylesheet" type="text/css" href="css/impresso3.css">
    <!-- social media icons were taken from the resourse below  -->
    <script src="https://kit.fontawesome.com/cca0a1b6fc.js" crossorigin="anonymous"></script>
<style>

nav{
 background-image: url("images/header.png");
}

  </style>
  </head>
  <body>
    <nav>
      <img src="images/logo1.jpeg" class="log" alt="logo" width="100" height="70"/>
      <div class="logo">
        <p>Impresso</p>
      </div>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="items.php">Items</a></li>
        <li><a href="about-us.html">About us</a></li>
        <li><a href="favorite.html"><img id="fav" src="images/fav.png" alt="Fav" width="40" height="40"/></a></li>
        <li><a href="ShoppingBag.html"><img id="bag" src="images/bag.png" alt="bag" width="35" height="35"/></a></li>

      </ul>
    </nav>


              <h1 id="t1"><em>items</em></h1>
             <p class=text > Coffee Impacts More Than Just Your Morning..</p>
             

             <div class="items">

                  <?php
                    include("db.php");
                    $product_query = "SELECT * FROM item,category WHERE cat_ID=categoryID";
                      $run_query = mysqli_query($con,$product_query);
                      if(mysqli_num_rows($run_query) > 0){
                        while($row = mysqli_fetch_array($run_query)){
                          $pro_id    = $row['ID'];
                          $pro_title = $row['name'];
                          $pro_price = $row['Price'];
                          $pro_image = $row['logo'];
                          $pro_cat = $row['cat_name'];


                          
                          echo "
                          <div class='card'>
                          <a href='itemprofile1.php?item=$pro_id'>
                                <img src='product_images/$pro_image' alt='Avatar' style='width:100%'>
                                <div class='container'>
                                <h4><b>$pro_title</b> </h4>
                                  <p> <i>$pro_price</i></p>
                                </div>
                              </a>
                              <button class='button' style='color:white;'> + Add To Bag</button>
                          </div>
                          ";
                        }
                      }
                  ?>
               
                    </div>


                <footer>

                 <div class="footer-content" align="center">
                   <p>ImpressoSupport@outlook.com <br> Phone number:9201234600 </p>

                   <div class="socials">
                 <ul>

                 <li class="twitter" ><a href="http://twitter.com"><i class="fab fa-twitter"></i></a></li>
                 <li class="instagram"><a href="http://instagram.com"> <i class="fab fa-instagram"></i></a></li>
                 <li class=facebook><a href="http://facebook.com"> <i class="fab fa-facebook"></i></a></li>
                 </ul>
               </div>
               </div>
             </footer>

   </body>
</html>
