<?php
include ("../control/registrationcheck.php");
?>

<html>
<head>
    <script src="../java/java.js"></script>
    
    </head>
    <body>

    <form action="" method="POST" >

    <span>Frist Name:</span> <input type="text" name="fname" placeholder="Frist name" id="fname" onkeyup="validfname()" > <span id="fnm"></span>
     <br>
     <br>     
    <span>Last Name:</span><input type="text" name="lname" placeholder="Last name" id="lname" onkeyup="validlname()"> <span id="lnm"></span>
    <br>
     <br>  
    <span>Age::::::::::</span><input type="text" name="age" placeholder="Age" id="age" onkeyup="validage()"> <span id="am"></span>
    <br>
     <br>  
    <span>Mail:::::::::</span><input type="text" name="email" placeholder="email" id="email" onkeyup="validemail()"> <span id="em"></span>
    <br>
     <br>  
    <span>Password::</span><input type="text" name="Password" placeholder="********" id="Password" onkeyup="validpassword()"> <span id="pm"></span>
    <br>
     <br>  
    <input type="submit" name="Submit" value ="Registration" onsubmit="return regValid()">

</form>

</body>
</html>