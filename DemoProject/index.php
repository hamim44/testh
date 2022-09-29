<?php
    error_reporting(0);
    if(isset($_POST['submit'])){
        $selection = $_POST['selection'];
        $user="user";
        $admin="admin";
        if(empty($selection))
        {
            echo "Select any.";
        }
        elseif($selection==$admin){
            header("refresh: 0.1; url=AdminSignIn.php");
        }
        elseif($selection==$user){
            header("refresh: 0.1; url=UserSignIn.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hospital Occupancy</title>
</head>
<body>
    <h2>SIGN IN AS :</h2>
    <form  method="post">
        <input type="radio" name="selection" value="admin">ADMIN<br>
        <input type="radio" name="selection" value="user">USER<br>
        <br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>  
</body>
</html>