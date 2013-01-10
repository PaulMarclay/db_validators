<?php
    
    class Db_Validators_Email extends Db_Validators_Primitive {
        
        public function validate($email) {
        	if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
	    		list($username, $domain) = explode('@', $email);
	    		// if (checkdnsrr($domain, 'MX')) {
	    			return true;
	    		// }
	  		}

	  		$this->setErrorMessage("Invalid email: '$email'.");
	  		return false;
		}
    }