<?php
session_start();
include "config.php";

if (isset($_POST['login'])){

    $userEmail = $_POST["emailAddress"];
    $userPassword = $_POST["password"];

    // fetching data from database
    $sql = "SELECT * FROM `users` WHERE email='$userEmail'";

    $result = mysqli_query($link,$sql);


    if ($result){

        $data = mysqli_num_rows($result);


        if ($data > 0){

            while ($row=mysqli_fetch_array($result)){

                $id = $row['id'];
                $emailAddress = $row["email"];
                $password = $row["password"];

                // verifying the password
                if (password_verify($userPassword,$password)){

                    $_SESSION["loggedin"]=true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $emailAddress;


                    header("location:appointment.php");


                }else{
                    echo "Passwords are not matching";
                }

            }


        }else{
            echo "No such email address found";
        }

    }





}
?>