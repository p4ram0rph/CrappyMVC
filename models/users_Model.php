<?php

class users_Model extends model{


	public function __construct( ){

		parent::__construct();

	}


	public function view( $id ){
                    
                $query = $this->db->prepare( 'SELECT username FROM users WHERE id=:id' );
                
                $query->execute( array( 
                    ':id' => $id,                       
                ) );
             
                return $query->fetch( );
	}
       
}