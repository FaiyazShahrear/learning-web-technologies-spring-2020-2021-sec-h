<?php
	session_start();
	$connect=mysqli_connect("localhost","root",'',"webtech");
	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission...";
		}else{

			$sql = "insert into user (username, password, email) values ('$username', '$password', '$email')";
    	if(mysqli_query($connect, $sql)){

				$user = [	
							'username'=>$username, 
							'password'=>$password, 
							'email'=> $email
						];

				
				$_SESSION['current_user'] = $user;

				header('location: ../view/login.html');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
	mysqli_close($connect)
?>