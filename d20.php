<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

<?php
function String de20() {
  $d=rand(20);
  return "./d".$d.".png";
?>

  <body>
     <img src="<?php de20()?>">
  </body>

</html>
