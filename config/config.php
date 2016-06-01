<?php


class config{
	
	const SERVER 	= 'localhost';
	const PORT      = 3306;
	const DATABASE 	= 'test';
	const USERNAME 	= 'root';
	const PASSWORD 	= 'loldev';
        const DEBUG     = True;
        
        /**

         * Should probably separate the debug stuff into a different class 
         * so we can do something like if( System::DEBUG ) { config::Set('username', 'root')}
         * and etc so only root account i used when DEBUG is true     
         */
        
}