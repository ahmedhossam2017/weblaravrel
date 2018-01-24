<?php

include_once '../Lesson_2/Code/functions.php';
if(isset($_POST['save']))
{
    $check=CheckVaid($_POST['CustomerName']);
    if($check==TRUE)
    {
    AddCustomer($_POST['CustomerName']);
    }
    else
    {
        echo "<h2>Name is Required</h2>";
    }
}
?>

<form method="post" style="background:grey;min-height:600px">
    <label>Customer Name</label>
    
    <input type="text" name="CustomerName">
    <button type="submit" name="save">
        save Customer
    </button>
    <a href="AllCustomer.php">
        show All Customer
    </a>
    
</form>

