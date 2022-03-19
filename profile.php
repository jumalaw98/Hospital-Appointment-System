<?php
    session_start();

    // checking if the user has looged in?
    if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true ){
    
        header("location:login.php");
        exit();
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
    <title>Appointment page</title>
</head>
<body class="bg-light">
   <div class="container-fluid">
       <div class="row">
           <!--side panel column -->
           <div class="col-2 bg-primary bg-gradient">
               <ul class="nav flex-column">
                    <li class="bg-white w-100">
                        <img class="p-1" src="https://www.who.int/images/default-source/infographics/who-emblem.png?sfvrsn=877bb56a_2" alt="hospital logo"
                         width="50">
                         Portal
                    </li>
                    <!--profile link -->
                    <li class="nav-item m-2">
                        <a class="nav-link text-white" href="">
                            <i class="fas fa-user-alt">
                                <span>Profile</span>
                            </i>
                        </a>
                    </li>
                    <hr>
                    <!--appointment section -->
                    <li class="nav-item m-2">
                        <a class="nav-link text-white" href="">
                            <i class="fas fa-book-medical">
                                <span>Manage Appointments</span>
                            </i>
                        </a>
                    </li>
                    <hr>
                    <!--Lab section -->
                    <li class="nav-item m-2">
                        <a class="nav-link text-white" href="">
                            <i class="fas fa-microscope">
                                <span>Lab Results</span>
                            </i>
                        </a>
                    </li>
                    <hr>
                    <li class="nav-item m-2">
                        <a class="nav-link text-white" href="">
                            <i class="fas fa-dollar-sign">
                                <span>Payments</span>
                            </i>
                        </a>
                    </li>
                    <hr>
                    <li class="nav-item m-2">
                        <a class="nav-link text-white" href="">
                            <i class="fas fa-tools">
                                <span>Settings</span>
                            </i>
                        </a>
                    </li>
                    <hr>
                    <li class="nav-item m-2">
                        <a class="nav-link text-white" href="logout.php">
                            <i class="fas fa-power-off">
                                <span>Logout</span>
                            </i>
                        </a>
                    </li>
                </ul>
           </div>
           <!--main column-->
           <div class="col-10">
               <div class="row">
                <!--top navigation bar -->
                
                
                <!--end of nav bar-->
               </div>
               <div class="row">
                   <div class="alert alert-info text-center">
                       Welcome to Uzima Hospital
                   </div>
               </div>
               <!--appointment section-->
               <div class="row">
                   
               </div>
            </div>
       </div>
   </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>