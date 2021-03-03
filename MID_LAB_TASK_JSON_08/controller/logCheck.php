<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$userFile = fopen("../model/userValidationInfo.json", "r");
		$userData = fread($userFile, filesize('../model/userValidationInfo.json'));
		$userInfo = json_decode($userData, true);

		$username = $userInfo['user'];
		$password = $userInfo['pass'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{

			if($username == $_POST['username'] && $password == $_POST['password']){
				$_SESSION['flag'] = true;
				header('location: ../view/home.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>