<?php
    class eventosModel extends model {
        public $_tabela = "eventos";
    
        public function ultimosEventos() {
            return $this->read(null, '4', null, 'id ASC');
        }
        
    }
   
?>
