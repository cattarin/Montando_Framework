<?php
    class model {
        protected $db;
        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
        }
        
        public function insert($tabela, Array $dados) {
            foreach ($dados as $inds => $vals) {
                $campos[] = $inds;
                $valores[] = $vals;
            }
            $campos = implode(', ', $campos);
            $valores = "'".implode("','", $valores)."'";
           
            /* acontece isso sem contatenar o valores
             valor 1
             valor 2
             valor 3
             
             valor 1','valor2','valor3  
             */
            
            return $this->db->query("INSERT INTO `{$tabela}` ({$campos}) VALUES ({$valores})");
        }
        
        public function read($tabela, $where = NULL) {
            $where = ($where != null ? "WHERE {$where}" : "");
            $q = $this->db->query("SELECT * FROM `{$tabela}` {$where}");
            $q->setFetchMode(PDO::FETCH_ASSOC);
            return $q->fetchAll();
        }
        
        public function update($tabela, Array $dados, $where) {
            $sql = "UPDATE tabela SET nome = 'novo nome' WHERE id = 1";
            foreach ($dados as $ind => $val) {
                $campos[] = "{$ind} = '{$val}'";
            }
        $campos = implode(", ", $campos);
        return $this->db->query("UPDATE `{$tabela}` SET {$campos} WHERE {$where} ");
        }
        
        public function delete($tabela, $where) {
            return $this->db->query("DELETE FROM `{$tabela}` WHERE {$where}");
        }
        
    }

?>
