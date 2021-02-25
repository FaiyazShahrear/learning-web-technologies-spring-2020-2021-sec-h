<?php 
if(isset($_POST['submit']))
  {
  	session_start();
  	 $name = $_POST['name'];
        $email = $_POST['email'];

        $_SESSION['username'] = $name;
        $_SESSION['email'] = $email;
}
?>