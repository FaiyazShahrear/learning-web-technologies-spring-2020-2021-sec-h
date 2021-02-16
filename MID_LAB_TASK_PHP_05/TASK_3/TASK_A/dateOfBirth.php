<?php

echo "Date of Birth: ".$_POST['day']."/".$_POST['month']."/".$_POST['year'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML Form - Date of Birth</title>
</head>
<body>
    
    <form method="post" action="dateOfBirth.php">
        
        <fieldset style="width:200px">
            
            <legend><b>DATE OF BIRTH</b></legend>
            <pre>  dd      mm     yyyy</pre>
            <input type="tel" name="day" size="1"><b> /</b>
              <input type="tel" name="month" size="1"><b> /</b>
              <input type="tel" name="year" size="2">
               <hr>
                
        <input type="submit" value="Submit">
        </fieldset>
        
        
        
    </form>
    
</body>
</html>

