<?php
$LIST = $_POST['list'];
include "connection.php";
mysqli_query($con, "INSERT INTO `todolist`(`Kegiatan`) VALUES ('$LIST')");
header("location:ToDo.php");
?>
