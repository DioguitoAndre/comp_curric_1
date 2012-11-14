<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8"/>
<title> Trabalho</title>

</head>

<body>

<?php

$variavel1 = 10;
$variavel2 = 15;
$variavel3 = 5;
$variavelMaior = 0;
$variavelMenor = 0;


if ($variavel1 > $variavel2 && $variavel1 > $variavel3) {
	$variavelMaior = $variavel1;
}

if ($variavel2 > $variavel3 && $variavel2 > $variavel1) {
	$variavelMaior = $variavel2;
}
else {
	$variavelMaior = $variavel3;
}


if ($variavel1 < $variavel2 && $variavel1 < $variavel3) {
	$variavelMenor = $variavel1;
}

if ($variavel2 < $variavel3 && $variavel2 < $variavel1) {
	$variavelMenor = $variavel2;
}
else {
	$variavelMenor = $variavel3;
}

echo "Maior ". $variavelMaior. "<br>";
echo "Menor ". $variavelMenor;

?>

</body>
</html>