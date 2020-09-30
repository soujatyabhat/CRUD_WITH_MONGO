<?php

require_once '../vendor/autoload.php';

// Create connection with MongoDB server //
$connection = new MongoDB\Client;

//Select database //
$database = $connection->selectDatabase("vote");

//Select collection //

$collection = $database->selectCollection("game");

?>