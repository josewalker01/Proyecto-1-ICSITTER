<?php
// conexión con base de datos
require_once("util/functions.php");  
require_once("util/db_manager.php");  


$name_err = $surname_err = $email_err = "";

    if (isset($_POST['Send'])) {
        
        $username_p = $_POST['username_current'];
        $msg = $_POST['msg_current'];
        insertInfo($username_p, $msg);
    
}
if (isset($_POST['register'])) {
    require_once("utilities/errorConditions.php");  
    $errorCount = 0;

}
if (isset($_POST['Log_me_in'])) {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $email_log = $_POST['email_log'];
    $password_log = sha1(($_POST['password_log']));
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sqlgenial   = "SELECT COUNT(*) AS LOG FROM ICSITTER_user WHERE email='$email_log' && password='$password_log';";
    $querygenial  = $conn->query($sqlgenial);
    $countqgenial = $querygenial->fetch();
    $querygenial->closeCursor();
    echo"<br>";
    echo $countqgenial['LOG'];
    echo"<br>";
    echo$email_log;
    echo"<br>";
    echo$password_log;
    if($countqgenial['LOG']===1) {echo"hola";} else {echo"adios";}


}
  
//get messages XD  
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$data = $pdo->query("SELECT icsitter_user.username, icsitter_message.msg, icsitter_message.msg_date
FROM icsitter_message INNER JOIN icsitter_user ON icsitter_message.userid = icsitter_user.id ORDER BY icsitter_message.id DESC")->fetchAll();










       
        



     


?>
