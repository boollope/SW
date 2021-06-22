<?php

$entrada = $_POST;


$resultados = array();

function delta($num1,$num2,$num3){
	$resdelta = $num2**2 - 4 * $num1 * $num3;
	return $resdelta;
}

$resdelta = delta($entrada["Entrada1"], $entrada["Entrada2"],
$entrada["Entrada3"]);

function x1($num1,$num2,$resdelta){
	
    $raiz = sqrt($resdelta);

    $resx1 = (-$num2 + $raiz) / (2*$num1);
    return $resx1;
}

function x2($num1,$num2,$resdelta){
	
    $raiz = sqrt($resdelta);

    $resx1 = (-$num2 - $raiz) / (2*$num1);
    return $resx1;
}








$resultados["delta"] = delta($entrada["Entrada1"], 
							 $entrada["Entrada2"], 
							 $entrada["Entrada3"]); 


$resultados["x1"] = x1($entrada["Entrada1"],
	   				   $entrada["Entrada2"],
	   				   $resdelta);

$resultados["x2"] = x2($entrada["Entrada1"],
	   				   $entrada["Entrada2"],
	   				   $resdelta);


echo "<pre>";
var_dump($resultados);


?>