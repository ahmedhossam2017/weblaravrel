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
    $res=Newsum($_POST['num1'],$_POST['num2']);
    echo $res+500;
}

if(isset($_POST['test']))
{
    ConnectDB();
}

        ?>
        
        <form method="post">
            
            <p>
                Number One  <input type="text" name="num1" required="">
                
            </p>
            
            <p>
                
                Number Two  <input type="text" name="num2" required="">
            </p>
            
            <button type="submit" name="sum">
                Sum
            </button>
            
             <button type="submit" name="test">
                Test
            </button>
            
        </form>
        
        
        
        
    </body>
</html>
