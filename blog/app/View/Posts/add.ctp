<h1> Adicionando Postagens</h1>
<?php

echo $this->Form->create('Post');

echo $this->Form->input('title');
echo $this->Form->input('body', array('rows'=> '3'));

echo $this->Form->end("ENVIAR");