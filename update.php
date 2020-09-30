<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Update Database </title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php

    //Create connection//
    require_once 'connection.php';

            $id = $_GET['id'];
            $name = $_GET['name'];
            $game = $_GET['game'];
            $age = $_GET['age'];


            if(isset($_REQUEST['submit']))
            {
                $name = $_REQUEST['name'];
                $game = $_REQUEST['game'];
                $age = $_REQUEST['age'];
                
                $records = [
                        "name" => $name,
                        "game" => $game,
                        "age" => $age
                    ];
                
                $filter = [
                        "_id" => new MongoDB\BSON\ObjectId($id)
                ];

                 echo ($collection->updateOne($filter,['$set'=>$records])) ? "data has saved" : "data has not saved";
            }
    ?>
</head>
<body>
    <div class="container">
        <br>
        <form method = "POST">
            <div class = "form-group">
                    <label> Name : </label>
                    <input type = "text" name = "name" class = "form-control" value = "<?php echo $name?>" autofocus required>
            </div>
            <div class = "form-group">
                    <label> Game : </label>
                    <input type = "text" name = "game" class = "form-control" value = "<?php echo $game ?>"  required>
            </div>
            <div class = "form-group">
                    <label> Age : </label>
                    <input type = "number" min = "0" name = age class = "form-control" value = "<?php echo $age ?>"  required>
            </div>
            <div class = "form-group">
                    <button type = "submit" class = "btn btn-primary" name = "submit"> Submit </button>
                    <a href = "display.php" class = "btn btn-secondary"> Back </a>
            </div>
        </form>
    </div>  
</body>
</html>