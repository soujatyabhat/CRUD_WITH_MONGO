<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load from Mongo</title>
</head>
<body>
    <?php
         require_once 'vendor/autoload.php';

         $clint = new MongoDB\Client;
 
         //Select database//
         $database = $clint->selectDatabase("vote");
 
         //Select collection//
         $collection = $database->selectCollection("game");

         $query = ["name"=>"Adrija Bandyopadhyay"];
         
        //  $pubg_find = $collection->find($query);

         $recond = $collection->count($query);
         echo $recond;
        
    ?>
</body>
</html>