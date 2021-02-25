<?php
    session_start();

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $dd = $_POST['dd'];
        $mm = $_POST['mm'];
        $yyyy = $_POST['yyyy'];
        $gender = $_POST['gender'];
        

        

        if($name == "" ||$username == "" || $email == "" || $password == "" || $cpassword == "" ||$gender == "" ){
            echo "Please fill all information";
        }else{

            if($password == $cpassword ){

                $user = [   
                            'name'=> $name,
                            'email'=> $email,
                            'username'=>$username, 
                            'password'=>$password,
                            'gender'=> $gender,
                            'dd'=> $dd,
                            'mm'=> $mm, 
                            'yyyy'=> $yyyy,
                            
                        ];

                $_SESSION['current_user'] = $user;

                header('location: login.html');
            }else{
                echo "password & confirm password mismatch..";
            }
        }

    }
?>