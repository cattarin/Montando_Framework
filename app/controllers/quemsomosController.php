<?php
    class Quemsomos extends Controller {
        public function index_action() {
            $receitas = new receitasModel();
            $receitas_lista = $receitas->listaReceitas('4');  // gera 4 listas
            
            $datas['receitas_lista'] = $receitas_lista;
            
            $this->view('quemsomos', $datas);
        }
    }
?>
