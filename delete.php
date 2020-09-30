<?php

require_once 'connection.php';

$id = $_GET["id"];

$filter = [
    "_id" => new MongoDB\BSON\ObjectId($id)
];

if($collection->deleteOne($filter))
{
    header("location:display.php");
}
?>