<?php
// Start the session
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Icsitter</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/main.css" />
        <link type="text/css" rel="stylesheet" href="css/hover.css" />
        <script type="text/javascript" src="js/main.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
        <script type="text/javascript" src="js/farbtastic.js"></script>
        <link rel="stylesheet" href="style/farbtastic.css" type="text/css" />
    </head>


    <?php
require_once("main.php");
$This_user_ID = $_SESSION["username"];
$iduser_find  = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$user_id      = $iduser_find->query("SELECT id FROM `icsitter_user` WHERE `username`='$This_user_ID';")->fetch(Pdo::FETCH_COLUMN);
if (isset($_POST['Send'])) {
    $username_p = $user_id;
    $msg        = $_POST['msg_current'];
    insertInfo($username_p, $msg);
    header("Location: registered.php");
}
if (empty($_SESSION["username"])) {
    header("Location: index.php");
}

$setting_success_msg1 = "";
$setting_success_msg2 = "Your color have been succesfully changed!";
if (isset($_POST['edit_pass'])) {
    $modalScript4 = "<script>
$( document ).ready(function() {
    $('#errors_settings').modal({show:true});
});
</script>";
    $modalScript5 = "<script>
$( document ).ready(function() {
    $('#edit_succesful').modal({show:true});
});
</script>";

    if (!empty($_POST['edited_password'])) {
        $new_edited_password = hash_my_thing($_POST['edited_password']);
        $username_id         = $user_id;
        update_my_password($username_id, $new_edited_password);
        echo $modalScript5;
        $setting_success_msg1 = "Your Password have been succesfully changed!";
        $setting_success_msg2 = "";
    } else {
        $password_error = "password must not be empty";
        echo $modalScript4;
    }
    
}
if (isset($_POST['edit_color'])) {
    $modalScript4 = "<script>
$( document ).ready(function() {
    $('#errors_settings').modal({show:true});
});
</script>";
    $modalScript5 = "<script>
$( document ).ready(function() {
    $('#edit_succesful').modal({show:true});
});
</script>";
    
    if (!empty($_POST['color'])) {
        $new_edited_color = $_POST['color'];
        $username_id         = $user_id;
        update_my_color($username_id, $new_edited_color);
        echo $modalScript5;
        $setting_success_msg2 = "Your username color have been succesfully changed!";
        $setting_success_msg1 = "";
    } else {
        $password_error = "color must not be empty";
        echo $modalScript4;
    }
    
}


?>

        <body>
            <div class="w3-bar bg-navBar divs_css w3-animate-top">
                <a href="#" class="w3-bar-item w3-button">I C S I T T E R</a>
                <a href="registered.php" class="w3-bar-item w3-button">>Home</a>
                <a href="#" class="w3-bar-item w3-button">About</a>
                <img src="img/phoenix.png" alt="Avatar" class="w3-right w3-circle w3-margin-right hvr-rotate" style="width:35px">
                <a class="w3-right w3-button" onclick="abretesesamo2()">
                    <?php echo $_SESSION["username"];?>
                    </i>
                </a>
            </div>
            <!-- user settings...  -->
            <div id="user_settings" class=" w3-hide galaxybg2 posicion-magica">

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <button class="btn w3-button w3-left" type="submit" name="Log_me_out">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </button><br>
                    <button class="btn w3-button w3-left" type="submit" name="write_section">
          <span class="glyphicon glyphicon-envelope"></span> Write!
        </button>
                </form>
            </div>
            <!--  user settings drop down end...  -->
            <br><br><br>
            <!-- FRONT END...  -->



            <div class="row test">
                <div class="col-md-4 left-bg hidden-lg-down w3-animate-left">
                </div>
                <div class="col-md-4  w3-animate-bottom">
                    <span><span id="sd-1" class="usernameCSS2"></span></span>
                    <h1 class="usernameCSS2"></h1>
                    <div class="divs_css2 div-scroll TEXTO2" id="first_div">

                        <h5>Hello
                            <?php echo $_SESSION["username"]; ?>!</<h5>
                            <br><br>
                            <p>Here you can customize your profile as your liking!
                                <p>
                                    <hr>
                                    <h5>Password</<h5> <a href="#password_edit" data-toggle="collapse"><span class="glyphicon glyphicon-cog w3-spin"></span></a>
                                        <div id="password_edit" class="collapse">
                                            <br>
                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                                Edit, your password!:<br>

                                                <input style="color:black;" type="password" name="edited_password">
                                                <button class="btn w3-button " type="submit" name="edit_pass">
                                                        <span class="glyphicon glyphicon-refresh"></span> ok!
                                                    </button>
                                            </form>
                                        </div>
                                        <hr>
                                        <h5>Username Text Color!</<h5> <a href="#colored" data-toggle="collapse"><span class="glyphicon glyphicon-cog w3-spin"></span></a>
                                            <div id="colored" class="collapse">
                                                <br>
                                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                                    Edit, your <span id="username_color">Username<span> COLOR!:<br>
                                                    <div id="colorpicker"></div>
                                                        <input type="text" id="color" name="color" value="#ffffff" />
                                                            <button class="btn w3-button " type="submit" name="edit_color">
                                                                <span class="glyphicon glyphicon-refresh"></span> ok!
                                                    </button>
                                                </form>
                                            </div>
                    </div>
                    <br>
                    <div class="col-md-4 w3-animate-right ">
                    </div>
                </div>
            </div>





            <!-- Modal ERRORS -->
            <div id="errors_settings" class="modal fade" role="dialog" data-backdrop="static">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" type="button">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h4>There are some errors...</h4>
                            <section class="c-container"> 
  <div class="o-circle c-container__circle o-circle__sign--failure">
    <div class="o-circle__sign"></div>  
  </div>   
  
</section>   
                            <h5>You might want to check:</h5>
                            <?php
                            // errores
                            echo "<h5>" . $password_error . "</h5>"; ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#register" data-dismiss="modal">Try again</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal end -->
            <!-- Modal SUCCESS! -->
            <div id="edit_succesful" class="modal fade" role="dialog" data-backdrop="static">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" type="button">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h4>Congrats
                                <?php   echo $_SESSION["username"]; ?>!</h4>
                            <center>
                            <section class="c-container">
  
  <div class="o-circle c-container__circle o-circle__sign--success">
    <div class="o-circle__sign"></div>  
  </div>     
                                <h5>
                                    <?php   
                                    echo $setting_success_msg1;
                                    echo $setting_success_msg2;
                                    ?>
                                </h5>
                            </center>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default  pull-right" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal end -->



        </body>
        <script src="dist/swapdogs.min.js"></script>
        <script>
            var sd = new SwapDogs(
                document.getElementById('sd-1'), {
                    autoInit: true,
                    words: ["|/CUSTOMIZE:", "|/Be, YOU!", "|/CUSTOMIZE:", "|/Be, YOU!"],
                    letters: 'абвгдеёзжклмнопрст',
                    interval: 4000,
                    interval2: 50
                }
            );

        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#colorpicker').farbtastic('#color');
            });

            function abretesesamo2() {
                var x = document.getElementById("user_settings");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }

        </script>

    </html>
