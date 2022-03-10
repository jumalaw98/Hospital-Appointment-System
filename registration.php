<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Document</title>
</head>
<body class="bg-light">
<div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand" href="#">
                    <img class="p-1" src="https://www.who.int/images/default-source/infographics/who-emblem.png?sfvrsn=877bb56a_2" alt="hospital logo"
                    width="50">
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="mainPage.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="registration.php">Register Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <!--end or first row -->
       </div>
    <div class="container-fluid w-50 mt-5">
        <div class="card shadow">
            <div class="card-body">
                <div class="row text-center">
                    <div class="col mb-2">
                        <img src="https://www.who.int/images/default-source/infographics/who-emblem.png?sfvrsn=877bb56a_2" alt="World doctors logo" width="70">
                    </div>
                </div>
                <div class="row">
                    <div class="text-center">
                        <h4 class="text-secondary">Registration Form</h4>
                    </div>
                    <form action="handleRegistration.php" method="POST">
                        <!--full names section-->
                        <div class="row m-2">
                            <div class="col-md-6">
                                <label class="form-label text-secondary">First Name</label>
                                <input class="form-control" type="text" name="firstName" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary">SurName</label>
                                <input class="form-control" type="text" name="surName" required>
                            </div>
                        </div>
                        <!--email section-->
                        <div class="row m-2">
                            <div class="">
                                <label class="form-label text-secondary">Email</label>
                                <input class="form-control" type="mail" name="email" required>
                            </div>
                        </div>
                        <!--gender row-->
                        <div class="row m-2">
                            <div class="col m-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                            </div>
                            <div class="col m-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <!--password section-->
                        <div class="row m-2">
                            <div class="col-md-6">
                                <label class="form-label text-secondary">Password</label>
                                <input class="form-control" type="password" name="password" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary">Confirm Password</label>
                                <input class="form-control" type="password" name="confirmPassword" required>
                            </div>
                        </div>
                        <!--phone section-->
                        <div class="row m-2">
                            <div class="col">
                                <label class="form-label text-secondary">Phone Number</label>
                                <input class="form-control" type="number" name="phone">
                            </div>
                        </div>
                        <!--submit button-->
                        <div class="row m-2">
                            <div class="col p-2">
                                <input class="btn btn-primary" type="submit" name="register" value="Register">
                            </div>
                            <div class="col p-2">
                                <a class="small" href="login.php">Already have an account? Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>