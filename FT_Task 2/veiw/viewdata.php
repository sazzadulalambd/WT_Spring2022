<?php include("../control/veiwdatacheck.php")?>
<html>
    <body>
        <form action=""method="POST">
            <input type="submit" name="viewdata" value="View Data">
</form>  
<form action=""method="POST">
            <input type="text" name="searchdata" placeholder="Enter email address">
            <input type="submit" name="search" value="Search">
</form> 

<form action=""method="POST">
<input type="text" name="fname" placeholder="Frist name" value="<?php echo $fname;?>">
<input type="text" name="lname" placeholder="Last name" value="<?php echo $lname;?>">
<input type="text" name="age" placeholder="Age" value="<?php echo $age;?>">
<input type="text" name="email" placeholder="email" value="<?php echo $email;?>">
<input type="text" name="Password" placeholder="********" value="<?php echo $Password;?>">
</form> 
</body>
</html>
