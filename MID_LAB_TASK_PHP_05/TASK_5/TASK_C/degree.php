<?php

$degree = "";

if(isset($_REQUEST['submit'])){
    
    if(isset($_REQUEST['degree'])){
        $degree = "";
        $degree_arr = $_REQUEST['degree'];
        for($i = 0; $i < count($degree_arr); $i++){
            
            $degree = $degree.$degree_arr[$i].",";
            
        }
        $degree = rtrim($degree, ",");
    }
    
    else{
        
        $degree = "Nothing was selected";
    }
    
}

else{
    
    $degree = "";
    
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>HTML Form - Degree</title>
</head>

<body>

    <form method="post" action="degree.php">

        <fieldset style="width:250px">

            <legend><b>DEGREE</b></legend>
            <input type="checkbox" name="degree[]" value="SSC"> SSC
            <input type="checkbox" name="degree[]" value="HSC"> HSC
            <input type="checkbox" name="degree[]" value="Bsc"> Bsc
            <input type="checkbox" name="degree[]" value="Msc"> Msc
            <hr><br><br>
            <input type="text" name="deg" value="<?=$degree?>">
            <input type="submit" name="submit" value="Submit">
        </fieldset>




    </form>

</body>

</html>