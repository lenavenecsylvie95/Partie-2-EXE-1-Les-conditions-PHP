<?php
$age = 45;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>Partie 2 Exe 1 PHP</title>
</head>
<body>
  <?php if ($age >= 18 && $age < 120){?>
    <p>Vous êtes majeur</p>
    <?php
  }
  elseif ($age < 18 && $age > 0){?>
<p>Vous êtes mineur</p>
  <?php }else{ ?>
    <p>Vous avez fait une erreur</p>
  <?php } ?>
</body>
</html>
