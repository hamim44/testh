
<!DOCTYPE html>
<html lang="en">
<head>
    <title>USER SIGNING IN</title>
</head>
<body>
    <p>ENTER USERNAME AND PASSWORD</P>
    <form method="post">
            USERNAME<br><input type="text" name="uname"><br>
            PASSWORD<br><input type="password" name="pass"><br>
            <input type="submit" name="submit"><br>
    </form>
    <br>
    <a href="signup.php">DO SIGNUP</a>
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
        $database="userinfo";
    
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
            header("refresh: 3; url=homeUser.php");
        }
        else{
            echo "<br><br>VERDICT WRONG !! (:";
            header("refresh: 3; url=index.php");
        }    
     }

?>