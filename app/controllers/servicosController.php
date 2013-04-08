<?php
    class Servicos extends Controller {
        public function index_action() {
            $receitas = new receitasModel();
            $receitas_lista = $receitas->listaReceitas('4');  // gera 4 listas
            
            $datas['receitas_lista'] = $receitas_lista;
            
            $this->view('servicos', $datas);
        }
    }
?>
