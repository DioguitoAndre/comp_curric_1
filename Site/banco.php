<?php

mysql_connect("localhost", "root", "diogo","banco.php") or die(mysql_error());


mysql_select_db("teste.php") or die(mysql_error());

$sql = "insert into contact (name, email, menssage, created) values ('Diogo', 'diogoandrebesen@yahoo.com.br', 'mensagem', NOW())";


mysql_query($sql) or die(mysql_error());

echo "funcionou?";

mysql_close();

?>