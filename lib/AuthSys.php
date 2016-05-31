<?php

class AuthSys {
    
    public function __construct( Session $session ) {
        
        $this->session = $session;
        
    }
    public function isAuthenticated( ) {
        
        return ( $this->session->get( 'loggedin' ) !== NULL and $this->session->get('username') !== NULL );

    }
    public function Login( $username ){
        
        $this->session->set('loggedin', True);
        $this->session->set('username', $username);
        
    }
    public function user( ){
        
        return $this->session->get('username');
        
    }
    public function Logout( ){
        $this->session->destroy();
    }
}
