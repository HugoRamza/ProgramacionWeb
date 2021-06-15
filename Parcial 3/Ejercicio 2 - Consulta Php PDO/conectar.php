<?php

$hostname = 'localhost';
$database = 'ramoza';
$username = 'root';
$password = '';

try
{
    $con = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
}
catch(PDOException $ex)
{
    echo "Error de conexión a la base de datos";
    echo $ex->getMessage();
    exit();
}
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>
