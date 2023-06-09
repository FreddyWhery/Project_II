<?php

$host="localhost";
$user="root";
$pass="";
$dbname="cadastrar";
$port=3306;

try{
    $conn = new PDO("mysql:host=$host;port=$port;dbname=" .$dbname, $user, $pass);
    //echo "Conectado!";

}catch(PDOException $err){
//echo "Não tem conexão". $err->getMessage();
}