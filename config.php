<?php  

$hostname = "localhost";
$database = "store";
$username = "root";
$password = "";

try{
    $connection = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>