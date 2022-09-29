<!DOCTYPE html>
<html lang="en">
<head>
    <title>USER SIGNING UP</title>
</head>
<body>
    <p>ENTER REQUIRED DATA</P>
    <form method="post">
            USERNAME<br><input type="text" name="uname"><br>           
            PASSWORD<br><input type="password" name="pass"><br>
            CONFIRM PASSWORD<br><input type="password" name="cpass"><br>
            <input type="submit" name="submit"><br>
    </form>
</body>
</html>



<?php
    error_reporting(0);
    if(isset($_POST['submit'])){
        if($_POST["pass"] == $_POST["cpass"]){
            $val1=$_POST["uname"];
            $val2= $_POST['pass'];

            if (empty($_POST["uname"])) {
                echo "USERNAME is required";
                header("refresh: 1; url=signup.php");
            }
            else {
                $email = test_input($_POST["uname"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "Invalid email format";
                    header("refresh: 1; url=index.php");
                } 
                else{S
                    $servername="localhost";
                    $username="root";
                    $password="";
                    $database="userinfo";
                
                    $conn= mysqli_connect($servername,$username,$password,$database);
            
                    if(!$conn){
                        die("CONNECTION ERROR :". mysqli_connect_error());
                    }
                    $sql="INSERT INTO records (uname,pass) VALUES('$val1', '$val2')";
                    $result = mysqli_query($conn,$sql);

                    if($result)
                    {
                        echo " DATA INSERTED";
                        header("refresh: 1; url=UserSignIn.php");
                    }
                    else{
                        echo " Not inserted->".mysqli_error($conn);
                    }             
                } 
            }
        }
        else{
            echo "PASSWORD MISMATCH";
            header("refresh: 1; url=index.php");
        }
    }
        
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>