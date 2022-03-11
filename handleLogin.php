<?php

include "config.php";

if (isset($_POST['login'])){

    $userEmail = $_POST["emailAddress"];
    $userPassword = $_POST["password"];

    // fetching data from database
    $sql = "SELECT * FROM `users` WHERE email= '$userEmail'";

    $result = mysqli_query($con, $sql);


    if ($result){

        $data = mysqli_num_rows($result);


        if ($data > 0){

            while ($row=mysqli_fetch_array($result)){

                $id = $row['id'];
                $emailAddress = $row["email"];
                $password = $row["password"];

                // verifying the password
                if (password_verify($userPassword,$password)){
                    session_start();
                    $_SESSION["loggedin"]=true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $emailAddress;


                    header("location:appointment.php");


                }else{
                    echo "Passwords do not match";
                }

            }


        }else{
            echo "<div class='alert alert-danger m-2'>No such email address found!!! Please register an account</div>";
            echo "<a class='btn btn-warning m-2' href='login.php'>Back Home</a>";
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
    <title>Document</title>
</head>
<body class="bg-light">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>