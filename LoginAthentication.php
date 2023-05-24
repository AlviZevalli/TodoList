<?php
session_start();
include "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header("location: ToDo.php");

} else {
    $_SESSION['login_error'] = "Username/Password Yang Dimasukkan Salah";
    header("location: index.php");
}
?>
