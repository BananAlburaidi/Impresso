<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>sign up</title>
    <link rel="stylesheet" type="text/css" href="css/impresso2.css">
    <!-- social media icons were taken from the resourse below  -->
      <script src="https://kit.fontawesome.com/cca0a1b6fc.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav>
      <div class="logo">
        <p>Impresso</p>
        <img src="images/logo1.jpeg" class="log" alt="logo" width="100" height="70"/>
      </div>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="items.php">Items</a></li>
        <li><a href="about-us.html">About us</a></li>
      </ul>
    </nav>

    <div class="sign-up">

      <form align="center" method="POST" action="check_register.php">

        <p><label class="ELabel">*User Name <br>
          <input id = "textboxes" name = "uname" type= "text" size="25" placeholder="User Name">
          </label></p>


            <p><label class="ELabel">*Email <br>
              <input id = "textboxes" name = "email" type= "email" size="25" placeholder="Email">
              </label></p>

              <p><label class="ELabel">*Phone Number <br>
                <input id = "textboxes" name = "phone" type= "tel" size="25" placeholder="phone">
                </label></p>

        <p><label class="ELabel">*Password <br>
          <input id = "textboxes" name = "password" type= "password" size="25" placeholder="Password">
        </label></p>
        <p><label class="ELabel">*Confirm Password <br>
          <input id = "textboxes" name = "confpassword" type= "password" size="25" placeholder="Confirm Password">
        </label></p>

        <p>

        <input type="submit" value="sign up">
        </p>
        </form>
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
