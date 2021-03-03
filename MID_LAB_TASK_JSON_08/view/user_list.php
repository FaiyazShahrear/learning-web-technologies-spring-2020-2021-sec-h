<?php
	$title= "User list Page";
	include('header.php');
?>

	<div id="page_title">
		<h1>User List</h1>
	</div>

	<div id='nav_bar'>
		<a href="home.php"> Back</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>

	<div id="main_content">
		<table border="1">

			<?php

				$userFile = fopen("../model/userValidationInfo.json", "r");
				$userData = fread($userFile, filesize('../model/userValidationInfo.json'));
				$userInfo = json_decode($userData, true);

				$username = $userInfo['user'];
				$email = $userInfo['email'];
			?>

			<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>EMAIL</td>
				<td>ACTION</td>
			</tr>
			<tr>
				<td>1</td>
				<td> <?php echo $username; ?> </td>
				<td> <?php echo $email; ?> </td>
				<td>
					<a href="edit.php">EDIT</a> |
					<a href="delete.php">DELETE</a> 
				</td>
			</tr>
		</table>
	</div>

<?php include('footer.php'); ?>