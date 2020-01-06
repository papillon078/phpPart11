<?php include 'TP11Controler.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Calculatrice</title>
    </head>
    <body class="bg-dark text-white">
        <h1 class="text-white">Une calculatrice en PHP</h1>
        <div class="container">
            <div class="row">
                <form action="" method="GET">
                    <div class="card-body body col-4 mx-auto m-0 p-0 rounded-lg">
                        <div class="result col-12 text-right py-2 pt-3 mx-auto">
                            <div class="resultArea col-12 text-right mx-auto"><?= calculate() ?></div>
                        </div>
                        <div class="">
                            <div class="row justify-content-center pb-2">
                                <button type="submit" name="ac" value="C" class="butn font-weight-bold col-2 py-3 px-4 m-1 text-white">AC</button>
                                <button type="submit" name="openPar" value="(" class="butn font-weight-bold col-2 py-3 px-4 m-1 text-white">(</button>
                                <button type="submit" name="closePar" value=")" class="butn font-weight-bold col-2 py-3 px-4 m-1 text-white">)</button>
                                <button type="submit" name="division" value="/" class="butn font-weight-bold col-2 py-3 px-4 m-1 text-white">&divide;</button>
                                <div class="w-100"></div>
                                <button type="submit" name="seven" value="7" class="nbr font-weight-bold col-2 py-3 px-4 m-1 text-white">7</button>
                                <button type="submit" name="height" value="8" class="nbr font-weight-bold col-2 py-3 px-4 m-1 text-white">8</button>
                                <button type="submit" name="nine" value="9" class="nbr font-weight-bold col-2 py-3 px-4 m-1 text-white">9</button>
                                <button type="submit" name="multiplication" value="x" class="butn font-weight-bold  col-2 py-3 px-4 m-1 text-white">&times;</button>
                                <div class="w-100"></div>
                                <button type="submit" name="four" value="4" class="nbr font-weight-bold col-2 py-3 px-4 m-1 text-white">4</button>
                                <button type="submit" name="five" value="5" class="nbr font-weight-bold col-2 py-3 px-4 m-1 text-white">5</button>
                                <button type="submit" name="six" value="6" class="nbr font-weight-bold col-2 py-3 px-4 m-1 text-white">6</button>
                                <button type="submit" name="soustraction" value="-" class="butn font-weight-bold col-2 py-3 px-4 m-1 text-white">-</button>
                                <div class="w-100"></div>
                                <button type="submit" name="one" value="1" class="nbr font-weight-bold col-2 py-3 px-4 m-1 text-white">1</button>
                                <button type="submit" name="two" value="2" class="nbr font-weight-bold col-2 py-3 px-4 m-1 text-white">2</button>
                                <button type="submit" name="three" value="3" class="nbr font-weight-bold col-2 py-3 px-4 m-1 text-white">3</button>
                                <button type="submit" name="addition" value="+" class="butn font-weight-bold col-2 py-3 px-4 m-1 text-white">+</button>
                                <div class="w-100"></div>
                                <button type="submit" name="zero" value="0" class="nbr font-weight-bold col-2 py-3 px-4 m-1 text-white">0</button>
                                <button type="submit" name="dot" value="." class="nbr font-weight-bold col-2 py-3 px-4 m-1 text-white">.</button>
                                <button type="submit" name="result" value="=" class="egal font-weight-bold py-3 px-4 m-1 my-1 text-white">=</button>
                            </div>
                        </div>
                    </div><!-- fin de body -->
                </form>
            </div><!-- fin de row -->
        </div><!-- fin de container -->
        <script src="assets/libraries/jquery/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>



