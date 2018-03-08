<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>Osobní profil</h1>
      <?php


        $age = 16;
        $firstName = "Matěj";
        $lastName = "Kneifl";
        $school = "ZŠ Plaňany";


       ?>

       <p>Jméno: <?php echo $firstName; ?></p>
       <p>Příjmení : <?php echo $lastName; ?></p>
       <p>Věk : <?php echo $age; ?></p>
       <p>Vzdělání : <?php echo $school; ?> </p>

       <p> Ahoj, já jsem <?php echo $firstName;?> <?php echo $lastName ?>, je mi <?php echo $age; ?> let a chodil jsem do <?php echo $school; ?>
       </p>

  </body>
</html>
