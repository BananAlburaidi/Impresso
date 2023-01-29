<?php
session_start();
include("db.php");

if(!isset($_REQUEST['item']))
{

echo "<script> 
            alert('Access Denied !!!');
            location.href='index.php'; </script>";
 exit;
}

if(isset($_POST['btn_save']))
{
    $item_id=$_POST['item_id'];
    $reviewer_name=$_POST['reviewer_name'];
    $reviewer_desc=$_POST['reviewer_desc'];
    $reviewer_rate=$_POST['reviewer_rate'];
    mysqli_query($con,"INSERT INTO `review`(`item_id`, `name`, `body`, `rating`) VALUES ($item_id,'$reviewer_name','$reviewer_desc','$reviewer_rate');") or die ("query incorrect");
    mysqli_close($con);
    echo "<script> 
            alert('Your Rating Added Successfully ');
            location.href='Reviews.php?item=$item_id'; 
            </script>";
            exit;


  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Impresso - Black coffee</title>
    <link rel="stylesheet" type="text/css" href="css/impresso3.css">
    <!-- social media icons were taken from the resourse below  -->
    <script src="https://kit.fontawesome.com/cca0a1b6fc.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav>
      <img src="images/logo1.jpeg" class="log" alt="logo" width="100" height="70"/>
      <div class="logo">
        <p>Impresso</p>
      </div>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="admin.php">Account</a></li>
        <li><a href="#"><img id="fav"src="images/fav.png" alt="Fav" width="40" height="40"/></a></li>
        <li><a href="#"><img id="bag"src="images/bag.png" alt="bag" width="35" height="35"/></a></li>

      </ul>
    </nav>

    <?php

        if(isset($_REQUEST['item']))
        {

            $id = $_REQUEST['item'];
            include("db.php");
            $product_query = "SELECT * FROM item,category WHERE cat_ID=categoryID AND ID=".$id."";
            $run_query = mysqli_query($con,$product_query);
            if(mysqli_num_rows($run_query) > 0)
            {
                while($row = mysqli_fetch_array($run_query))
                {
                    $pro_id    = $row['ID'];
                    $pro_title = $row['name'];
                    $pro_price = $row['Price'];
                    $pro_image = $row['logo'];
                    $pro_descr = $row['description'];
                    $pro_cat = $row['cat_name'];


                    echo "
                    <img  src='product_images/$pro_image' class='imgprofile2' alt='image of black coffee' />

                    <div id='profile2'>
                        <label style='font-weight: bold;' >
                            <em> $pro_title  &emsp;<em> 
                            <mark style=' background-color:#bea396; color:#663300;'> 
                                $pro_price
                            </mark>
                            <label><span style='color:#663300;'> 
                                $pro_cat
                            </label>
                            <br>
                        </label>
                        
                        <h4 style='font-family:cursive;color:#663300;'>
                            Description :
                        </h4>
                        <p>
                            $pro_descr 
                        </p>
                    </div>
                    ";
                }
            }

            echo "
                    <div class='review-body'>
                        <div class='review-list'>
                ";
            $review_query = "SELECT * FROM review WHERE item_id=$id";
            $run_query = mysqli_query($con,$review_query);
            if(mysqli_num_rows($run_query) > 0)
            {
                while($row = mysqli_fetch_array($run_query))
                {
                    $rev_name = $row['name'];
                    $rev_desc = $row['body'];
                    $rev_rate = $row['rating'];


                    echo "
                            <div class='review'>
                                <h3>$rev_name</h3>
                                <h4>$rev_rate/5</h4>
                                <p>$rev_desc</p>
                            </div>
                    ";
                }

                echo " </div>";

            }
        }
    ?>


    <div class='review-form'>


        <form action='' method='post' type='form' name='form' enctype='multipart/form-data'>
            <div class='items_3'>
                <div class='card card3'> 
                    <h5 class='title'>Add Review</h5>
                    <div class='container'> 
                        <div class='form-group'>
                            <input class='form-control' name='reviewer_name' required type='text' placeholder='Your Name'>
                            <input type='hidden' name='item_id' value='<?php echo $_REQUEST["item"]; ?>'>
                        </div>

                        <div class='form-group'>
                            <textarea class='form-control' name='reviewer_desc' required placeholder='Your Review' style='max-width: 100%; min-width: 50%;max-height: 150px;min-height:70px;'></textarea>
                        </div>

                        <div class='form-group'>
                            <label>Your Rating:</label>
                            <input class='form-control' name='reviewer_rate' required type='range' min='0' max='5' value='0'>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <input class='button' style='color:white;' id='btn_save' name='btn_save' type='submit' value='Submit'>
                </div>
                
                <br>   
            </div>
        </form>
        </div>
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
