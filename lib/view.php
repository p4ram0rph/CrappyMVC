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
        public function input( $type, $name,$value = NULL, $id = NULL, $class = NULL ) {
            
            $retVal = sprintf('<input type="%s" name="%s"', $type, $name );
            
            $retVal .= ( $value ) ? sprintf(' value="%s"', $value ) : '' ;
            $retVal .= (   $id  ) ? sprintf(' id="%s"', $id ) : '' ;
            $retVal .= ( $class ) ? sprintf(' class="%s"', $class ) : '';
            $retVal .= '/>';
            
            return $retVal;
            
        }public function img( $src, $height = '100px' , $width = '300px' ){
            
            return sprintf( '<img src="%s" height="%s" width="%s"/>', $src, $height, $width );
            
        }
        public function anchor( $href = NULL, $target = '_blank', $content ){
            
            return sprintf('<a href="%s" target="%s">%s</a>', $href, $target, $content);
        }
        public function ulink( $id = 'links', $class = 'links', array $anchors ){
            
            $retVal = '<ul>' . PHP_EOL;
            
            foreach( $anchors as $k => $v ):
                
                $retVal .= sprintf( '<li>%s</li>', call_user_func_array([ $this, 'anchor' ], $v)) . PHP_EOL;
                                
            endforeach;
            
            $retVal .= '</ul>';
                    
            return $retVal;
            
        }
        public function div( $data, $id = NULL, $class = NULL, $style = NULL  ){
            
            return sprintf( '<div id="%s" class="%s" style="%s">'.PHP_EOL.'%s'.PHP_EOL.'</div>', $id, $class, $style, $data );
            
        }

        public function displayForm( $method = 'POST', $action = NULL,  array $inputs ) {
            
            $retVal = sprintf('<form method="%s" action="%s">', $method, $action);
            
            foreach( $inputs as $k => $v):
                
                $retVal .= call_user_func_array([ $this, 'input'], $v);
                
            endforeach;
            
            $retVal .= '</form>';
            
            return $retVal;
            
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
                    
                elseif(is_array( $data )):
                    
                    foreach ($data as $v):
                       
                        $this->data .= sprintf('%s<br/>', $v);
                    
                    endforeach;
                    
                else:

                    $this->__data = $data;

                endif;

                
	}

}
