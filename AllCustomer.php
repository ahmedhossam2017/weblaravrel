<!DOCTYPE html>
 <?php
 include_once '../Lesson_2/Code/functions.php';
 
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>all customers</title>
    </head>
    <body>
       
        <table>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
            </tr>
           
            <?php
             GetCustomer();
            ?>
            
        </table>
       
        
        
        
        
    </body>
</html>
