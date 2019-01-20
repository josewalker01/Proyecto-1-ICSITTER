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
    </nav>

    <br><br><br>
    <div class="container-fluid">
        <div class="row firebg divs_css3">
            
            <div class="col-md-12">
            <img src="img/owl.gif" class="logo-owl" height="200px" width="200px">
                <center>
                
                <h1 class="flux hvr-shrink">I C S I T T E R</h1>
                </center>

            </div>
        </div>
          <br>  
        <center></center>
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
            
                <div class="divs_css2 galaxybg">
                    
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
    var sd2 = new SwapDogs(
        document.getElementById('sd-2'), {
            autoInit: true,
            words: ["I C S I T T E R", "I C S I T T E R", "I C S I T T E R", "I C S I T T E R"],
            letters: 'абвгдеёзжклмнопрст',
            interval: 4000,
            interval2: 50
        }
    );

</script>
</html>
