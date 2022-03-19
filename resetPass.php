<?php
    include "config.php";

    if (isset($_POST['reset'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        //validating password
        if (strlen($password) < 6) {
            $passError = "<div class='alert alert-danger'>Password cannot be less than 6 characters</div>";
            echo $passError;
        }
        else {
            $storePass = password_hash($password, PASSWORD_DEFAULT);
        }
        if ($confirmPassword != $password) {
            $confirmPassError = "<div class='alert alert-danger'>Passwords do not match</div>";
            echo $confirmPassError;
        }
        if (empty($passError) and empty($confirmPassError)) {
            $sql = " UPDATE `users` SET `password`='$storePass' WHERE email = '$email' ";

            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "<div class='alert alert-warning'>Password has been reset</div>";
                header("location: login.php");
            }
            else {
                echo "Error executing query $sql".mysqli_error($con);
            }
        }
    }
   

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Registration</title>
</head>
<body class="bg-light">
    <div class="container-fluid w-50 mt-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="resetPass.php" method="POST">
                            <div class="text-center text-primary">
                                <span>Reset Password</span>
                            </div>
                            <!--username-->
                            <div class="row w-75 m-2">
                                <input class="form-control" type="text" name="email" placeholder="Enter Email">
                            </div>
                            <!--password-->
                            <div class="row w-75 m-2">
                                <input class="form-control" type="password" name="password" placeholder="password">
                            </div>
                            <div class="row w-75 m-2">
                                <input class="form-control" type="password" name="confirmPassword" placeholder="Confirm password">
                            </div>
                            <div class="row m-2">
                                <div class="col-sm-6">
                                    <input class="btn btn-primary w-75" type="submit" name="reset" value="Reset">
                                </div>
                                <div class="col-sm-6">
                                    <a class="btn btn-warning col-md-6" href="login.php">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>