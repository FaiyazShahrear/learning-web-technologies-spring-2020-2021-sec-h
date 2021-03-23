<?php
    session_start();
    require_once('../model/userModel.php');

    if(isset($_POST['submit'])){

        $id = $_POST['id'];
        $password = $_POST['password'];

        if($id == "" || $password == ""){
            echo "null submission...";
        }else{

            $status = validateUser($id, $password);
            if($status){
                $_SESSION['flag'] = true;
               $user=getUserById($id);
            if($user['type']=="user")
                {
                    $_SESSION['name']=$user['name'];
                    $_SESSION['id']=$user['id'];
                    header('location: ../view/user_home.php');
                }
                else if($user['type']=="admin")
                {
                    $_SESSION['name']=$user['name'];
                    $_SESSION['id']=$user['id'];
                    header('location: ../view/admin_home.php');
                }

                

            }else{
                echo "invalid user";
            }
        }

    }
?>