<?php
    session_start();
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    require_once 'connect.php';

    mysqli_query($connect,"INSERT INTO `users` (`id`, `first_name`, `second_name`, `email`, `password`) VALUES (NULL, '$fName', '$lName', '$email', '$password')");
    header("location: ../index.php");