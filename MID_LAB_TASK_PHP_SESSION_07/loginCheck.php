<?php 
    session_start();
    $user = $_SESSION['current_user'];
    

    if(isset($_POST['submit'])){
        $username =$_POST['username'];
        $password = $_POST['password'];

        if ($username =="" || $password=="")
        {
            echo "Please Enter a valid username and password";
            header('refresh:3; url=http://localhost/Test/login.html');
        }
        else
        {
            
            if($username ==$user['username'] && $password == $user['password'])

            {
                $_SESSION['flag']=true;
                echo "Login successfull. Please";
                header('refresh:3; url=http://localhost/Test/dashboard.php');
            }
            else
            {
                echo "Login failed";
                header('refresh:3; url=http://localhost/Test/login.html');
            }

        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>XCompany - Login</title>
</head>
<body>
    
    <table style="border:2px solid black; border-collapse: collapse;"  align="center"width="70%" >

        <tr >

            <td style="border:2px solid black; border-collapse: collapse;" align="right">

                 <img align="left" src="logo.png" alt="Logo"width="250" height="60">
                    <br>
                 <a href="publicHome.html">Home  </a>|
                <a  href="login.html">Login</a>|
                <a  href="registration.html">Registration</a>
            </td>

        </tr>

        <tr>
            
            <td style="border:2px solid black; border-collapse: collapse;">
                
                <form action="loginCheck.php" method="post">
                    <br><br><br><br><br>
                    <fieldset style="width:45%; margin:  0px auto;"  >
                        
                        <legend align= "left"><b>LOGIN</b></legend>
                        
                        User Name&nbsp;:&nbsp;<input type="text" name="username" placeholder=" Enter User Name"><br><br>
                        Password&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="password" name="password" placeholder=" Enter Password">
                        <hr>
                        <input type="checkbox" name="remember_me" value="1"> <b>Remember Me</b><br><br>
                        <input type="submit" name="submit" value="Submit"> <a href="forgotPassword.php">Forgot Password?</a>

                    </fieldset>
                
                    <br><br><br><br><br>
                </form>
                
            </td>
            
        </tr>

        <tr>

            <td style="border:2px solid black; border-collapse: collapse;" colspan="2" align="center">
                <p>Copyright &#169; 2017</p>
            </td>

        </tr>

    </table>
    
</body>
</html>