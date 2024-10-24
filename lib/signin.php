<?php
    session_start();
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $connect = mysqli_connect("localhost", "root", "root", "clients");
    $result = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");

    $row = mysqli_fetch_assoc($result);

    if($row['password'] == $password){
        $full_name =  $row['first_name'] . ' ' . $row['second_name'];
        setcookie('user', $full_name, time() + (86400 * 30), "/");
        header('Location: ../housing.php');

    } else {
        echo "Wrong email or password";
    }