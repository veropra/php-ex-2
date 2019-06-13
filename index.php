<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ex-2</title>
    <link rel="stylesheet" href="public/css/php-ex-2.css">
  </head>
  <body>

<!--Stampare una stringa verde se la
variabile password passata in GET è
uguale a “Boolean”, altrimenti stampare
una stringa rossa.-->

  <?php
  //Variabile password in get
    $password = strtolower($_GET['password']);
    //Se la password è uguale a "boolean" allora è corretta(green)
    if ($password = 'boolean') {
      echo '<font color="green">La password inserita è corretta!</font>';
    //Altrimenti non è corretta(red)
    } else {
      echo '<font color="red">La password inserita NON è corretta!!!</font>';
    }
  ?>


  </body>
</html>
