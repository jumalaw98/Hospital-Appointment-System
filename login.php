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
            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
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
                            <a class="nav-link active text-white" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registration.php">Register Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#"></a>
                        </li>
                    </ul>
                </div>
            </nav>
        <!--end or first row -->
       </div>
   <div class="container w-50 mb-3 p-3 mt-5">
               <div class="card shadow bg-white">
                        <div class="text-center text-primary p-2">
                            <h4>Welcome to Uzima Medical Hospital</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <img src="https://www.who.int/images/default-source/infographics/who-emblem.png?sfvrsn=877bb56a_2" alt="World doctors logo"
                                        width="250">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <form action="handleLogin.php" method="POST">
                                        <div class="alert alert-info">
                                            Uzima Self Service Portal
                                        </div>
                                        <!--username-->
                                        <div class="row w-75 m-2">
                                            <input class="form-control" type="text" name="emailAddress" placeholder="username">
                                        </div>
                                        <!--password-->
                                        <div class="row w-75 m-2">
                                            <input class="form-control" type="password" name="password" placeholder="password">
                                        </div>
                                        <div class="row m-2">
                                            <input class="btn btn-primary w-75" type="submit" name="login" value="Login">
                                        </div>
                                        <div class="row m-2">
                                            <div class="col">
                                                <a class="small" href=""></a>
                                            </div>
                                            <div class="col">
                                                <a class="small" href="registration.php">Create Account</a>
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