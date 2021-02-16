<?php

if(isset($_REQUEST['submit'])){
    
    if (isset($_POST['gender'])){echo "Gender: ".$_POST['gender'];}   
      
else{echo "nothing was selected.";}
  
    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>HTML Form - Gender</title>
</head>
<body>
    
    <form method="post" action="gender.php">
        
        <fieldset style="width:200px">
            
            <legend><b>GENDER</b></legend>
            
                <input type="radio" name="gender" value="Male" > Male 
				<input type="radio" name="gender" value="Female"  > Female
				<input type="radio" name="gender" value="Other" > Other <br>
            
        </fieldset>
        <br>
        <input type="submit" name="submit" value="Submit">
        
    </form>
    
</body>
</html>