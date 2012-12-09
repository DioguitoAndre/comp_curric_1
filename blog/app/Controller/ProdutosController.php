<?php

class ProdutosController extends AppController {

    public $helpers = array('Html','Form');
    public $name ='Produtos';
    public $components = array("Session");
   
    public function index() {
        $todosOsProdutos = $this->Produto->find('all');

        $this -> set('produtos', $todosOsProdutos);
    }

    public function view($id = null){

    	$this->Produto->id = $id;

    	$p = $this->Produto->read();

    	$this->set('produto', $p);
    }

    public function add(){
    	  if ($this->request->is('post')) {
    	  	
            $dadosDoFormulario = $this->request->data;
            if($this->Produto->save($dadosDoFormulario)){
            	$this->Session->setFlash('Produto inserido.');
                $this->redirect(array('action' => 'index'));
            }    
        }
    }

    function edit($id = null) {
        $this->Produto->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Produto->read();
        } else {
            if ($this->Produto->save($this->request->data)) {
                $this->Session->setFlash('Produto alterado');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function delete($id) {
        if ($this->request->is('post')) {
            throw new MethodNotAllowedException();
        }else {
        if ($this->Produto->delete($id)) {
            $this->Session->setFlash('O Produto com id: ' . $id . ' foi deletado.');
            $this->redirect(array('action' => 'index'));
            }
        }
    }
}