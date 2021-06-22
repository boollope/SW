<?php
echo "Fórmula de Bhaskara";

$a = 1;
$b = 12;
$c = -13;

echo "<br>";
echo "<br>";

echo "a =  ",$a;
echo "<br>";

echo "b =  ",$b;
echo "<br>";

echo "c =  ",$c;
echo "<br>";

echo "<br>";
echo "<br>";

$delta = $b**2 - 4 * $a * $c;
echo "Valor do delta:  ", $delta;
echo "<br>";

$raiz = sqrt($delta);

$x1 = (-$b + $raiz) / (2*$a);
echo "Valor de x': ", $x1;
echo "<br>";

$x2 = (-$b - $raiz) / (2*$a);
echo "Valor de x'':  ", $x2;
?>