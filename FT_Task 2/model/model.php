<?php
Class db{
    function opencon(){
$servername="localhost";
$username="root";
$password="";
$dbname="testdb";
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    echo "could not connect";
}
else{
    return $conn;
}
    }
function InsertData($fname,$lname,$age,$email,$Password,$tablename,$conn){
$sql="INSERT INTO $tablename (fname,lname,age,Mail,Password) VALUES 
('$fname','$lname','$age','$email','$Password')";

if ($conn->query($sql)===TRUE)

{

    echo "data inserted";
    return $sql;
}
else{
echo "data cant insert ".$conn->error;

}
}


function feterData($tablename,$conn){
    $sql = "SELECT * FROM $tablename";

    $result = $conn->query($sql);
    return $result;
}


function CheckUser($conn,$tablename,$email)
 {
$result = $conn->query("SELECT * FROM  $tablename WHERE Mail = '". $email."'");
 return $result;
 }


function closecon($conn){
     $conn->close();
}

}
?>