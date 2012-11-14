<?php
/*2.	Depois da tag <h1> criar uma div #conteudo e nela adicionar o seguinte código PHP: 
 $nome1 = “Fulano”;
 $nome2 = “Fulana”;
 $nome3 = “Ciclano”;
 $sexo1 = “M”;
 $sexo2 = “F”;
 $sexo3 = “M”;
 
a) Concatenar os nomes e imprimir numa tag <p>, e mostrar qual sexo predominante na equipe. Exemplo: 
Se o $sexo1 for igual a M, e $sexo2 for igual a M e $sexo3 for igual a M então mostrar uma mensagem dizendo que 
a equipe é formada por meninos;
Se o $sexo1 for igual a F, e $sexo2 for igual a F e $sexo3 for igual a F então mostrar uma mensagem dizendo que 
a equipe é formada por meninas;
Senão mostrar uma mensagem dizendo que a equipe é mista;*/
?>

<!DOCTYPE >
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP</title>
	</head>
	<body>

		<h1>Nome</h1>
		<div class="conteudo">
			<?php
			$nome1 = "Fulano";
			$nome2 = "Fulana";
			$nome3 = "Ciclano";
			$sexo1 = "M";
			$sexo2 = "F";
			$sexo3 = "M";
			$m = 0;
			$f = 0;
			
			if ($sexo1 == "M") {
				$m += "1";
			} else {
				$f += "1";
			}
			if ($sexo2 == "M") {
				$m += "1";
			} else {
				$f += "1";
			}
			if ($sexo3 == "M") {
				$m += "1";
			} else {
				$f+= "1";
			}			
			?>
		<p> <?php echo $nome1." - ".$sexo1.".<br /"?> </p>
		<p> <?php echo $nome2." - ".$sexo2.".<br />"?> </p>
		<p> <?php echo $nome3." - ".$sexo3.".<br />"?> </p>
		<p><?php if ($m == 3) {
				echo "A equipe é formada por meninos.";
			} if ($f == 3) {
				echo "A equipe é formada por meninas.";
			} else{
				echo "A equipe é mista.";
			}?></p>
		</div>
	</body>
</html>