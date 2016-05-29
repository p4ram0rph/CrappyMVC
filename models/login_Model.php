<?php

class login_Model extends model{


	public function __construct( ){

		parent::__construct();

	}


	public function auth( ){

		if( isset( $_POST['username'], $_POST['password'] ) ):
                    
                    $query = $this->db->prepare( 
                            'SELECT * FROM users WHERE username=:username AND password=:password' );
                
                    $query->execute( array( 
                        ':username' => $_POST['username'],
                        ':password' => $_POST['password']                        
                    ) );
             
                    return $query->fetch( );
                endif;
	}
       
}