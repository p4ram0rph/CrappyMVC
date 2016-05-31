<?php

class login extends controller{

	public function __construct( ){

		parent::__construct( );
                
	}

	public function index( ){
            
            if( $this->AuthSys->isAuthenticated( ) ):
                
                $this->view->render( 'home/index', 'You are already logged in' );
                exit();
                
            endif;
            
		$this->view->render('login/index');

	}

	public function auth( ){
            
            if( $data = $this->model->auth( ) ):
                
                $this->AuthSys->Login( $data['username'] );
                
                
            else:
                $this->view->render('login/index', ' Wrong username or password ');
                exit( );
            endif;
                
            $msg = sprintf( 'Welcome %s' , $data['username']);
            $this->view->render( 'home/index',  $msg);

	}
        public function deauth( ){
            
            $this->AuthSys->logout();
            
        }

}