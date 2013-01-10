<?php
  /*
  * DB_VALIDATORS version 1.0
  *
  * Imagina - Plugin.
  *
  *
  * Copyright (c) 2012 Dolem Labs
  *
  * Authors:  Paul Marclay (paul.eduardo.marclay@gmail.com)
  *
  */

    class Db_Validators_Primitive extends Ancestor {
        private $_errorMessage = '';
        
        public function getErrorMessage() {
            return $this->_errorMessage;
        }
        
        public function setErrorMessage($message) {
            $this->_errorMessage = $message;
        }
    }