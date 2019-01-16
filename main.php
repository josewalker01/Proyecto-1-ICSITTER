<?php
// conexión con base de datos
require_once("util/functions.php");  
require_once("util/db_manager.php");  

    if (isset($_POST['Send'])) {
        echo "hola";
        $username_p = $_POST['username_current'];
        $msg = $_POST['msg_current'];
        insertInfo($username_p, $msg);
    
}


//get messages XD

    
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$data = $pdo->query("SELECT * FROM icsitter_table")->fetchAll();









       
        



     


?>
