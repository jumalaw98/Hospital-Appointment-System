<?php
    include "config.php";

    if (isset($_POST["submit"]) and !empty($_POST["id"])){

        $id =$_POST["id"];
    
        $sql = "DELETE FROM `appointment` WHERE id=$id";
    
        $result = mysqli_query($con,$sql);
    
        if ($result){
    
            echo "<div class='row m-2 text-center'>";
            echo "<p class='alert alert-warning'>Record deleted Successfully</p>";
            header("location: appointment.php");
    
        }else{
            echo "Error executing query $sql".mysqli_error($con);
        }
    
    
    
    }else {
        echo "Delete a record";
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
<body>
    <div class="row m-2">
        <div class="alert alert-danger">
            <form action="delete.php" method="POST">
                <div class="p-2 text-center">
                    <label class="form-label">Are you sure you want to delete this record?</label></br>
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                </div>
                <div class="p-2 text-center">
                    <input type="submit" name="submit" value="YES" class="btn btn-danger col-md-3">
                    <a class="btn btn-primary col-md-3" href="dashboard.php">No</a>
                </div>

            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>