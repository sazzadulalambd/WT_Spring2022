<!--shawon,sazzadul alam [19-39385-1]-->

<?php 
$f_name=$l_name=$age=$e_mail=$password="";
if(isset($_POST["Submit"]))
{

    echo"<h3>Registration Confirmation</h3>";

    $f_name = $_POST["f_name"];
    if(empty($f_name))
    {
        echo"Enter a valid first name.<br>";
    }
    else
    {
        echo"Your first name is ".$f_name."<br>";
    }
    
    $l_name = $_POST["l_name"];
    if(empty($lname))
    {
        echo"Enter a valid last name.<br>";
    }
    else
    {
        echo"Your last name is ".$lname."<br>";
    }

    $age = $_POST["age"];
    if(empty($age))
    {
        echo"Enter valid age.<br>";
    }
    else{
        echo"Your age is ".$age."<br>";
    }

    if(!isset($_POST["r1"]) && !isset($_POST["r2"]) && !isset($_POST["r3"]))
    {
        echo"please select a radio button.<br>";
    }
    else{
        if(isset($_POST["r1"]))
        {
            echo"you have selected junior programmer.<br>";
        }
        if(isset($_POST["r2"]))
        {
            echo"you have selected senior programmer.<br>";
        }
        if(isset($_POST["r3"]))
        {
            echo"you have selected project director.<br>";
        }
    }

    if(! isset($_POST["Preferred_ language1"]) && !isset($_POST["Preferred_ language2"]) && !isset($_POST["Preferred_ language3"]))
    {
        echo"please select a checkbok.<br>";
    }
    else{

        if(isset($_POST["Preferred_ language1"])){
            echo"you have selected Java.<br>";
        }
        if(isset($_POST["Preferred_ language2"])){
            echo"you have selected C++.<br>";
        }
        if(isset($_POST["Preferred_ language3"])){
            echo"you have selected PHP.<br>";
        }
    }
    $e_mail = $_POST["e_mail"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$e_mail))
    {
        echo"invalid mail";
    }

    else
    {
        echo"Your mail is ".$e_mail."<br>";
    }

    
    $password = $_POST["FakePSW"];
    if(empty($password) || strlen($password)<8)
    {
        echo("Password must be more than 8 charecter.<br>");
    }
    else
    {
        echo"Your Password is ".$password."<br>";
    }

}
?>