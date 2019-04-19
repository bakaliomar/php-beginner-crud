<?php
//used to connect database
$host ="localhost";
$db_name = "phpCrud1";
$username = "root";
$password = "1234";
try{
    $con=new PDO("mysql:host={$host};dbname={$db_name}",$username,$password);

}
// show error
catch(PDOException $exception){
    echo "Connection error :".$exception->getMessage();
}
?>