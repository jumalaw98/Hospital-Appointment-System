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
    <title>Document</title>
</head>
<body class="bg-light">
   <div class="container-fluid">
       <div class="row">
           <!--side panel column -->
           <div class="col-2 bg-primary">
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
                   <div class="card m-2 bg-light">
                       <div class="card-header">
                           <span>View scheduled appointments</span>
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
                                            echo "<th>Appointment Date</th>";
                                            echo "<th>Doctors Name</th>";
                                            echo "<th>Status</th>";
                                            echo "<th>Actions</th>";
                                            echo "</tr>";

                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<tr>";
                                                echo "<td>".$row['id']."</td>";
                                                echo "<td>".$row['fullName']."</td>";
                                                echo "<td>".$row['date']."</td>";
                                                echo "<td>".$row['doctorsName']."</td>";
                                                echo "<td>".$row['status']."</td>";
                                                //delete button
                                                echo "<td>
                                                    <a class='m-2 text-danger' href='delete.php?id=".$row['id']."'><i class='fa fa-trash'>Cancel Appointment</i></a>
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
                       <div class="card-footer">
                           <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Book Appointment
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
                                            <form action="handleAppointment.php" method="POST">
                                                <div class="row m-2">
                                                    <input class="form-control" type="text" name="fullName" placeholder="Full Name" required>
                                                </div>
                                                <hr>
                                                <div class="row m-2">
                                                    <input class="form-control" type="number" name="phone" placeholder="phone" required>
                                                </div>
                                                <hr>
                                                <div class="row m-2">
                                                    <input class="form-control" type="mail" name="email" placeholder="Email Address" required>
                                                </div>
                                                <hr>
                                                <div class="row m-2">
                                                    <input class="form-control" type="datetime-local" name="date" required>
                                                </div>
                                                <hr>
                                                <!--address section-->
                                                <div class="row m-2">
                                                    <div class="">
                                                        Address Details
                                                    </div>
                                                    <div class="col">
                                                        <input class="form-control" type="text" name="area" placeholder="Enter Area">
                                                    </div>
                                                    <div class="col">
                                                        <input class="form-control" type="text" name="city" placeholder="Enter City">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row m-2">
                                                    <div class="col">
                                                        <input class="form-control" type="text" name="state" placeholder="Enter State">
                                                    </div>
                                                    <div class="col">
                                                        <input class="form-control" type="number" name="postalCode" placeholder="Postal code">
                                                    </div>
                                                </div>
                                                <div class="row m-2">
                                                    <button type="submit" name="book" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                                            <!--<button type="submit" name="book" class="btn btn-primary">Save changes</button>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                   </div>
               </div>
            </div>
       </div>
   </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>