<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Record</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</head>
<body>
<br>
<div class="container">
<table class="table table-striped table-dark">
  <thead>
    <tr class = "text-center">
      <th scope="col"> id</th>
      <th scope="col"> Name </th>
      <th scope="col"> Game </th>
      <th scope="col"> Age </th>
      <th scope="col"> Control </th>
    </tr>
</thead>
<tbody>
    <?php
            require_once 'connection.php';

            //provides a serial number//
            $count = 0;

            if($collection->count() <= 0)
            {
?>
                <tr>
                  <td colspan="5"> No records are present </td>
                </tr>
<?php
                exit(0);
            }

           foreach($collection->find() as $row)
            {
                $id =  new MongoDB\BSON\ObjectId($row->_id);
?>
                 <tr class = "text-center">
                    <td> <?php echo ++$count?></td>
                    <td> <?php echo $row->name ?> </td>
                    <td><?php echo $row->game ?></td>
                    <td> <?php echo $row->age ?> </td>
                    <td> 
                       <a href = "update.php?id=<?php echo $id?>&name=<?php echo $row->name?>&game=<?php echo $row->game?>&age=<?php echo $row->age?>" class = "col-3 btn btn-success"> Update </a> 
                      <a href = "delete.php?id=<?php echo $id?>" class = "col-3 btn btn-danger"> Delete  </a> 
                    </td>
                  </tr>
<?php
            }
?>
</tbody>
</table>
<a href = "insert.php"> Add new record </a>
</div>
</body>
</html>