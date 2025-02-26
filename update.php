<?php

include 'connection.php';

$id = $_GET['updateid'];
 
$sql = "select * from notesdata.stickynote where id = '$id'";


    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

    $id = $row['id'];
    $title = $row['title'];
    $msg = $row['msg'];

    // echo $title;
    // echo $msg;







// if (isset($_POST['submit'])) {

//     $title = $_POST['title'];
//     $msg = $_POST['msg'];

//     $sql = "insert into notesdata.stickynote (title, msg) values('$title', '$msg')";

//     $result = mysqli_query($connection, $sql);

//     if ($result) {
//         echo "<script>alert('Data Add successfully!');</script>";
//         header("Location: read.php");
//     } else {
//         echo "Error" . $sql . "<br>" . mysqli_error($connection);
//     }
//     mysqli_close($connection);
// }


?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KeepNotes-APP</title>
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
            <h2 class="text-uppercase"><b><u>Keep Notes App</u></b></h2>

            <form method="post">

                <div class="mb-3">
                    <label for="title" class="form-label">Enter Title</label>
                    <textarea class="form-control" name="title" placeholder="Enter Your title" rows="2" required><?php echo $title?></textarea>
                    </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Enter Your Message</label>
                    <textarea class="form-control" name="msg" placeholder="Enter Your Message" rows="3" required><?php echo $msg?></textarea>
                </div>

                <button class="btn btn-warning text-secondary" type="submit" name="submit"> Save</button>

            </form>



        </div>



    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>



