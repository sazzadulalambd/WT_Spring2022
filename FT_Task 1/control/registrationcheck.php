<?php
include ("../model/model.php");
$error="";
if(isset($_POST["Submit"]))
{

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $salary=$_POST["salary"];
    $address=$_POST["address"];
    if(empty($fname) || empty($lname) || empty($age) || empty($salary) || empty($address))
    {
    echo "Field can not be empty";

    }
    else 
    {
        $dbobj=new db();
        $conobj=$dbobj->opencon();
        $dbobj->InsertData($fname,$lname,$age,$salary,$address,"person",$conobj);
        $dbobj->closecon($conobj);

        header("location:viewdata.php");
    

        
    }
}
?>