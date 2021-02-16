<?php

if(isset($_REQUEST['submit'])){
    
    if($_POST['Email']==""){
        
        echo "nothing was inputed";
        
    }
    
    else{
        echo "Name: ".$_POST['Email'];
    }
    
    
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>HTML Form - Email</title>
</head>
<body>
    
    <form method="post" action="email.php">
        
        <fieldset style="width: 190px;">
            
            <legend><b>EMAIL</b></legend>
        <input type="email" name="Email">
        <button title="hint:Sample@example.com" style="color: blue; font-size: 12px;"><b>i</b></button>
        <hr>
        <input type="submit" name="submit" value="Submit">
            
        </fieldset>
        
        
    </form>
    
</body>
</html>