<?php
// conexión con base de datos
$servername = "localhost";
$username   = "root";
$password   = "";
$db         = 'faces';
$conn       = new PDO("mysql:host=$servername;dbname=$db", $username, $password);





// GENIAL
if (isset($_POST['Send'])) {
    
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql    = "INSERT INTO `faces` (`id`, `Face`) VALUES (NULL, 'genial');";

        $msgsucces ="Thank You , Your Vote was Succesful! <br> You are the best!";
        $conn->exec($sql);
;
    }
    catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
    $conn = null;
}











?>