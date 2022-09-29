<!DOCTYPE html>
<html lang="en">
<head>
    <title>UPDATE ICU</title>
</head>
<body>
    <p>ENTER UPDATED DATA:<br></P>
    <form method="post">
            DOCTOR ID<br><input type="text" name="dname"><br>
            LOCATION<br><input type="text" name="loc"><br>
            HOSPITAL<br><input type="text" name="hos"><br>
            COST<br><input type="text" name="cost"><br>
            <input type="submit" name="submit"><br>
    </form> 
    <br>
    <br>
    <a href="homeAdmin.php">HOME</a>
</body>
</body>
</html>

<?php
    error_reporting(0);
    if(isset($_POST['submit'])){
        $val1=$_POST['dname'];
        $val2=$_POST["loc"];
        $val3=$_POST["cost"];
        $val4=$_POST["hos"];

        $servername="localhost";
        $username="root";
        $password="";
        $database="doclist";

        $conn= mysqli_connect($servername,$username,$password,$database);

        if(!$conn){
            die("Error connection :". mysqli_connect_error());
        }

        $sql="INSERT INTO records (dname, loc, cost, hos) VALUES('$val1', '$val2', '$val3', '$val4')";
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