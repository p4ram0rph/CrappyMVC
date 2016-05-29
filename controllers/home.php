<?php

class home extends controller{

	public function __construct(){

		parent::__construct( );

	}

	public function index(){


		$this->view->render( 'home/index' );

	}

	public function test(){

		echo "This is a test\r\n";
	}
}