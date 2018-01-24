<!DOCTYPE html>
 <?php
 include_once '../Lesson_2/Code/functions.php';
 
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
      
<?php

if(isset($_POST['sum']))
{
    
    echo Newsum($_POST['xx'],$_POST['yx']);
}

        ?>
        
        <form method="post">
            
            <p>
                Number One  <input type="text" name="xx" required="">
                
            </p>
            
            <p>
                
                Number Two  <input type="text" name="yx" required="">
            </p>
            
            <button type="submit" name="sum">
                Sum
            </button>
            
        </form>
        
        
        
        
    </body>
</html>
