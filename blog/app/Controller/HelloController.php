<?php
class HelloController extends AppController {

	
	public function index() {
		$nomeCompleto ="Diogo Besen";
		
		$this->set('nome', $nomeCompleto);

	}
	public function contact() {

	}

	public function about_me() {

	}

}