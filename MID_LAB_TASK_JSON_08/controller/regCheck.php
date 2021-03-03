<?php

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission...";
		}else{

			if($password == $repass){

				$userValidationInfo = [
										 'user' => $username,
										 'pass' => $password,
										 'rPass' => $repass,
										 'email' => $email,
				      				  ];

				$allData = json_encode($userValidationInfo);
				$userData = fopen("../model/userValidationInfo.json", "w");
				fwrite($userData, $allData);
				fclose($userData);
				header('location: ../view/login.html');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>