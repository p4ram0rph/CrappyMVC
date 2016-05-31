<?php

class AuthSys {
    
    public function __construct( $session ) {
        
        if( !is_a($session, 'Session') ):
            
            throw new \Exception( 'Class error' ); 
               
        endif;
        
        $this->session = $session;
        
    }
    public function isAuthenticate( ) {
        
        return ( $this->session->get( 'loggedin' ) !== NULL and $this->session->get('username') !== NULL );

    }
    public function Login( $username ){
        
        $this->session->set('loggedin', True);
        $this->session->set('username', $username);
        
    }
    public function user( ){
        
        return $this->session->get('username');
        
    }
}
