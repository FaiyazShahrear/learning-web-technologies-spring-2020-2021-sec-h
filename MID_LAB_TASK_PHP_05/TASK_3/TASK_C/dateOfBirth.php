<?php

$date = "";

if(isset($_REQUEST['submit'])){
    
    if($_REQUEST['day']=="" or $_REQUEST['month']=="" or $_REQUEST['year']==""){
        
        $date = "Please enter all the values";
        
    }
    
    else{
        
        
        $date = strval($_REQUEST['day'])."/".strval($_REQUEST['month'])."/".strval($_REQUEST['year']);
        
    }
    
}
   
else{
    
    $date = "";
    
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>HTML Form - Date of Birth</title>
</head>
<body>
    
    <form method="post" action="dateOfBirth.php">
        
        <fieldset style="width:200px">
            
            <legend><b>DATE OF BIRTH</b></legend>
            <pre>  dd      mm     yyyy</pre>
            <input type="tel" name="day" size="1"><b> /</b>
              <input type="tel" name="month" size="1"><b> /</b>
              <input type="tel" name="year" size="2"><br><br>
              <input type="text" name="date" value="<?=$date?>">
               <hr>
                
        <input type="submit" name="submit" value="Submit">
        </fieldset>
        
        
        
    </form>
    
</body>
</html>