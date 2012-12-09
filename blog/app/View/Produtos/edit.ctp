<h1>Edit Cadastro</h1>
<?php
    echo $this->Form->create('Produto', array('action' => 'edit'));
    echo $this->Form->input('name');
    echo $this->Form->input('weight');
    echo $this->Form->input('valid');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Post');