<?php

// $_POST = variavel

// var_dump($_POST);

// Se for enviado um post e a variavel não é vazia
// então mostrar os dados

if (isset($POST) ["pagina"] && $_POST["pagina"] == "contato") {
	
	echo $_POST("nome"),"<br>";
	echo $_POST("email"),"<br>";
	echo $_POST("mensagem");

} else {
	header("Location: contact.php")
}


?>