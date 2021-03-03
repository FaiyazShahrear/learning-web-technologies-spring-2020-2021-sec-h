<?php
	$title= "Create Page";
	include('header.php');
?>


<div id="page_title">
	<h1>Create Page</h1>
</div>

<div id='nav_bar'>
	<a href="home.php"> Back</a> |
	<a href="../controller/logout.php"> logout</a>	
</div>

<div id="main_content">
	<form method="post" action="">
		<fieldset>
			<legend>Create New</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value=""> </td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value=""> </td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="repass" value=""> </td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value=""> </td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="create" value="Create">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>

<?php 
	include('footer.php'); 
	if(isset($_POST['create']))
	{
		if($_POST['username'] == "" || $_POST['password'] == "" || $_POST['repass'] == "" || $_POST['email'] == ""){
			echo "null submission...";
		}else{

				$userValidationInfo = [
										 'user' => $_POST['username'],
										 'pass' => $_POST['password'],
										 'rPass' => $_POST['repass'],
										 'email' => $_POST['email'],
	      							  ];

				$allData = json_encode($userValidationInfo);
				$userData = fopen("../model/userValidationInfo.json", "w");
				fwrite($userData, $allData);
				fclose($userData);
			echo "User created";
		}
	}
?>