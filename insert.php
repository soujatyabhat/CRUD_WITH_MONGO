<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Insert Record </title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php

            require_once 'connection.php';
            
            if (isset($_REQUEST['submit']))
            {
            
                $name = $_REQUEST['name'];
                $game = $_REQUEST['game'];
                $age = $_REQUEST['age'];

                $record = ["name" => $name, "game" => $game, "age" => $age];


                echo ($collection->insertOne($record)) ? "<script> alert('Data saved') </script>" : "<script> alert('Data has not saved') </script>";
                    
            }
    ?>
</head>
<body>
    <div class = "container">
    <h1 class = "display-3"> Sample Registration </h1>
    <br>
        <form method = "POST">
            <div class="form-group">
                        <input type = "text" name = "name" placeholder="Name" class = "form-control" required>
                        <br>
                        <input type = "text" name = "game" placeholder="game" class = "form-control" required>
                        <br>
                        <input type = "number" min = "0" name = "age" placeholder="age" class = "form-control" required>
                        <br>
                        <button type = "sibmit" name = "submit" class = "btn btn-success"> Submit </button>
            </div>
        </form>
        <a href = "display.php"> Display Record </a>
</body>
</html>