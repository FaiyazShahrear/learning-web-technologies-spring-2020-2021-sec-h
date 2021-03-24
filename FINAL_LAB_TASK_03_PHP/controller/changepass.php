<?php
session_start();
$id = $_SESSION["id"];

  require_once('../model/userModel.php');

  if(isset($_POST['change'])){

    $pass = $_POST['password'];
    $npass = $_POST['npassword'];
    $rnpass= $_POST['rnpassword'];
    

    if($pass == "" || $npass == "" || $rnpass == ""){
      echo "null submission...";
    }else{

      $status = updatePass($npass,$id);

        if($status){

          $user=getUserById($id);
            if($user['type']=="user")
                {
                   
                    header('location: ../view/user_home.php');
                }
                else if($user['type']=="admin")
                {
                    
                    header('location: ../view/admin_home.php');
                }

        }else{
          echo "error";
        }
        
    }

  }
?>