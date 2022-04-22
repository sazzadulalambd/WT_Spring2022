<?php
include ("../model/model.php");
$fname=$lname=$age=$email=$Password=$error="";
if(isset($_POST["viewdata"]))
{
    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->feterData("person",$conobj);
    if($mydata->num_rows > 0)

{

echo "<table>";
echo"<tr><td>Frist Name</td><td>Last Name</td><td>Age</td><td>email</td><td>Password</td>";
while($row=$mydata->fetch_assoc())
{
    echo"<tr>"; 
    echo"<td>".$row["fname"]."</td>";
    echo"<td>".$row["lname"]."</td>";
    echo"<td>".$row["age"]."</td>";
    echo"<td>".$row["Mail"]."</td>";
    echo"<td>".$row["Password"]."</td>";
    echo"</tr>";
}
echo"</table>";
}
else{
    echo"no result found";
}
$mydb->closecon($conobj);

}
if(isset($_POST["search"]))
{
        if (empty($_POST['searchdata'])) {
        $error = "Invalid Email name";
        }
        else
        {
        $email=$_POST['searchdata'];
        $mydb=new db();
        $conobj=$mydb->opencon();
        $userQuery=$mydb->CheckUser($conobj,"person",$email);
        
            if($userQuery->num_rows > 0)
            { 
                while($row=$userQuery->fetch_assoc())
                {
                    $fname=$row["fname"];
                    $lname=$row["lname"];
                    $age=$row["age"];
                    $email=$row["Mail"];
                    $Password=$row["Password"];
                }
            }
            else {
                echo"no results found";
            }

        
        $mydb->closecon($conobj);

    }

    

}

?>
