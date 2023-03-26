<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Przykład 6</title>
  </head>
  <body>
 <?php
function sprawdzam($numer) {
  if($numer>10) {
  throw new Exception("Wprowadzona wartość jest większa od 10.",5);
  }
  return true;
  }
  
  sprawdzam(11);
  
  echo "Przez błąd, ta wiadomość nie zostanie wyświetlona.";
?>
    </p>
  </body>
</html>