<?php

    require_once ('debug.php');
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = 'faces';

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_error) {
        $msg = "Connection failed: " . $conn->connect_error;
        show_alert($msg, 'danger');
    }

   