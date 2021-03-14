
<?php
    session_start();
    

    if(isset($_POST['submit'])){
        

        $username =$_POST['username'];
        $password = $_POST['password'];

         if($username == "" || $password == ""){
            echo "Please enter username and password";
            
        }else{
           
            $myfile= file_get_contents('../model/user.json');
            $current_data = json_decode($myfile,true);
            foreach ($current_data as $search)
            {
                


                if($search['username'] == $username && $search['password'] == $password){
                setcookie('flag', true, time()+3600, '/');


                
                $user_name=$search['name'];
                $user_id=$search['id'];
                
                $user_password=$search['password'];
                $user_type=$search['type'];


                $_SESSION['name']=$user_name;
                $_SESSION['password']=$user_password;
                $_SESSION['id']=$user_id;
                $_SESSION['type']=$user_type;
               
                header('location: ../view/admin');
                }else{
                    echo "Username or password is invalid";
                } 
            }
            
        }

    }
    else if(isset($_POST['signup']))
        {
            header('location:../view/registration.html');
        }
?>