<?php

if(isset($_REQUEST['submit'])){
    
    if(!empty($_REQUEST['name']) or !empty($_REQUEST['id']) or !empty($_REQUEST['password']) or !empty($_REQUEST['radio'])){
        
        if($_REQUEST['password'] == $_REQUEST['cpassword']){
            
           
    
    else{echo "Please fill up all information.";}
    
}

?>