<?php
$hostname = "localhost";
$database = "projeto01";
$username = "root";
$password = "";
$con = mysql_connect($hostname, $username, $password) 
or die(mysql_error()."Erro ao tentar conectar-se ao banco");
mysql_select_db($database, $con);