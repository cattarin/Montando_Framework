<?php
    class Controller {
        protected function view($nome) {
            return require_once ('src/application/view/'.$nome); 
            exit();
        }
    }

?>
