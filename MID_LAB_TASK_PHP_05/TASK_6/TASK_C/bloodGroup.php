<?php

$blood = "";

if(isset($_POST['submit'])){
    $blood = $_REQUEST['bloodGroup'];
}

else{
    $blood = "";
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>HTML Form - Blood Group</title>
</head>
<body>
    
    <form method="post" action="bloodGroup.php">
        
        <fieldset style="width:200px">
            
            <legend><b>BLOOD GROUP</b></legend>
            <select name="bloodGroup">
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+"  selected >O+</option>
				<option value="O-">O-</option>
			</select> <br> <br>
			<input type="text" name="blood" value="<?=$blood?>">
			<hr>
   
       <input type="submit" name="submit" value="Submit">
        </fieldset>
        <br>
        
        
        
    </form>
    
</body>
</html>