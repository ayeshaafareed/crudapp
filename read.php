<?php

include 'connection.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KeepNotes-READ-DATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <!-- ============ -->
    <div class="topbar bg-success text-center text-white p-3">
        <h3><b><u>CRUD APP using PHP</u></b></h3>
    </div>
    <!-- ============ -->


    <div class="container">

        <div class="card p-3 mt-5">
            <h2 class="text-uppercase"><b><u>Keep Notes Display Data</u></b></h2>


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">MESSAGE</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from notesdata.stickynote";
                    $result = mysqli_query($connection, $sql);

                    if ($result) {
                        // $row= mysqli_fetch_assoc($result);
                        // echo $row['title'];

                        while ($row = mysqli_fetch_assoc($result)) {

                            $id = $row['id'];
                            $title = $row['title'];
                            $msg = $row['msg'];

                            echo '


   <tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $title . '</td>
                        <td>' . $msg . '</td>
                        <td>
                        <a href="./update.php?updateid=' . $id . '" class="btn btn-warning">Update</a>
                        <a href="./delete.php?deleteid=' . $id . '" class="btn btn-danger">Delete</a>
                        </td>
                        
                    </tr>
                    ';
                        }
                    }







                    ?>





                </tbody>
            </table>



            <a href="./index.php" class="btn btn-success">Go to Add Data</a>



        </div>



    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>