<?php

$servername = "localhost";
$username = "id21703361_cinaflix";
$password = "Cina@123";
$dbname = "id21703361_cina_flix";

//create connection
$conn = new mysqli ($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

?>