<?php
    include "config.php";

    if (isset($_POST['book'])) {
        $fullName = $_POST['fullName'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $area = $_POST['area'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $postalCode = $_POST['postalCode'];

        $sql = " INSERT INTO `appointment`(`fullName`, `phone`, `email`, `date`, `area`, `city`, `state`, `postalCode`)
                VALUES ('$fullName','$phone','$email','$date','$area','$city','$state','$postalCode') ";

        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "<div class='alert alert-info'>Appointment Booked</div>";
            header("location: appointment.php");
        }
        else {
            echo "<div class='alert alert-danger'>Error Booking an Appointment</div>";
        }
    }
    mysqli_close($con);
?>