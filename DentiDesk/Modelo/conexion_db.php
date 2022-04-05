<?php

GLOBAL $conn;
$host='10.6.74.158';
$port='5432';
$db='dentidesk';
$usuario='postgres';
$pass='bdsgi2018';


$conn = pg_connect("host=$host port=$port dbname=$db user=$usuario password=$pass");


?>