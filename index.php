<?php // include 'indexControler.php' ?>
<!doctype html>
<html lang=fr dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <title>Part11</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center">Une calculatrice en PHP</h1>
    <form action="index.php" method="GET">
      <div class="row">
      <input type="text" name="chiffre1" value="0"/>
      <input type="text" name="chiffre2" value="0"/>
      <input type="submit" name="addition" value="+"/>
      <input type="submit" name="soustraction" value="-"/>
      <input type="submit" name="multiplication" value="*"/>
      <input type="submit" name="division" value="/"/>
    <p>Résultat : <?= calculate(); ?></p>
        </div><!-- fin row-->
    </form>
    <footer>
      <h3 class="text-center">Merci de votre attention !</h3>
    </footer>
  </div><!-- fin container-->
  <script src="assets/libraries/jquery/jquery-3.4.1.min.js"></script>
  <script src="assets/libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>


