<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="site" content="">
    <meta name="Mario da Recepção" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->




    <!--usado para que o Internet Explorer leia o codigo para dar suporte
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    
  </head>

  <body>


<form action="formulario.php" method="POST"> 

<fieldset>
<legend=Formulario de Contato></legend>

<input type="hidden" name="pagina" value="contato">

<label for="idNome">Nome;</label>
<input type="email" name="email" id="idNome">

<label for="idEmail">E-mail;</label>
<input type="email" name="email" id="idEmail">

<label form="idMensagens"></label>

<label for="mensagem">Mensagem;</label>
<textarea name="mensagem" id="idMensagem" rows="3"></textarea>

<br>

<button class="btn btn-primary">Enviar Informações</button>

</fieldset>

</form>

 

  </body>
</html>