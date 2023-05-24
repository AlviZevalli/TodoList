<?php
include "connection.php";
$list = $_POST['list']; 
$ID = $_POST['id'];
mysqli_query($con, "UPDATE `todolist` SET `Kegiatan`='$list' WHERE id= $ID ");
header("location:index.php");
?>
