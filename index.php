<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/Impresso1.css">
	
	<!-- social media icons were taken from the resourse below  -->
	<script src="https://kit.fontawesome.com/cca0a1b6fc.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav>
      <div class="logo">
        <p>Impresso</p> <img src="images/logo1.jpeg" class="log" alt="logo" width="100" height="70"/>
      </div>
      <ul>
       <li><a href="#">Home</a></li>
                           
	 <li><a href="sign-up.php">Sign-up</a></li>
         <li><a href="sign-in.php">Sign-in</a></li>

                <li><a href="items.php">Items</a></li>
				<li><a href="about-us.html">About us</a></li>
				<?php 
				if(isset($_SESSION['uid']))
				echo "<li><a href='Admin.php'>Control Panel </a></li>";
				?>
      </ul> </nav> <br>

	<div class ="D">
	<p>
	<h1> Impresso </h1>
	We went to do a lot of stuff. <br>
	We're not in great shap.<br>
	We didn't get a good night's sleep. <br>
	We're a little depressed.<br>
	Coffe solves all these problems in one delightful little cup.
	</p> </div>


	<table class="T">
	<caption> Best Sellers !!</caption>
	<thead>
	<tr><td>
	<a href="items.php"><img src="images/image1.png" width="250" height="195" >
</a>
	</tr></td>
	<tr><td>
		<a href="items.php"><img src="images/image2.png" width="250" height="195" >
		</a>
	</tr></td>
	<tr><td>
		<a href="items.php"><img src="images/image3.png" width="250" height="195" >
		</a>
	</tr></td>

	</thead>
</table>
 <footer>
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
