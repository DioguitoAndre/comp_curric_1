<?php

/*4.	Utilizando o for() e while():
a) Mostrar 25x a frase: "Lactobacilos vivos também possuem sentimentos";
b) Escrever um algoritmo que receba qualquer valor e mostre os valores de 0 até o número digitado. Ex: $var = 3; "0 1 2 3";
c) capturar dois valores em variáveis e mostrar os números entre eles. Ex: 5 e 10, imprimir: "6 7 8 9";
d) Escrever um algoritmo que multiplique os números utilizando apenas o operador +, ex: (3 * 5) = 5 + 5 + 5*/

?>

<!DOCTYPE >
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP</title>
	</head>
	<body>
		<h3>Letra A</h3>
		<?php
			$i = 0;
			
			for ($i=0; $i < 25; $i++) { 
				echo "Lactobacilos vivos também possuem sentimentos.<br/>";
			}
		?>
		<h3>Letra B</h3>
		<?php
		$var = 5;
			for ($i=1; $i <= $var; $i++) { 
				echo $i."<br/>";
			}
		?>
		<h3>Letra C</h3>
		<?php
			$var1 = 4;
			$var2 = 8;
			for ($i= $var1; $i < $var2; $i++) {
				$i;
				echo $i."<br/>";
			}
		?>
		<h3>Letra D</h3>
		<?php
			$num1 = 3;
			$num2 = 5;
			$a = 1;
			$soma = 0;
			
			while ($a <= $num1) { 
				$soma += $num2;
				$a ++;
			}
			echo $soma;
		?>
		
	</body>
</html>