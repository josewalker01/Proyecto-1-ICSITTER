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
    $email_log = $_POST['email_log'];
    $password_log = md5(($_POST['password_log']));
    echo $password_log;
    $check_check = login_check($email_log,$password_log);
    echo $check_check["1"];
    if ($check_check > 0){
        echo "CORRECTO!";
    }
    else{
        echo "incorrecto";
    }

    
    
    

}
  
//get messages XD  
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$data = $pdo->query("SELECT icsitter_user.username, icsitter_message.msg, icsitter_message.msg_date
FROM icsitter_message INNER JOIN icsitter_user ON icsitter_message.userid = icsitter_user.id ORDER BY icsitter_message.id DESC")->fetchAll();









       
        



     


?>
