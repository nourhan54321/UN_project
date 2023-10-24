<?php
$host="localhost";
$username="root";
$password="";
try{
    $conn=new PDO("mysql:host=$host;dbname=web",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //$res=$conn->query("Select * from e where customer_id > 1")->fetchAll();
}
catch(Exception $e){
    echo' error';
}
?>