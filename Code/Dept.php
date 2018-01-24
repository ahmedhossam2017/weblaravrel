<?php
function ConnectDB()
{
    $serverName="localhost";
    $UserName="root";
    $Database="store";
    $password="";
   $conn=mysqli_connect($serverName, $UserName, $password, $Database);
return $conn;
}

function AddDept($Name,$code)
{
   
   
  $query=mysqli_query(ConnectDB(),"insert into dept(Name,code)values('$Name','$code')");
  if ($query)
   {
      echo "<p class='bg-success'> Succed Add dept</p>
";   
  }
 else {
      echo "<p class='bg-danger'> Error in Saving</p>";
  }
   
}

function CheckVaid($Name,$code)
{
    if (empty($Name)||empty($code))
     {
        return FALSE;   
    }
    else
    {
        return TRUE;
    }
}


//Get All Customers

function GetDept()
{
    
   $query=mysqli_query(ConnectDB(),"select * from dept");
   while ($row=mysqli_fetch_array($query)) 
   {
       echo " <tr>
                <td>".$row['Id']."</td>
                <td>".$row['Name']."</td>
                <td>".$row['code']."</td>
                <td>".$row['CreateaAt']."</td>
            </tr>";
       
   }
   
 
}

