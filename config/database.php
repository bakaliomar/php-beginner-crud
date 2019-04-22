<?php
//used to connect database
$host ="127.0.0.1";
$db_name = "crud";
$username = "postgres";
$password = "1234";
try{
    $con=new PDO("pgsql:host={$host};dbname={$db_name}",$username,$password);

}
// show error
catch(PDOException $exception){
    echo "Connection error :".$exception->getMessage();
}
?>