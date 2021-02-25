<?php
    session_start();
    $user = $_SESSION['current_user'];
    $name =$user['name'];
    if(isset($_SESSION['flag']))
    {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>XCompany - Login</title>
</head>
<body>
    
    <table style="border:2px solid black; border-collapse: collapse;"  align="center"width="50%" >

        <tr >

            <td style="border:2px solid black; border-collapse: collapse;" colspan="2" align="right">

                 <img align="left" src="logo.png" alt="Logo"width="250" height="60">
                   <br> 
                 <b>Logged in as </b>
                <a  href="dashboard.php"><?php echo $name ?></a> |
                <a  href="logout.php">Logout</a>
            

        </tr>

        <tr >
           
            
            <td colspan="1" width="32%" >
              <b>Account </b>
              <hr align="left" width="90%">
                <ul align="left" >
                    
                    
                  <li><a  href="dashboard.php">Dashboard</a></li>
                  <li><a  href="viewProfile.php">View Profile</a></li>
                  <li><a  href="editProfile.php">Edit Profile</a></li>
                  <li><a  href="profilePicture.php">Change Profile Picture</a></li>
                  <li><a  href="changePassword.php">Change Password</a></li>
                  <li><a  href="login.html">Logout</a></li>
                </ul>
              </td>
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="250px"><h2><ul>Welcome <?php echo $name ?>  </ul></h2></td>
                
                
            </tr>

        <tr>

            <td style="border:2px solid black; border-collapse: collapse;" colspan="2" align="center">
                <p>Copyright &#169; 2017</p>
            </td>

        </tr>

    </table>
    
</body>
</html>
<?php

  }
  else
  {
                echo "Login First";
                header('refresh:3; url=http://localhost/Test/login.html');
  }

?>