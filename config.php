<?php
    $con = mysqli_connect("localhost", "root", "", "hospital");

    if(!$con) {
        echo "Could not connect to the database";
    }
?>