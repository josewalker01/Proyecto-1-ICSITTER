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
    <!-- BARRA  -->
    <nav class="navbar navbar bg-navBar divs_css" style="border-width:0px;">
        <span class="hvr-sink">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand " href="#"><span class="navbar-txt">I C S I T T E R</span></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#"><span class="navbar-txt">Home</span></a></li>
            <li><a href="#"><span class="navbar-txt">Page 1</span></a></li>
        </ul>
        </div>
        </span>
         <!-- LOG IN DROP DOWN :)  -->
        <div class="pull-right ">
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">..::Login::..<span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-2 galaxybg2">
                        <li class="px-3 py-2">
                            <form class="form" role="form">
                                <div class="form-group">
                                    <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <center>
                                        <button class="btn draw-border" type="submit" name="Send">log_in</button>
                                    </center>
                                </div>
                                <div class="form-group text-center TEXTO">
                                    <small><a href="#" data-toggle="modal" data-target="#register">Dont have an account?</a></small>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <br><br><br>
    <!-- FRONT END...  -->
    <div class="container-fluid">
        <div class="row firebg divs_css3">

            <div class="col-md-12">
                <center>

                    <h1 class="flux hvr-shrink">I C S I T T E R</h1>
                </center>

            </div>
        </div>
        <br>

        <div class="row">
            <span><span id="sd-1" class="usernameCSS2"></span></span>
            <h1 class="usernameCSS2"></h1>
            <div class="col-md-8 ">

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
            <div class="col-md-4 ">

                <!-- <div class="divs_css2 galaxybg">
                    
                    <div class="container" style="color:white">
                        <h2 class="text-default-me">Insert your ICSTWEET:</h2>
                         <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group">
                                <label for="usr" class="text-default-me">Name:</label>
                                <input type="text" class="form-control" style="width: 25%;" name="username_current">
                                <div class="form-group">
                                    <label for="comment" class="text-default-me">Comment:</label>
                                    <textarea style="width: 35%;" class="form-control" rows="5" id="comment" name="msg_current"></textarea>
                                    <br>
                                    <button class="btn draw-border" type="submit" name="Send">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>-->
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
                            <label for="email">Name:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="email">Last name</label>
                            <input type="email" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                            <label for="email">Username:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <button class="btn draw-border" type="submit" name="Send">Submit</button>
                    </form>
                    <!-- FIN FORMULARIO DE REGISTRO!  -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

</html>
