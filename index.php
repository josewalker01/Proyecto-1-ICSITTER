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




?>

<body>

    <nav class="navbar navbar bg-navBar divs_css" style="border-width:0px;">
        <span class="hvr-sink">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand " href="#"><span class="navbar-txt">ICSITTER</span></a>
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

                <center>
                    <div class="neon hvr-shrink">ICSITTER </div>
                </center>

            </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <div class="row">
            <div class="col-md-8 ">
                <div class="divs_css2 div-scroll scrollbar" id="first_div">
                    
                    <div  class="w3-container w3-card w3-white w3-round w3-margin"><br>
                        <img src="img/phoenix.png" alt="Avatar" class="w3-left w3-circle w3-margin-right hvr-rotate" style="width:60px">
                        <span class="w3-right w3-opacity">"TIME"</span>
                        <h4>USERNAME</h4><br>
                        <hr class="w3-clear">
                        <p>MESSAGE Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                </div>
            </div>
            <div class="col-md-4 ">
                <div class="divs_css2" >
                    <div class="container">
                        <h2 class="text-default-me">Insert your ICSTWEET:</h2>
                        <form>
                            <div class="form-group">
                                <label for="usr" class="text-default-me">Name:</label>
                                <input type="text" class="form-control" style="width: 25%;">
                                <div class="form-group">
                                    <label for="comment" class="text-default-me">Comment:</label>
                                    <textarea style="width: 35%;" class="form-control" rows="5" id="comment"></textarea>
                                    <br>
                                    <button class="btn draw-border">Submit</button>
                                    
                                </div>
                            </div>
                        </form>
                        <button id="btn2">TEST BUTTON</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<script>
  $("#btn2").click(function(){
    console.log("hola2F");
    console.log("...");
    $("#first_div").append(
                    
                    '<div id="first_div" class="w3-container w3-card w3-white w3-round w3-margin"><br>' +
                        '<img src="img/phoenix.png" alt="Avatar" class="w3-left w3-circle w3-margin-right hvr-rotate" style="width:60px">'+
                        '<span class="w3-right w3-opacity">TIME</span>'+
                        '<h4>USERNAME</h4><br>'+
                        '<hr class="w3-clear">'+
                        '<p>MESSAGE Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>'+
                    '</div>'

                    );
  });</script>