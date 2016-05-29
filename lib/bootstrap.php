<?php

define('DS', DIRECTORY_SEPARATOR );
define('EXT', '.php');
define('ABSPATH', dirname(__DIR__));
error_reporting(E_ALL);
ini_set("display_errors", 1);


spl_autoload_register(function($class){



	foreach( array( 'controllers', 'lib', 'models', 'view', 'config' ) as $path):


		if( file_exists( ABSPATH. DS. $path . DS . $class .EXT  )  ):

			require_once ABSPATH. DS. $path . DS . $class .EXT ;
			return;
		endif;

	endforeach;

	throw new \Exception('Class not found');
});
