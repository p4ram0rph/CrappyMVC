<?php

class authenticate extends controller{
    
    private $__msg = '<h1>Welcome user </h1>';
    
    public function __construct() {
        parent::__construct();
    
    }
    public function index(  ){
        
        //$this->view->renderTemplate( 'header' );
        $this->view->setTitle( 'This is auth page' );
        $this->view->render('home/index' , $this->__msg );
        // $this->view->renderTemplate('footer');
        
    }
    public function view( ){
        
        
    }
    
    
}