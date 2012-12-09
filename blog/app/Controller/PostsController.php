<?php

class PostsController extends AppController {

    public $helpers = array('Html','Form');
    public $components = array("Session");
   
    public function index() {
        $todasAsPostagens = $this->Post->find('all');

        $this -> set('posts', $todasAsPostagens);
    }
    public function view($id = null){

        $this->Post->id = $id;

        $p = $this->Post->read();

        $this->set('post', $p);
    }
    public function add(){
          if ($this->request->is('post')) {
            $dadosDoFormulario = $this->request->data;
            if($this->Post->save($dadosDoFormulario)){
                $this->Session->setFlash('A postagem foi inserida com sucesso.');
                $this->redirect(array('action' => 'index'));
            }    
        }
    }

    function edit($id = null) {
        $this->Post->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Post->read();
        } else {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }else {
        if ($this->Post->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
            }
        }
    }
}