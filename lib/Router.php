<?php

class Router{


	protected $_controller = 'home';
	protected $_method     = 'index';
	protected $_params     = [];

#	private   $__Systems   = [];

	public function __construct( ){
	
		
	}
	public function redirect( $uri ){

		if( isset( $uri ) ):

			$uri = explode( '/', $uri );

		endif;
		

		if ( file_exists( ABSPATH. DS . 'controllers' . DS . $uri[0] . EXT )):

			$this->_controller = $uri[0];
			unset($uri[0]);

		endif;

		$con = $this->_controller;
		$this->_controller     = new $this->_controller();
		$this->_controller->loadModel( $con );

		if ( @method_exists($this->_controller, $uri[1]) ):

			$this->_method = $uri[1];
                        unset($uri[1]);

		endif;

		call_user_func_array([$this->_controller, $this->_method], array_values($uri));
	
	}



}
