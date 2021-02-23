<?php

 $username= $_POST['username'];
 $password=$_POST['password'];


 $user_length= strlen($username);
 $password_length =strlen ($password);


if(isset($_POST['submit'])){
   if($user_length<2)
   {
   	echo "Invalid username";
   }
   else
   {
	   	if($password_length<8)
	   		{
	   	echo "Password must be over 8 charecter";
	   }
	  
	   else
	   
	    {
		   	if(!preg_match('/[@#$%]/', $password))
		   {
		   	echo "Password must contains (@, #, $, %)";
		   }
	   	else { echo "Log In succesfull";}
	   }
   }
   
   
}

else{
    $blood = "";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    
    <form method="post" action="login.php">
        
        <fieldset style="width: 280px;">
            
        <legend><b>Login</b></legend>
        <table>
				<tr>
					<td>Username :</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="password" name="password"></td>
				</tr>
            
            <tr>
                <td></td>
             <input type="checkbox" Username="remember_me" Password="remember_me"/>
    Remember me
            </tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
                
            
            <a href="changePassword.php">forgot password</a>
			</table>
        </fieldset>
        
        
    </form>
    
</body>
</html>