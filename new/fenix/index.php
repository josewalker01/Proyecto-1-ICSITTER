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
</head>


<?php
require_once("main.php");


?>

<body>
    <div class="w3-bar bg-navBar divs_css w3-animate-top">
        <a href="#" class="w3-bar-item w3-button">I C S I T T E R</a>
        <a href="#" class="w3-bar-item w3-button">>Home</a>
        <a href="#" class="w3-bar-item w3-button">About</a>
        <button class="w3-right w3-button w3-bar-item" onclick="abretesesamo()">..::Login::.</button>
    </div>

    <div id="demo" class=" w3-hide galaxybg2 posicion-magica">
        <form class="form" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <input id="emailInput" placeholder="Username" class="form-control form-control-sm" type="text" name="username_log" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password_log" placeholder="Password">
            </div>
            <div class="form-group">
                <center>
                    <button class="btn draw-border" type="submit" name="Log_me_in">log_in</button>
                </center>
            </div>
            <div class="form-group text-center TEXTO">
                <small><a href="#" data-toggle="modal" data-target="#register">Dont have an account?</a></small>
            </div>
        </form>
    </div>
    <br><br><br>
    <!-- FRONT END...  -->
    <div class="container-fluid">
        <div class="row firebg divs_css3">

            <div class="col-md-12 w3-animate-zoom">
                <center>
                    <h1 class="flux hvr-shrink">I C S I T T E R</h1>
                </center>

            </div>
        </div>
        <br>
        <div class="row test">
            <div class="col-md-4 left-bg hidden-lg-down w3-animate-left">
                <img src="img/left.gif" style="width:100%">
            </div>
            <div class="col-md-4 w3-animate-bottom">
                
                <span><span id="sd-1" class="usernameCSS2"></span></span>
                <h1 class="usernameCSS2"></h1>
                <div class="divs_css2 div-scroll scrollbar galaxybg2" id="first_div">
                    <?php

                    foreach($data as $row){?>
                        <div class="w3-container w3-card w3-round w3-margin TEXTO"><br>
                            <img src="img/phoenix.png" alt="Avatar" class="w3-left w3-circle w3-margin-right hvr-rotate" style="width:60px">
                            <span class="w3-right w3-opacity"><?=$row['msg_date']?></span>
                            <h4 class="usernameCSS">
                                <?=$row['username']?>
                            </h4><br>
                            <hr class="w3-clear">
                            <p>
                                <?=$row['msg']?>
                            </p>
                        </div>
                        <?php } ?>
                </div>
            </div>
            <div class="col-md-4 hidden-lg-down w3-animate-right">
                <img src="img/right.gif" style="width:100%;">
            </div>
        </div>
    </div>


    <!-- Modal ERRORS -->
    <div id="modal1" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" type="button" >&times;</button>
      </div>
      <div class="modal-body">
      <h4>There are some errors...</h4>
          <h5>You might want to check:</h5>
            <?php
                // errores
                echo "<h5>" . $name_err . "</h5>";
                echo "<h5>" . $surname_err . "</h5>";
                echo "<h5>" . $username_err . "</h5>";
                echo "<h5>" . $email_err . "</h5>";
            ?>
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#register" data-dismiss="modal" >Try again</button>
      </div>
    </div>
  </div>
</div>
  <!-- Modal end -->
    <!-- Modal de registro -->
    <div class="modal fade" id="register" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <center>

                        <img src="img/owl.gif" height="200px" width="200px">
                    </center>
                    <h4 class="modal-title usernameCSS2">REGISTER</h4>
                </div>
                <div class="modal-body">
                    <!-- FORMULARIO DE REGISTRO!  -->
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                        <div class="form-group">
                            <label >N a m e :</label>
                            <input type="text" class="form-control" name="Name">
                        </div>
                        <div class="form-group">
                            <label >L a s t  n a m e</label>
                            <input type="text" class="form-control" name="Surname">
                        </div>

                        <div class="form-group">
                            <label >U s e r n a m e :</label>
                            <input type="text" class="form-control"name="Username" >
                        </div>
                        <div class="form-group">
                            <label >E m a i l /  a d d r e s s :</label>
                            <input type="email" class="form-control"name="Email" >
                        </div>
                        <div class="form-group">
                            <label for="pwd">P a ss w o r d :</label>
                            <input type="password" class="form-control"name="Password" >
                        </div>
                        <button class="btn draw-border" type="submit" name="register">Submit</button>
                        <button type="button" class="btn btn-default  pull-right" data-dismiss="modal">Close</button>
                    </form>
                    <!-- FIN FORMULARIO DE REGISTRO!  -->
                </div>
                <div class="modal-footer">

                </div>
            </div>

        </div>
    </div>



</body>

<script src="dist/swapdogs.min.js"></script>
<script>
    var sd = new SwapDogs(
        document.getElementById('sd-1'), {
            autoInit: true,
            words: ["|/ICCSTWEETS:", "|/WELCOME!", "|/ICCSTWEETS:", "|/WELCOME!"],
            letters: 'абвгдеёзжклмнопрст',
            interval: 4000,
            interval2: 50
        }
    );

    function abretesesamo() {
        var x = document.getElementById("demo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

</script>


</html>
