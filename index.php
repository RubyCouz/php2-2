<?php
$isEasy = true; //définition de la variable boolean
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
  </head>
  <body>
    <p>
    <?php
/* première ecriture
if ($isEasy == true)
{
  echo 'c\'est facile!!';
} else {
  echo 'c\'est diffile !!!';
}
*/
 if ($isEasy = true)
 {
   echo 'c\'est facile !!';
 } else {
   echo 'c\'est diffile !!!';
 }
     ?>
   </p>
  </body>
</html>
