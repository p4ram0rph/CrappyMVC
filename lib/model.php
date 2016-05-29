<?php

class model{

	public function __construct(){

		$this->db = DB::getInstance();
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	}





}
