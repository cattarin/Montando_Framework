<?php
    class model {
        protected $db;
        public $_tabela;
        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;dbname=sucosjuices', 'root', '');
        }
        
        public function insert( Array $dados) {
            $campos = implode(", ", array_keys($dados));
            $valores = "'".implode("','", array_values($dados))."'";
           
            /* acontece isso sem contatenar o valores
             valor 1
             valor 2
             valor 3
             
             valor 1','valor2','valor3  
             */
            
            return $this->db->query("INSERT INTO `{$this->_tabela}` ({$campos}) VALUES ({$valores})");
        }
        
        public function read( $where = NULL, $limit = null, $offset = null, $orderby = null) {
            $where = ($where != null ? "WHERE {$where}" : "");
            $limit = ($limit != null ? "LIMIT {$limit}" : "");
            $offset = ($offset != null ? "OFFSET {$offset}" : "");
            $orderby = ($orderby != null ? "ORDER BY {$orderby}" : "");
            $q = $this->db->query("SELECT * FROM `{$this->_tabela}` {$where} {$orderby} {$limit} {$offset}");
            $q->setFetchMode(PDO::FETCH_ASSOC);
            return $q->fetchAll();
        }
        
        public function update( Array $dados, $where) {
            $sql = "UPDATE tabela SET nome = 'novo nome' WHERE id = 1";
            foreach ($dados as $ind => $val) {
                $campos[] = "{$ind} = '{$val}'";
            }
        $campos = implode(", ", $campos);
        return $this->db->query("UPDATE `{$this->_tabela}` SET {$campos} WHERE {$where} ");
        }
        
        public function delete( $where) {
            return $this->db->query("DELETE FROM `{$this->_tabela}` WHERE {$where}");
        }
        
    }

?>
