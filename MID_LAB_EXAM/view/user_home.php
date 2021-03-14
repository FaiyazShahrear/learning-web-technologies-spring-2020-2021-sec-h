<?php

if(!isset($_COOKIE['flag'])){
    
    header('location: ../login.html');
    
}

?>


<center>
	<h1>Welcome Anne!</h1>
	<a href="profile.html">Profile</a>
	<br/>
	<a href="change_password.html">Change Password</a>
	<br/>
	<a href="../controller/logout.php">Logout</a>
</center>