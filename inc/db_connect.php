
<?php 

$servername = "localhost";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=loginsystem", $username, $password);

    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "<div><script>alert('Connected succesfully')</script></div>";
}
catch(PDOException $e){

    echo "connection failed: " . $e->getMessage();

}


?>