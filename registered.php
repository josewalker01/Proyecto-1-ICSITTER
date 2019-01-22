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
</head>


<?php
require_once("main.php");

?>

<body>
    <div class="w3-bar bg-navBar divs_css w3-animate-top">
        <a href="#" class="w3-bar-item w3-button">I C S I T T E R</a>
        <a href="#" class="w3-bar-item w3-button">>Home</a>
        <a href="#" class="w3-bar-item w3-button">About</a>
        <button type="button" class="btn w3-button w3-right">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </button>
        <img src="img/phoenix.png" alt="Avatar" class="w3-right w3-circle w3-margin-right hvr-rotate" style="width:35px">
        <a class="w3-right w3-button" onclick="abretesesamo()">Username </i></a>
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
            <div class="col-md-4  w3-animate-bottom">
                <img class="pet-position" src="img/pet.gif" style="width:30%">
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
                <br>
                <div id="hideme">
                    <button id="button-plane" class="botoncito btn draw-border" style="font-family:hacked;">
                    <span id="spansito">Write!</span>
                    <i id="plane" class="fa fa-paper-plane fa-lg replace"></i>
                    <i class="fa fa-paper-plane plane fa-lg hidden"></i>
                </button>
                </div>
            </div>
            <div class="col-md-4 w3-animate-right ">

                <img id="left-img" src="img/right.gif" class="hidden-lg-down" style="width:100%;">
                <div class="divs_css2 galaxybg" id="write-form" style="display: none; position: relative;top: 80px;">

                    <div class="container" style="color:white">
                        <h2 class="text-default-me">Insert your ICSTWEET:</h2>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group">
                                <label for="usr" class="text-default-me">Name:</label>
                                <input type="text" class="form-control" name="username_current">
                                <div class="form-group">
                                    <label for="comment" class="text-default-me">Comment:</label>
                                    <textarea class="form-control" rows="5" id="comment" name="msg_current"></textarea>
                                    <br>
                                    <button class="btn draw-border" type="submit" name="Send">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                    <form action="/action_page.php">

                        <div class="form-group">
                            <label for="email">N a m e :</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="email">L a s t  n a m e</label>
                            <input type="email" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                            <label for="email">U s e r n a m e :</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="email">E m a i l /  a d d r e s s :</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">P a ss w o r d :</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <button class="btn draw-border" type="submit" name="Send">Submit</button>
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

</script>
<script>
    $(document).ready(function() {
        $('#button-plane').on("click", function() {
            $('#plane').addClass('fly');
            $('.hidden').addClass('visible');
            $('#left-img').hide("slow");
            $('#write-form').show("slow");
            $('#spansito').text('Write!');
            $('#hideme').delay(2300).hide('slow');

        });
    });

</script>

</html>
