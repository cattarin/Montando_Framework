<?php
    class blogModel extends model {
        public $_tabela = "blog";
    
        public function ultimosArtigos() {
            return $this->read(NULL, '3', null, 'id ASC');
        }
        
    }
   
?>
