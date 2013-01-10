<?php

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