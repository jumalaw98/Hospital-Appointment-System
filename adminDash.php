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
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row h-100">
            <div class="col-3 bg-info">
                <div>
                    <ul class="nav flex-column">
                        <li class="nav-item text-center">
                            <span class="fab fa-accusoft fa-lg m-2">Admin Dashboard</span>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="">
                                <i class="fas fa-users fa-lg">View Users</i>
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="">
                                <i class="fas fa-book fa-lg">View Appointments</i>
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link text-black">
                                <i class="fas fa-users-cog fa-lg">Add Admin</i>
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link text-black">
                                <i class="fas fa-microscope fa-lg">View Lab results</i>
                            </a>
                        </li>
                        <hr>
                    </ul>
                </div>
            <!--end of side panel div -->
            </div>
            <div class="col-9 bg-light">
                <div>
                    <!--nav row -->
                    <div class="row bg-warning">
                        <ul class="nav justify-content-end">
                            <li class="nav-item m-2">
                                one
                            </li>
                            <li class="nav-item m-2">
                                two
                            </li>
                            <li class="nav-item m-2">
                                Logout<i class="fas fa-power-off"></i>
                            </li>
                        </ul>
                    <!--end of nav row-->
                    </div>
                    <!--breadcrumb-->
                    <div class="row">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-2">
                                <li class="breadcrumb-item active" aria-current="page">View Users</li>
                                <li class="breadcrumb-item">View Appointments</li>
                                <li class="breadcrumb-item">Add Admin</li>
                                <li class="breadcrumb-item">View Lab Results</li>
                            </ol>
                        </nav>
                    <!--end of breadcrumb-->
                    </div>
                    <div class="row m-2">
                        <div class="col m-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            View Customers
                            </button>

                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Appointment</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <!--<button type="submit" name="book" class="btn btn-primary">Save changes</button>-->
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="col m-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Doctors
                            </button>

                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Appointment</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST">
                                                
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <!--<button type="submit" name="book" class="btn btn-primary">Save changes</button>-->
                                        </div>
                                    </div>
                                </div>
                        </div>
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