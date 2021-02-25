<?php
    session_start();

    $user = $_SESSION['current_user'];

    $name =$user['name'];
    $email =$user['email'];
    $gender = $user['gender'];
    $dd = $user['dd'];
    $mm = $user['mm'];
    $yyyy = $user['yyyy'];

    if(isset($_SESSION['flag']))
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>XCompany - View Profile</title>
</head>
<body>
    
    <table style="border:2px solid black; border-collapse: collapse;"  align="center"width="50%" >

        <tr >

            <td style="border:2px solid black; border-collapse: collapse;" colspan="2" align="right">

                 <img align="left" src="logo.png" alt="Logo"width="250" height="60">
                   <br> 
                 <b>Logged in as </b>
                <a  href="dashboard.php"><?php echo $name ?></a> |
                <a  href="login.html">Logout</a>
            

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
            

            
                
               <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="250px">
                <fieldset style=" margin:  0px auto; width:80%;">
                <legend><b>PROFILE</b></legend>
                <table>
                   
                    <tr>
                        <td>
                            
                    
                    
                    
                    Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $name ?>
                    <hr>
                    Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $email ?>
                    <hr>
                    Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $gender ?>
                    <hr>
                    Date of Birth&nbsp;&nbsp;: <?php echo $dd ."/". $mm ."/".$yyyy?>
                    
                    
                     
                
                        </td>
                        
                        
                        
                        <td >
                            <img align="right" src="user.png" alt="Logo"width="150" height="150"><br>
                            <a href="profile_picture.php"><ul> <br> Change</ul></a>
                            
                        </td>
                    </tr>
                    <tr><td colspan="2"><hr></td></tr>
                    <tr><td colspan="2"><a href="edit_profile.php">Edit Profile</a></td></tr>
                </table>
                </fieldset>
                
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

<?php

  }
  else
  {
                echo "Login First";
                header('refresh:3; url=http://localhost/Test/login.html');
  }

?>