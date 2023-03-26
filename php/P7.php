<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Przykład 7</title>
  </head>
  <body>
 <?php
function sprawdzam($numer) {
  if($numer>10) {
  throw new Exception("Wprowadzona wartość jest większa od 10.",5);
  }
  return true;
  }
  
  try {
  sprawdzam(11);
  echo "Nie wystąpił żaden błąd";
  }
  
  catch(Exception $e) {
  echo "Wiadomość błędu: ".$e->getMessage();
  echo "<br>";
  echo "Kod błędu: ".$e->getCode();}
?>
    </p>
  </body>
</html>