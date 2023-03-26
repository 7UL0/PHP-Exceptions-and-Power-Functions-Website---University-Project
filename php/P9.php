<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Przykład 9</title>
  </head>
  <body>
 <?php
function pierwiastekdrugiegostopnia($podstawa) {
  if($podstawa<0) {
  throw new Exception("Podstawa nie może być ujemna dla pierwiastka
  drugiego stopnia",123456789);
  }
  echo "Pierwiastek drugiego stopnia dla ".$podstawa." wynosi: ".$podstawa**(1/2)."<br>";
  }
  
  try {
  pierwiastekdrugiegostopnia(1);
  }
  
  catch(Exception $e) {
  echo "Wiadomość błędu: ".$e->getMessage();
  echo "<br>";
  echo "Kod błędu: ".$e->getCode();
  }
  
  try {
  pierwiastekdrugiegostopnia(-1);
  }
  
  catch(Exception $e) {
  echo "Wiadomość błędu: ".$e->getMessage();
  echo "<br>";
  echo "Kod błędu: ".$e->getCode();
  }
?>
    </p>
  </body>
</html>