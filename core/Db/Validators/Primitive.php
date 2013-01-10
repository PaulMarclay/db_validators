<?php

    class Db_Validators_Primitive extends Ancestor {
        private $_errorMessage = '';
        
        public function getErrorMessage() {
            return $this->_errorMessage;
        }
        
        public function setErrorMessage($message) {
            $this->_errorMessage = $message;
        }
    }