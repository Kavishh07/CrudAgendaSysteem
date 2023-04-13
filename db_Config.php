<?php
//foutmeldingen zichtbaar maken
ini_set('display_errors', 1);
error_reporting(E_ALL);

$db_hostname = 'localhost';
$db_username = 'db87276';
$password = 'KavishSoman';
$db_database = 'db_87276';

$mysqli = mysqli_connect($db_hostname, $db_username, $password, $db_database);
if (!$mysqli){
    echo "FOUT: geen connectie naar database. <br>";
    echo "Error: " . mysqli_connect_error() . "<br/>";
    exit;
}

else{
    echo "verbinding met " . $db_database . " is gemaakt!<br/>";
}
