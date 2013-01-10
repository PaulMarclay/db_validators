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

    class Validators_Ccnumber extends Validators_Primitive {
        public function __construct($type, $number) {
			$type = strtolower($type);
			
			switch (substr($type, 0, 2)) {
				case "vi":
					$match = '/^4(.{12}|.{15})$/';
					break;				
				case "ma":
				case "mc":
					$match = '/^5[1-5].{14}$/';
					break;				
				case "am":
				case "ax":
					$match = '/^3[47].{13}$/';
					break;				
				case "di":
					$match = '/^6011.{12}$/';
					break;
				default:
					return FALSE;
					break;
			}
			
			if (!preg_match($match, $number)) {
				return FALSE;
			}
			
			// Validate card number using MOD10
			$map = array(0, 2, 4, 6, 8, 1, 3, 5, 7, 9);
			$sum = 0;
			
			for ($i = 0; $i < strlen($number); $i++) {
				if ($i % 2) {
					$num  = $number[strlen($number) - 1 - $i];
					$sum += $map[$num];
				}
				else {
					$sum += $number[strlen($number) - 1 - $i];
				}
			}		
			return ($sum % 10) ? FALSE : TRUE;
		}
    }