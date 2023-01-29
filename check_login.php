<?php
session_start();
include "db.php";



if(isset($_POST["email"]) && isset($_POST["password"])){
	$email = mysqli_real_escape_string($con,$_POST["email"]);
	$password = mysqli_real_escape_string($con,$_POST["password"]);
	$sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
    $row = mysqli_fetch_array($run_query);
    $_SESSION["uid"] = $row["ID"];
    $_SESSION["name"] = $row["username"];

        
	//if user record is available in database then $count will be equal to 1
	if($count == 1){
            echo "<script> 
            alert('login_success');
            location.href='admin.php'; </script>";
            exit;		
}
else

echo "<script> 
            alert('Invalid email or password');
            location.href='sign-in.php'; </script>";
            exit;	
	
}

?>