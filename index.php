<!-- GOAL:
Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> PHP SNACKS 1 </title>
  </head>
  <body>

    <h1>RISULTATI DELLE PARTITE NBA:</h1>

    <ol>

    <?php

      $nbaMatches = [

        [
          'team1' => 'Los Angeles Lakers',
          'team2' => 'San Antonio Spurs',
          'score1'=> 55,
          'score2'=> 60
        ],

        [
          'team1' => 'Chicago Bulls',
          'team2' => 'Washington Wizards',
          'score1'=> 30,
          'score2'=> 89,
        ],

        [
          'team1' => 'Toronto Raptors',
          'team2' => 'Utah Jazz',
          'score1'=> 56,
          'score2'=> 77,
        ],

      ];

      foreach ($nbaMatches as $match) {

        echo $match['team1'] ." - " . $match['team2'] . " | " . $match['score1'] . "-" . $match['score2'] . "<br>" . "<br>";

      }

    ?>

    </ol>

  </body>
</html>
