<?php
	
	$data = "";

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
		
		if($name == ""){
			$data = "";
		}else{
			$data = $name;
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>HTML Form - Name</title>
</head>
<body>
    
    <form method="post">
        
        <fieldset style="width: 180px;">
            
        <legend><b>NAME</b></legend>
        <input type="text" name="name" value="<?=$data?>"> <hr>
        <input type="submit" name="submit" value="Submit">
            
        </fieldset>
        
        
    </form>
    
</body>
</html>