<?php
include ("../model/model.php");
$error="";
if(isset($_POST["Submit"]))
{

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $email=$_POST["email"];
    $Password=$_POST["Password"];
    if(empty($fname) || empty($lname) || empty($age) || empty($email) || empty($Password))
    {
    echo "Field can not be empty";

    }
    else 
    {
        $dbobj=new db();
        $conobj=$dbobj->opencon();
        $dbobj->InsertData($fname,$lname,$age,$email,$Password,"person",$conobj);
        $dbobj->closecon($conobj);

        header("location:viewdata.php");
    

        
    }
}
?>