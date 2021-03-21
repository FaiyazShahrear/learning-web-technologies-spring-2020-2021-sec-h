
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Product</title>
</head>
<body>


        <tr>
            
            <td style="border:2px solid black; border-collapse: collapse;">
                
                <form action="../controller/addCheck.php" method="post">
                    <br><br><br><br><br>
                    <fieldset style="width:25%; margin:  0px auto;"  >
                        
                        <legend align= "left"><b>ADD PRODUCTS</b></legend>
                        
                        Name<br><input type="text" name="name"> <br>
                        Buying Price<br><input type="text" name="bprice"><br>
                        Selling Price<br><input type="text" name="sprice"><br>
                        <hr>
                        <input type="checkbox" name="display" > <b>Display</b><br><br>
                        <hr>
                        <input type="submit" name="save" value="Save"> 

                    </fieldset>
                
                    <br><br><br><br><br>
                </form>
                
            </td>
            
        </tr>
 
    
</body>
</html>