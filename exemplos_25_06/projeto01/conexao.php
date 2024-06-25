<?php
$hostname = "localhost";
$database = "projeto01";
$username = "root";
$password = "";
$con = mysqli_connect($hostname, $username, $password, $database);
if(!$con){
    die(mysqli_connect_error()."Erro ao tentar conectar-se ao banco");
}