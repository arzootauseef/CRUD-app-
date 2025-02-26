<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TITLE</th>
                <th scope="col">MSG</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select* from notesdata.stickynotes";
            $result = mysqli_query($connection, $sql);
            if ($result) {
                // $row = mysqli_fetch_assoc($result);
                // echo $row['title'];
                
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $title = ['$row'];
                    $msg = ['$msg'];
                    echo '
        
         <tr>
      <th scope="row">' . $id . '</th>
      <td>' . $title . '</td>
      <td>' . $msg . '</td>
      <a href="#" class="btn btn-warning">Update</a>
      <a href="#" class="btn btn-danger">Delete</a>
    </tr>
        ';
                }
            }
            ?>
        </tbody>
    </table>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>