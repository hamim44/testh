<!DOCTYPE html>
<html lang="en">
<head>
    <title>ICU LIST</title>
</head>
<body>
    <h3>ICU LIST<br><br></h3>

    <?php 
    //connect database
    $servername="localhost";
    $username="root";
    $password="";
    $database="iculist";

    $conn= mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("CONNECTION ERROR :". mysqli_connect_error());
    }

        $sql="SELECT *FROM records";
        $result=mysqli_query($conn,$sql);

        while($row = mysqli_fetch_assoc($result)){
            echo $row['id'].".". "  #NAME :". $row['icu_name']. "  #LOCATION: ". $row['loc']." #COST: ". $row['cost'];
            echo "<br>";
            echo "<br>";
        }    
    ?>

    <br>
    <br>
    <a href="homeUser.php">HOME</a>

</body>
</html>


