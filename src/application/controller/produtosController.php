<?php
    class Produtos extends Controller {
        public function  index() {
            $this->view('produtosIndex.phtml');
        }
        
        public function  novos() {
            $this->view('produtosNovos.phtml');
        }
    }
?>
