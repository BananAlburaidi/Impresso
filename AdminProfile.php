<?php
session_start();
include("db.php");
$user_id=$_SESSION['uid'];
$result=mysqli_query($con,"select ID,username,password, email, phone from admin where ID='$user_id'")or die ("query 1 incorrect.......");

list($user_id,$user_name,$password,$email,$phone)=mysqli_fetch_array($result);

if(isset($_POST['btn_save'])) 
{

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$r = mysqli_query($con,"update admin set username='$username', password='$password', email='$email', phone='$phone' where ID='$user_id'")or die("Query 2 is inncorrect..........");
if($r)
{
  unset($_SESSION["uid"]);
  unset($_SESSION["name"]);
  $_SESSION['name'] = $user_name;
  $_SESSION['uid'] = $user_id;
echo "
<script>
alert(' Data Updated Successfully');
location.href='admin.php';
</script>
";
}
mysqli_close($con);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>My Account</title>
<link rel="stylesheet" type="text/css" href="css/impresso4.css">
<!-- social media icons were taken from the resourse below  -->
<script src="https://kit.fontawesome.com/cca0a1b6fc.js" crossorigin="anonymous"></script>
<style>
  p{
    margin-bottom:20px;
  }
  input
  {
    width: 262px;
    height: 36px;
    font-size: 15px;
  }
nav{
 background-image: url("images/header.png");
}
img{
 border-radius: 50%;

}
  </style>
</head>
<body>

<div>
<nav>
      <div class="logo">
        <p>Impresso</p>
		<img src="images/logo1.jpeg" class="log" alt="logo" width="100" height="70"/>
      </div>
      <ul>
        <li><a href="index.php">Home</a></li>
		<li><a href="items.php">Items</a></li>
		<li><a href="about-us.html">About us</a></li>
                <li><a href="Admin.php">Control Panel</a></li>
                <li><a href="favorite.html"><img src="images/fav.png" alt="fav.png" width="25"                      height="20"/></a></li>
		<li><a href="ShoppingBag.html" class="smallBag" ><img src="images/bag.png" alt="Fav"                   width="20" height="20"/></a></li>
      </ul>
 </nav>
</div>


 <br>
<br>
<br>
<br>
 <br>
<br>

<div class="Profile">

<div class="first">
<img class="ProfilePicture" src="images/profilePic.png" alt="Customer picture" />
<p class="wellcome">Hello, ... <br>

                      <a href="#" class="EditPro">View & Edit Your Profile </a> </p>


<hr>
<br>
</div>
<div class="second">
<form method="POST" action="AdminProfile.php">
<p><label>*User Name <br>
  <input  name = "username" type= "text" size="25" placeholder="User Name" value="<?php echo $user_name; ?>">
  </label></p>


    <p><label class="ELabel">*Email <br>
      <input  name = "email" type= "email" size="25" placeholder="Email" value="<?php echo $email; ?>">
      </label></p>

      <p><label class="ELabel">*Phone Number <br>
        <input  name = "phone" type= "tel" size="25" placeholder="phone" value="<?php echo $phone; ?>">
        </label></p>

<p><label class="ELabel">*Password <br>
  <input  name = "password" type= "password" size="25" placeholder="Password" value="<?php echo $password; ?>">
</label></p>
<input type="hidden" name="uid" value="<?php echo $_SESSION['uid']; ?>">

<p>
<br>
<br>
<br>
<input type="submit" name="btn_save" value="Edite">
</p>
</form>
</div>
<br>
<br>
</div>


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
