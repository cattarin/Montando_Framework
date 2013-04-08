<?php
    class Index extends Controller {
        public function  index_action() {
            $receitas = new receitasModel();
            $receitas->listaReceitas('1');
            $receitas_destaque = $receitas->listaReceitas('1');
            $receitas_lista = $receitas->listaReceitas('4', '1');  // gera 4 listas e pula o 1 indice
            
            $blog = new blogModel();
            $blog_lista = $blog->ultimosArtigos();
            
            $eventos = new eventosModel();
            $eventos_lista = $eventos->ultimosEventos();
            
            $datas['receitas_destaque'] = $receitas_destaque;
            $datas['receitas_lista'] = $receitas_lista;
            $datas['blog_lista'] = $blog_lista;
            $datas['eventos_lista'] = $eventos_lista;
            
            
            $this->view('index', $datas);
        }
    }
?>
