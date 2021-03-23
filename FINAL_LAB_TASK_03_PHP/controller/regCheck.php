<?php
    session_start();
    require_once('../model/userModel.php');

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $id = $_POST['id'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        

        

        if($name == "" ||$id == "" | $password == "" || $cpassword == ""|| $email == "" ||$type == "" ){
            echo "Please fill all information";

        }
        else{

            if($password == $cpassword ){
                    

                       $user= [
                                'name'         =>$name,
                                'id'           =>$id,
                                'password'     =>$password,
                                'email'     =>$email,
                                'type'         =>$type
                                ];
                                $status = insertUser($user);
                                if ($status)
                                {
                                    header('location:../view/login.html');
                                    
                                }
                                else{
                                    echo "Login failed";
                                }
                            }
            }
        }
    
            else{
                echo "password & confirm password mismatch..";
            }
?>