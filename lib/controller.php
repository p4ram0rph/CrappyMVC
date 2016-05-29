<?php


class controller{



	public function __construct(){
	
		$this->view     = new view();
                $this->Session  = new Session();
                $this->AuthSys  = new AuthSys( $this->Session );
	
	}

	public function loadModel( $name ){

		$path = ABSPATH . DS . 'models' . DS . $name . '_Model' . EXT ;

		if ( file_exists( $path ) ):

			require_once $path;

			$moduleName  = $name . '_Model';
			$this->model = new $moduleName();

		endif;
	}


}
