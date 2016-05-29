<?php

class view{

	
	private $__data  = '';
        private $__title = 'Welcome To my page';

	private function __is_assoc( $array ){

            // http://php.net/manual/en/function.is-array.php#98305    
            return (is_array($array) && (count($array)==0 || 0 !== count(array_diff_key($array, array_keys(array_keys($array))) )));

	}

	public function __construct(){


	
	
	}
	public function render( $view, $data = NULL ){

            $this->__sort( $data );

            require_once ABSPATH. DS.'views'. DS . 'header' . EXT;

            require_once ABSPATH. DS.'views'. DS . $view . EXT;
            require_once ABSPATH. DS.'views'. DS . 'footer' . EXT;
	
	}
        public function setTitle( $title = NULL ){
            
            $this->__title = !empty( $title ) ? $title : $this->__title;
            
        }

	private function __sort( $data ){

		if ($this->__is_assoc( $data )):

			$this->__data = "<table>";

			foreach( $data as $k => $v ):

			$this->__data .= "<tr><td>$k</td><td>$v</td></tr>";

			endforeach;
			
			$this->__data .= "</table>";
                        
                else:
                    $this->__data = $data;
		endif;

                
	}

}
