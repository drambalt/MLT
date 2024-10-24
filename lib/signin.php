<?php
    session_start();
    $email = $_POST['email'];
    $password = md5($_POST['password']);


    $connect = mysqli_connect("localhost", "root", "root", "clients");
    $result = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");

    $row = mysqli_fetch_assoc($result);

    if($row['password'] == $password){
        header('Location: ../index.php');
    } else {
        echo "Wrong email or password";
    }