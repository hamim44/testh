<!DOCTYPE html>
<html lang="en">
<head>
    <title>DOCTOR LIST</title>
</head>
<body>
    <h3>DOCTOR LIST<br><br></h3>

    <?php 
    
    //connect database
    $servername="localhost";
    $username="root";
    $password="";
    $database="doclist";

    $conn= mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("CONNECTION ERROR :". mysqli_connect_error());
    }

        $sql="SELECT *FROM records";
        $result=mysqli_query($conn,$sql);

        while($row = mysqli_fetch_assoc($result)){
            echo $row['id'].".". "  #NAME :". $row['dname']. "  #LOCATION: ". $row['loc']."  #HOSPITAL: ". $row['hos']."  #COST: ". $row['cost'];
            echo "<br>";
            echo "<br>";
        }    
    ?>
    <br>
    <br>
    <a href="homeUser.php">HOME</a>
</body>
</html>


