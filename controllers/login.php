<?php

class login extends controller{

	public function __construct( ){

		parent::__construct( );
	}

	public function index( ){

		$this->view->render('login/index');

	}

	public function auth( ){
            
            //echo $this->model->auth( ); 

            if( $data = $this->model->auth( ) ):
                
                $this->AuthSys->Login( $data['username'] );
                
                
            else:
                $this->view->render('login/error', ' Wrong username or password ');
                exit( );
            endif;
                
            $msg = sprintf( 'Welcome %s' , $data['username']);
            $this->view->render( 'home/index',  $msg);

	}

}