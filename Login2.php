<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($username=='admin' && $password=='12345678'){
		echo "Login successful";
	}else{
		echo "Invalid username or password";
	}




?>