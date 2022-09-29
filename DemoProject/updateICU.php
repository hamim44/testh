<!DOCTYPE html>
<html lang="en">
<head>
    <title>UPDATE ICU</title>
</head>
<body>
    <p>ENTER UPDATED DATA:<br></P>
    <form method="post">
            ICU NUMBER<br><input type="text" name="iname"><br>
            LOCATION<br><input type="text" name="loc"><br>
            COST<br><input type="text" name="cost"><br>
            <input type="submit" name="submit"><br>
    </form> 
    <br>
    <br>
    <a href="homeAdmin.php">HOME</a>
</body>
</html>

<?php
    error_reporting(0);
    if(isset($_POST['submit'])){
        $val1=$_POST['iname'];
        $val2=$_POST["loc"];
        $val3=$_POST["cost"];

        $servername="localhost";
        $username="root";
        $password="";
        $database="iculist";

        $conn= mysqli_connect($servername,$username,$password,$database);

        if(!$conn){
            die("Error connection :". mysqli_connect_error());
        }

        $sql="INSERT INTO records (icu_name, loc, cost) VALUES('$val1', '$val2', '$val3')";
        $result = mysqli_query($conn,$sql);
              
        if($result)
        {   
            echo "UPDATED SUCCESSFULLY";
            header("refresh: 3; url=homeAdmin.php");;
        }
        else{
            echo " Not inserted ->".mysqli_error($conn);
        }              
    }