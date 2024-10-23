<?php

// database connection variables ; 

$host = "localhost";
$port = 3306;
$db = "booking";
$dbUser = "root ";

// use mysqli to connect to the database;

$db = new mysqli($host, $port, $db, $dbUser);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}else{
    echo "Connected successfully";
}

// error handling function

function error (){
    echo "Error: " . $db->error;
    die();
}

