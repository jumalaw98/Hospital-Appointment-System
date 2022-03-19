<?php
    include "config.php";

    if (isset($_POST["update"])) {
        $Uid = $_POST['id'];
        $UdoctorsName = $_POST['doctorsName'];
        $Ustatus = $_POST['status'];
        $Udate = $_POST['date'];
    
        $Usql = "UPDATE `appointment` SET `date`='$Udate',`doctorsName`='$UdoctorsName',`status`='$Ustatus' WHERE id = $Uid ";
    
        $Uresult = mysqli_query($con,$Usql);
    
        if ($Uresult){
    
            echo "<div class='row m-2 text-center'>";
            echo "<p class='alert alert-success'>Records have been updated!</p>";
            header("location: docPanel.php");
    
    
        }
        else{
            echo "Error executing query $Usql".mysqli_error($con);
        }
    
    
    
    } 
    else {
        if (isset($_GET["id"]) and !empty($_GET["id"])) {

            $id = $_GET["id"];
    
            $sql = "SELECT * FROM `appointment` WHERE id=$id";
    
            $result = mysqli_query($con, $sql);
    
            if ($result) {
    
                $data = mysqli_num_rows($result);
    
                if ($data == 1) {
    
                    $row = mysqli_fetch_array($result);
                    $patientName = $row['fullName'];
                    $doctorsName = $row['doctorsName'];
                    $status = $row['status'];
                    $date= $row['date'];

                
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
    <div class="row m-2">
        <div class="card w-50 m-5">
            <div class="card-header">
                <h4>Confirm Patients Appointment</h4>
            </div>
            <div class="card-body">
                <form action="edit.php" method="POST">
                    <div class="row">
                        <div class="row m-2">
                            <input class="form-control" type="text" name="doctorsName" placeholder="Doctor's Name" value="<?php echo "$doctorsName"; ?>">
                        </div>
                        <div class="row m-2">
                            <input class="form-control" type="text" name="status" placeholder="status" value="<?php echo "$status"; ?>">
                        </div>
                        <div class="row m-2">
                            <input class="form-control" type="datetime-local" name="date" value="<?php echo "$date"; ?>">
                        </div>
                        <div class="row p-2">
                             <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" required>
                        </div>
                        <div class="row m-2">
                            <div class="col-md-12">
                                <input class="btn btn-primary col-md-4" type="submit" name="update" value="confirm">
                                <a class="btn btn-warning" href="docPanel.php">Back</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
    
} else {
    echo "No record was found";
}


} else {
echo "error executing query $sql" . mysqli_error($link);
}


} else {
echo "id value not picked";
}


}

?>