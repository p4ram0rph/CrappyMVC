<?php


/**
* 
*  MGR class that deals with sessions
*
*
* 
* @Author Isaiah Isijola <izicthegreat@gmail.com> with pip
*/
class Session
{


	public  $bytelen   = 1024;# for openssl_random_psuedo_bytes
	private $__salt    = ''; # eventually use a random value rather than a hardcoded salt
	private $__options = array(
		'session.cookie_lifetime'		  => 0,
		'session.use_cookies'			  => 'On',
		'session.use_only_cookies' 		  => 'On',
		'session.use_strict_mode'		  => 'On',
		'session.cookie_httponly'		  => 'On',
		'session.cookie_secure'			  => 'Off',
		'session.gc_maxlifetime'                  => 0,
		'session.gc_divisor'       		  => null,
		'session.use_trans_sid'    		  => 'Off',
		'session.referer_check'   		  => 'localhost',
		'session.cache_limiter'    		  => 'nocache',
		'session.hash_function'			  => 'sha512',
		'session.entropy_file'			  => '/dev/urandom',
		'session.entropy_length'		  => 0,
		'session.cookie_path'                     => '/',
		'session.serialize_hander'		  => 'php',
		'session.hash_bits_per_character'         => 4,
		/**
		*
		* @internal any non-zero value will use the Windows Random API (CryptGenRandom) on Windows
		* @internal also, /dev/arandom is preferred but Linux is shit !CHANGE THIS!
		*/
	);
	public function __construct()
	{

		foreach ($this->__options as $k => $v):

			ini_set( $k , $v );

		endforeach;
		session_cache_limiter();
		session_start();
		$this->sess = &$_SESSION;
		/*
		*$_SESSION is very ugly :(
		*/
	}
	public function getSname( ){
		return $this->sname;
		/*
		* So we can get the value of sname in other objects but cant modify it
		*/
	}
	public function refreshSession( ){
		session_regenerate_id( true );

	}

	public function destroy( ){
            
		session_destroy( );
	}


	public function set( $sessName, $sessValue ){

		$this->sess[$sessName] = $sessValue; 
	}
        public function get( $sessName ){

		return @$this->sess[$sessName]; 
	}


}


