<?php
	$title= "Delete Page";
	include('header.php');

	$userFile = fopen("../model/userValidationInfo.json", "r");
	$userData = fread($userFile, filesize('../model/userValidationInfo.json'));
	$userInfo = json_decode($userData, true);

	$username = $userInfo['user'];
?>

<div id="page_title">
	<h1>Delete Page</h1>
</div>

<div id='nav_bar'>
	<a href="user_list.php"> Back</a> |
	<a href="../controller/logout.php"> logout</a>	
</div>


<div id="main_content">
	<form method="post" action="">
		<table>
			<tr>
				<td> <?php echo "Are you sure to delete $username's account?" ?> </td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="delete" value="Delete">
				</td>
			</tr>
		</table>
	</form>
</div>

<?php 
	include('footer.php');
	if(isset($_POST['delete']))
	{
		$userValidationInfo = [
								 'user' => ".",
								 'pass' => ".",
								 'rPass' => ".",
								 'email' => ".",
		      				  ];

		$allData = json_encode($userValidationInfo);
		$userData = fopen("../model/userValidationInfo.json", "w");
		fwrite($userData, $allData);
		fclose($userData);
		header('location: ../');
	}
?>