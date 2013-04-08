<?php
    class receitasModel extends model {
        public $_tabela = "receitas";
    
        public function listaReceitas($qtd, $offset = NULL) {
            return $this->read(NULL, $qtd, $offset, 'id ASC');
        }
        
    }
   
?>
