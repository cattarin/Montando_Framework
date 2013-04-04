<?php
    class Produtos extends Controller {
        public function  index() {
            $db = new produtosModel();
           /* $db->insert('posts', array(
                "titulo" => "titualo aki",
                "resumo" => "resumo aki",
                "conteudo" => "conteudo aki"
            )); */
            
           // print_r($db->read('posts', 'id=1'));
        
          /*  $db->update('posts', array(
                "titulo" => "novo titulo",
                "conteudo" => "novo conteudo"
            ), 'id=1'); */
            
            $db->delete('posts','id=1');
        }
        
        public function  novos() {
            $this->view('produtosNovos.phtml');
        }
    }
?>
