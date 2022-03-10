<?php
    include "config.php";

    if (isset($_POST['register'])) {
        $firstName = $_POST['firstName'];
        $surName = $_POST['surName'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $phone = $_POST['phone'];

        //validating the registration form
        if (strlen($password) < 6) {
            $passError = "<div class='alert alert-danger'>Password Must contain more than 6 characters</div>";
            echo $passError;
        }
        else {
            //encrypting the password the password
            $storePass = password_hash($password, PASSWORD_DEFAULT);
        }
        if ($confirmPassword != $password) {
            $confirmPassError = "<div class='alert alert-danger'>Passwords do not match!</div>";
            echo $confirmPassError;
        }
        if (empty($passError) and empty($confirmPassError)) {
            $sql = " INSERT INTO `users`(`firstName`, `surName`, `email`, `gender`, `password`, `phone`) 
                    VALUES ('$firstName','$surName','$email','$gender','$storePass','$phone'); ";

            $result = mysqli_query($con, $sql);
            if ($result) {
                $message = "Registered Successfully";
                echo $message;
                header("location: login.php");
            }
            else {
                echo "Error Registering ".mysqli_error($con);
            }
        }
    }
    mysqli_close($con);

?>