<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Doctor's Dashboard</title>
</head>
<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-2 bg-info">
                <div>
                    <ul class="nav flex-column">
                        <li class="nav-item text-center">
                            <span class="fab fa-accusoft m-2">Doctors Dashboard</span>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="">
                                <i class="fas fa-book fa-lg">Appointments</i>
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link text-black">
                                <i class="fas fa-microscope fa-lg">Lab results</i>
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link text-black">
                                <i class="fa fa-diagnoses fa-lg">Diagnosis</i>
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link text-black">
                                <i class="fas fa-tools fa-lg">Settings</i>
                            </a>
                        </li>
                        <hr>
                    </ul>
                </div>
            <!--end of side panel div -->
            </div>
            <div class="col-10 bg-light">
                <div class="row">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link active text-white" href="mainPage.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Partners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registration.php">RegisterAccount</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#"></a>
                        </li>
                    </ul>
                </div>
                </div>
            <!-- end of main panel div -->
            </div>
        </div>

    <!--end of container -->
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>