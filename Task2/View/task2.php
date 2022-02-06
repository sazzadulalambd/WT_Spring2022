<!--shawon,sazzadul alam [19-39385-1]-->

<?php
include "../Control/result.php";
?>

<html>
<head>
<title>  Task 2  </title> 
</head>

<body>
    <h1>Registration From <hr></h1>
    <form action ="" method="post">
    <table>

<tr>
    <td>Frist Name:</td>
    <td><input type ="text" name ="f_name"></td>
</tr>

<tr>
    <td>Last Name:</td>
    <td><input type ="text" name ="l_name"></td>
</tr>

<tr>
    <td>Age:</td>
    <td><input type ="text" name ="age"></td>
</tr>

<tr>
    <td>Designation:</td>
    <td><input type ="radio" name="Designation" value="r1" >Junior Programmer
        <input type ="radio" name="Designation" value="r2" >Senior Programmer
        <input type ="radio" name="Designation" value="r3" >Project Lead
    </td>
</tr>

<tr>
    <td>Preferred language</td>
    <td><input type ="checkbox" name="Preferred_ language1" > JAVA
        <input type ="checkbox" name="Preferred_ language2" > PHP
        <input type ="checkbox" name="Preferred_ language3" > C++
    </td>
</tr>

<tr>
    <td>E-mail:</td>
    <td><input type ="text" name ="e_mail"></td>
</tr>

<tr>
    <td>Password:</td>
    <td><input type="password" value="FakePSW"></td>
</tr>

<tr>
    <td>Please choose a file </td>
    <td><input type="file" name="myfile"></td>
</tr>

<tr>
    <td><input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </td>
    
</tr>
       
</table>

</form>

</body>

</html>

