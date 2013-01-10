<?php
 	/*
	*	DB_VALIDATORS version 1.0
	*
	*	Imagina - Plugin.
	*
	*
	*	Copyright (c) 2012 Dolem Labs
	*
	*	Authors:	Paul Marclay (paul.eduardo.marclay@gmail.com)
	*
	*/

    class Validators_Date extends Validators_Primitive {
        public function __construct($date) {
		
					$stamp = strtotime($date);
				
					if (!is_numeric($stamp)) {
						return false;
					}
					$month = date('m', $stamp);
					$day   = date('d', $stamp);
					$year  = date('Y', $stamp);
				
					if (checkdate($month, $day, $year)) {
						return true;
					}
				
					return false;
				}
    }