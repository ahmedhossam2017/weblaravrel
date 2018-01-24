<?php
function Sum()
{
    $x=$_POST['x'];
    $y=$_POST['y'];
    $sum=$x+$y;
   echo $sum;
}
function Newsum($x,$y)
{
    return $x+$y;
}

function ConnectDB()
{
    $serverName="localhost";
    $UserName="root";
    $Database="store";
    $password="";
   $conn=mysqli_connect($serverName, $UserName, $password, $Database);
return $conn;
}

//Add Customer

function AddCustomer($Name)
{
   
   
  $query=mysqli_query(ConnectDB(),"insert into customer(customerName)values('$Name')");
  if ($query)
   {
      echo "<h2> Add Customer succed</h2>";   
  }
 else {
      echo "Error in saving Customer";
  }
   
}

function CheckVaid($par)
{
    if (empty($par))
     {
        return FALSE;   
    }
    else
    {
        return TRUE;
    }
}


//Get All Customers

function  GetCustomer()
{
    
   $query=mysqli_query(ConnectDB(),"select * from customer where ");
   while ($row=mysqli_fetch_array($query)) 
   {
       echo " <tr>
                <td>".$row['CustomerID']."</td>
                <td>".$row['customerName']."</td>
            </tr>";
       
   }
   
 
}



