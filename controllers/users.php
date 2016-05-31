<?php

class users extends controller{
    
    public function __construct() {
        parent::__construct();
        $this->view->setTitle( 'This is auth page' );
        
    }
    public function index( ) {
        
        if( !$this->AuthSys->isAuthenticated( ) ):
            
            $this->view->render('login/index', 'You must be logged in to access that page!' );
            return;        
        endif;

        
        
        $this->view->render( 'home/index', sprintf('Welcome %s', $this->AuthSys->user() ));
        
    }
    public function view( $id = NULL ){
        
        $this->view->render( 'home/index', $this->model->view( $id ));
        
    }
    public function settings( ){
        
        $this->view->render( 'users/settings' );
    }
}