<?php

include 'connection.php';
// $id = $_GET['deleteid'];
// echo $id; $id = ;

if (isset($_GET['deleteid'])){

$deleteid = $_GET['deleteid'];

$sql ="delete from notesdata.stickynote where id = '$deleteid'";

$result =mysqli_query($connection,$sql);



if ($result) {
    echo "<script>alert('Data Add successfully!');</script>";
    header("Location: read.php");
} else {
    echo "Error" . $sql . "<br>" . mysqli_error($connection);
}
}

?>