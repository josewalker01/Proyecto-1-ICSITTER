<?php

// conexión con base de datos
require_once("util/functions.php");  
require_once("util/db_manager.php");  
//get messages XD  
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$data = $pdo->query("SELECT icsitter_user.username, icsitter_message.msg, icsitter_message.msg_date,icsitter_user.username_color
FROM icsitter_message INNER JOIN icsitter_user ON icsitter_message.userid = icsitter_user.id ORDER BY icsitter_message.id DESC")->fetchAll();
$modalScript7 = "<script>
$( document ).ready(function() {
    $('#login_failed').modal({show:true});
});
</script>";


$name_err = $surname_err = $email_err = "";


if (isset($_POST['register'])) {
    
    $errorCount = 0;
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $username_log=($_POST['Username']);
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sqlgenial   = "SELECT COUNT(*) AS LOG FROM ICSITTER_user WHERE username='$username_log'";
    $querygenial  = $conn->query($sqlgenial);
    $countqgenial = $querygenial->fetch();
    $querygenial->closeCursor();
    require_once("utilities/errorConditions.php");  
   
   
    
    
    
 


}
if (isset($_POST['Log_me_in'])) {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $username_log = $_POST['username_log'];
    $password_log = hash_my_thing(($_POST['password_log']));
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sqlgenial   = "SELECT COUNT(*) AS LOG FROM ICSITTER_user WHERE username='$username_log' && password='$password_log';";
    $querygenial  = $conn->query($sqlgenial);
    $countqgenial = $querygenial->fetch();
    $querygenial->closeCursor();
    if($countqgenial['LOG']==1) {
        $_SESSION["username"] =$username_log ;
        header('Location: registered.php');
    } else {
        echo $modalScript7;
    }


}
if (isset($_POST['Log_me_out'])) {
    header('Location: index.php');
    // remove all session variables
    session_unset(); 
    
    // destroy the session 
    session_destroy(); 


}
if (isset($_POST['settings'])) {
    header('Location: user_settings.php');




}


if (isset($_POST['write_section'])) {
    header('Location: registered.php');




}


  














       
        



     


?>
