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
    <div class="container-fluid">
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
                                <i class="fa fa-stethoscope fa-lg">Diagnosis</i>
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
                <div>
                    <!--nav row -->
                    <div class="row bg-warning">
                        <ul class="nav justify-content-end">
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
                                <li class="breadcrumb-item active" aria-current="page">Appointments</li>
                                <li class="breadcrumb-item">Lab Results</li>
                                <li class="breadcrumb-item">Diagnosis</li>
                            </ol>
                        </nav>
                    <!--end of breadcrumb-->
                    </div>
                    <div class="row m-2">
                        <div class="alert alert-info">
                            <span>Below are patients appointments, please update their status</span>
                        </div>
                    </div>

                    <div class="card-body">
                           <!--appointment table-->
                           <div>
                               <?php
                                    include "config.php";
                                    $sql = " SELECT * FROM `appointment`; ";
                                    $result = mysqli_query($con, $sql);
                                    if ($result) {
                                        $data = mysqli_num_rows($result);
                                        if ($data > 0) {
                                            echo "<table class='table table-bordered'>";
                                            echo "<tr>";
                                            echo "<th>Id</th>";
                                            echo "<th>Full Name</th>";
                                            echo "<th>Phone</th>";
                                            echo "<th>Appointment Date</th>";
                                            echo "<th>Doctors Name</th>";
                                            echo "<th>Status</th>";
                                            echo "<th>Actions</th>";
                                            echo "</tr>";

                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<tr>";
                                                echo "<td>".$row['id']."</td>";
                                                echo "<td>".$row['fullName']."</td>";
                                                echo "<td>".$row['phone']."</td>";
                                                echo "<td>".$row['date']."</td>";
                                                echo "<td>".$row['doctorsName']."</td>";
                                                echo "<td>".$row['status']."</td>";
                                                
                                                //delete button
                                                echo "<td>
                                                        <a class='m-2 text-primary' href='edit.php?id=".$row['id']."'><i class='fas fa-pencil-alt'>Approve</i></a>
                                                    </td>";

                                                echo "</tr>";
                                            }

                                            echo "</table>";
                                        }
                                        else {
                                            echo "<div class='alert alert-danger'>No Appointements Scheduled</div>";
                                        }
                                    }
                                    else {
                                        echo "Error executing the query ".mysqli_error($con);
                                    }


                               ?>
                               <!--end of table div-->
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