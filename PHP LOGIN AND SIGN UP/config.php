<?php
$servername='localhost';
$dbname='phpintro';
$username='root';
$password='';
$dsn='mysql:host='.$servername.';dbname='.$dbname;
try{
    $conn=new PDO($dsn,$username,$password);
    $conn->setAttribute(PDO::ERRMODE_EXCEPTION,PDO::ATTR_ERRMODE);
    // echo "Connection established successfully";

}catch(Exception $ex){
    echo "Connection failure".$ex->getMessage();
}

?>