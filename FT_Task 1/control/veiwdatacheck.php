<?php
include ("../model/model.php");
$fname=$lname=$age=$salary=$address=$error="";
if(isset($_POST["viewdata"]))
{
    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->feterData("person",$conobj);
    if($mydata->num_rows > 0)

{

echo "<table>";
echo"<tr><td>Frist Name</td><td>Last Name</td><td>Age</td><td>Salary</td><td>Address</td>";
while($row=$mydata->fetch_assoc())
{
    echo"<tr>"; 
    echo"<td>".$row["fname"]."</td>";
    echo"<td>".$row["lname"]."</td>";
    echo"<td>".$row["age"]."</td>";
    echo"<td>".$row["salary"]."</td>";
    echo"<td>".$row["address"]."</td>";
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
        if (empty($_POST['fname'])) {
        $error = "Invalid Frist name";
        }
        else
        {
        $fname=$_POST['fname'];
        $mydb=new db();
        $conobj=$mydb->opencon();
        $userQuery=$mydb->CheckUser($conobj,"person",$fname);
        
        if ($userQuery->num_rows > 0) {

            $mydata=$mydb->feterData("Person",$conobj);
            if($mydata->num_rows > 0)
            { echo "<form action=' ' method='post'>";
                while($row=$mydata->fetch_assoc())
                {
        
                    echo"<input type='text' name='fname' value='".$row["fname"]."'>";
                    echo"<br>";
                    echo"<input type='text' name='lname' value='".$row["lname"]."'>";
                    echo"<br>";
                    echo"<input type='text' name='age' value='".$row["age"]."'>";
                    echo"<br>";
                    echo"<input type='text' name='salary' value='".$row["salary"]."'>";
                    echo"<br>";
                    echo"<input type='text' name='address' value='".$row["address"]."'>";
                    echo"<br>";
                    echo"<input type='submit' name='update' value='update''>";
                }
                echo"</form>";
            }
            else {
                echo"no results found";
            }

           }
         else {
        $error = "Username or Password is invalid";
        }

    $mydb->closecon($conobj);

}
}
?>
