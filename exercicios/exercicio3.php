<?php
/* 3.	Utilizando a condição switch(): 
a) Caso a $qtd de produtos for zero: mostrar uma mensagem informando que não possui nenhum produto cadastrado;
b) Caso a $qtd for 1: mostrar a mensagem: "Você possui um produto cadastrado";
c) Caso a $qtd for 1, 2 e 3: Mostrar a mensagem: "Você possui vários produtos cadastrados";
d) Caso não for nenhum desses números, mostrar: "Cadastro inválido, tente novamente";*/
?>

<!DOCTYPE >
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP</title>
	</head>
	<body>
		<?php
		$qtd = 1;
		switch ($qtd) {
			case 0 :
				echo "Não possui nenhum produto cadastrado.<br/>";
				break;
			case 1 :
				echo "Você possui um produto cadastrado.<br/>";
				break;
			case "$qtd == 2 && $qtd == 3" :
				echo "Você possui vários produtos cadastrados.<br/>";
				break;
			case defauth :
				echo "Cadastro inválido, tente novamente.<br/>";
				break;
		}
		?>
	</body>
</html>