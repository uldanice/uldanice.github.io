<?php

    $connect = mysqli_connect("localhost", "root","root", "user");

    if (!$connect) {
        die('Error connect to Database');
    }
