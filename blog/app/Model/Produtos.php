<?php
class Produtos extends AppModel{
public $name = 'Produtos';
public $weight = 'Produtos';
public $validate = array(
'name' => array(
    'rule' => 'notEmpty'
),

(
'weight' => array(
    'rule' => 'notEmpty'
),
        
'valid' => array(
    'rule' => 'notEmpty'
)
);
}