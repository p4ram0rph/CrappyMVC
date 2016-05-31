<?php

class editor extends controller{
    
    public function __construct() {
        parent::__construct();
        
    }
    public function index( ) {
        
        if( $this->AuthSys->isAuthenticate( ) ):
            
            $this->view->render('home/index', sprintf('Welcome %s', $this->AuthSys->user( ) ) );
        
        endif;
        
    }
}