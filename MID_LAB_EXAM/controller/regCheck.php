<?php

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $id = $_POST['id'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $type = $_POST['type'];
        

        

        if($name == "" ||$id == "" | $password == "" || $cpassword == "" ||$type == "" ){
            echo "Please fill all information";

        }else{

            if($password == $cpassword ){
                if (file_exists('../model/user.json'))
                {
                    $myfile= file_get_contents('../model/user.json');
                    $current_data = json_decode($myfile,true);

                       $user= [
                                'name'         =>$name,
                                'name'         =>$id,
                                'password'      =>$password,
                                'type'        =>$type
                                ];
                                $current_data[]=$user;
                                $writedata=json_encode($current_data);
                                file_put_contents('../model/user.json',$writedata);

                                if (file_put_contents('../model/user.json',$writedata))
                                {
                                    header('location:../view/login.html');
                                    
                                }
                                else{
                                    echo "Login failed";
                                }
                            }
            }
        }
    }
            else{
                echo "password & confirm password mismatch..";
            }
?>