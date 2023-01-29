<?php
session_start();
include "db.php";
if (isset($_POST["uname"])) {

	$u_name = $_POST["uname"];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['confpassword'];
	$mobile = $_POST['phone'];

if(empty($u_name) || empty($email) || empty($password) || empty($repassword) ||
	empty($mobile) ){
		
		echo "
			<script>
            alert('PLease Fill all fields..!');
            location.href='sign-up.php';
            </script>
		";
		exit();
	} else {
		
	if($password != $repassword){
		echo "
			<script>
            alert('Password not the same !!!');
            location.href='sign-up.php';
            </script>
		";
		exit();
	}
	else {

		$sql = "INSERT INTO `admin` 
		(`ID`, `username`, `password`, `email`, `phone`) 
		VALUES (NULL, '$u_name', '$password', '$email', '$mobile')";
		$run_query = mysqli_query($con,$sql);
		$_SESSION["uid"] = mysqli_insert_id($con);
		$_SESSION["name"] = $u_name;
        if($run_query){
			echo "
			<script>
            alert('Register Success ');
            location.href='Admin.php';
            </script>
		";
		exit();
		}

	}
	}
	
}



?>

