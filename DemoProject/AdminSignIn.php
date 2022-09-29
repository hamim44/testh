<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMIN SIGNING IN</title>
</head>
<body>
    <p>ENTER ADMIN_NAME AND PASSWORD</P>
    <form method="post">
            ADMIN_NAME<br><input type="text" name="uname"><br>
            PASSWORD  <br><input type="password" name="pass"><br>
            <input type="submit" name="submit"><br>
    </form>
</body>
</html>

<?php
     error_reporting(0);
     if(isset($_POST['submit'])){
        $pass= $_POST['pass'];
        $uname=$_POST["uname"];
        
        //connect database
        $servername="localhost";
        $username="root";
        $password="";
        $database="adminInfo";
    
        $conn= mysqli_connect($servername,$username,$password,$database);

        if(!$conn){
            die("CONNECTION ERROR :". mysqli_connect_error());
        }
        //FETCH
        $sql="SELECT *FROM records where uname='$uname'";
        $result=mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $check1= $row['pass'];
  

        if($pass==$check1){               
            echo "<br><br>SUCCESSFULLY LOGGED IN";
            header("refresh: 3; url=homeAdmin.php");
        }
        else{
            echo "<br><br>VERDICT WRONG !! (:";
            header("refresh: 3; url=index.php");
        }    
     }

?>
