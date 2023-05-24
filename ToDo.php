<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-primary">

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit();
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">To Do List</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button class="btn btn-link nav-link" onclick="logout()"><i class="fa-solid fa-right-from-bracket" style="color: #ff0000;"></i></button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<form action="insert.php" method="POST">
    <div class="container">
        <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
            <h3 class="text-center text-primary font-monospace">TODO</h3>
            <div class="col-10">
                <input type="text" required name="list" class="form-control">
            </div>
            <div class="col-2">
                <button class="btn btn-outline-primary"><i class="fa-sharp fa-solid fa-circle-plus fa-fade"></i></button>
            </div>
        </div>
    </div>
</form> 

<!-- Ambil Data -->
<?php
include "connection.php";
$rawData = mysqli_query($con, "SELECT * FROM todolist");
?>

<div class="container">
    <div class="col-8 bg-white m-auto mt-5">
        <table class="table">
            <tbody class="fs-3 text-primary shadow">
                <?php
                while ($row = mysqli_fetch_array($rawData)) {
                ?>
                <tr>
                    <td><?php echo $row['Kegiatan'] ?></td>
                    <td style="width: 10%;">
                        <a href="delete.php?ID=<?php echo $row['id'] ?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></a>
                    </td>
                    <td style="width: 10%;">
                        <a href="update.php?ID=<?php echo $row['id'] ?>" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square" style="color: #00ff00;"></i></a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://kit.fontawesome.com/cc52547201.js" crossorigin="anonymous"></script>
<script>
    function logout() {
        window.location.href = "logout.php";
    }
</script>
</body>
</html>
