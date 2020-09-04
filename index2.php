<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> PHP SNACKS 2 </title>
  </head>

  <body>

    <?php

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    echo "name:" . $name . "<br>";
    echo "mail:" . $mail . "<br>";
    echo "age:" . $age . "<br>";
    echo "<br>";
    echo "<br>";

    $validName = strlen($name) > 3;

    $validMail = strpos($mail, '.') !== false &&
                 strpos($mail, '@') !== false;

    $validAge = is_numeric($age);
    
    if ($validName && $validMail && $validAge) {
      echo "Accesso riuscito";
    } else {
      echo "Accesso negato";
    }

     ?>
  </body>
</html>
