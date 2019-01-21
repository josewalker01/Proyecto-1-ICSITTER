<?php
function insertInfo($username_p, $msg) {
    try {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = 'ICSITTER';
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $sql_insertCurrent_info = "INSERT INTO icsitter_table (username, msg, msg_date) VALUES ('$username_p', '$msg', now())";
        $conn->exec($sql_insertCurrent_info);

        }
    catch(PDOException $e)
        {
        echo $sql_insertCurrent_info . "<br>" . $e->getMessage();
        }
    
    $conn = null;


}