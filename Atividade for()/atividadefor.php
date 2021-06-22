<?php 

echo '<pre>';

$entrada = $_POST;

$Valori = $entrada ["Entrada1"];
$Valorf = $entrada ["Entrada2"];

$Marray = array();

for ($i= $Valori; $i < $Valorf; $i++) {
  $Marray[] = rand();
}

var_dump($Marray);

function par($Marray) {

  if ($Marray % 2 == 0) {
    $retorno = true;
  } else {
      $retorno = false;
  }

  return $retorno;
}


foreach ($Marray as $key => $value) {
  echo "O numero $value ";
   if (par($value)) {
    echo "É par";
  } else {
    echo "é Impar";
  }
  echo "<br>";
}


 ?>