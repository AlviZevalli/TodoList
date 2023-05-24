<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<?php
$id = $_GET['ID'];
include "connection.php";
$Rdata = mysqli_query($con, "select * from todolist where id = $id");
$data = mysqli_fetch_array($Rdata);
?>


<body class="bg-info">
<form action="update1.php" method="POST">
<div class="container">
    <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
        <h3 class ="text-center text-primary font-monospace">Update Kegiatan</h3>
        <div class="col-10">
            <input type="text" required value="<?php echo $data['Kegiatan'] ?>" name="list" class="form-control">
        </div>
        <div class="col-2">
            <button class="btn btn-outline-primary"><i class="fa-solid fa-clock-rotate-left" style="color: #004080;"></i></button>
            <input type= "hidden" name="id" value="<?php echo $data['id'] ?>">
        </div>
    </div>
</div>
</form> 
<script src="https://kit.fontawesome.com/cc52547201.js" crossorigin="anonymous"></script>
</body>
</html>