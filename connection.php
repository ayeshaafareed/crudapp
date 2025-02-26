
<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "notesdata";

    $connection = mysqli_connect($host, $username, $password, $database);
    if(!$connection){
        die("Connection has yet not been established" . mysqli_connect_error());
    }
    else{
        // echo "Your Connection has successfully been established";
    }


?>