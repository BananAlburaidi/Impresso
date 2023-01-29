<?php
session_start();
if(!isset($_SESSION['uid']))
header('Location: index.php'); // default page

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Impresso</title>
    <link rel="stylesheet" type="text/css" href="css/Impresso3.css">
    <!-- social media icons were taken from the resourse below  -->
	<script src="https://kit.fontawesome.com/cca0a1b6fc.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav>
      <div class="logo">
        <p>Impresso</p> <img src="images/logo1.jpeg" class="log" alt="logo" width="100" height="70"/>
      </div>
      <ul>
	  <li><a href="index.php">Home</a></li>
	  <li><a href="logout.php">Logout</a></li>
                 <?php
		  if(isset($_SESSION['name']))
		  echo "<li><a href='AdminProfile.php'>".$_SESSION['name']."</a></li>";
		  ?>
      </ul> </nav>

	  
	  <h1 id="t1"><em>Items Avaliable</em></h1>
      
	  
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
			<a class='btn_edit' href='edit_delete_item.php?edit=$pro_id'>Edit</a>
			<a class='btn_delete' href='edit_delete_item.php?delete=$pro_id'>Delete</a>
		</div>
		";
	  }
	}
?>
  </div>

<br>
<br>
<br>
<br>
<br>
	<footer>

<a href="add_item.php" style="text-decoration:none;" class = "addbtn">+ Add Item</a>

  <br>
<div class="footer-content" align="center">
  <h3>ImpressoSupport@outlook.com <br> Phone number:9201234600 </h3>
<br>
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
