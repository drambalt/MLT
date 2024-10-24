<?php
    $connect = mysqli_connect("localhost", "root", "root", "clients");

    if(!$connect){
        die('Error connect to database');
    }
