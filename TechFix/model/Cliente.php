<?php

    class Cliente{  
        private $id_cliente;
        private $nome;
        private $telefone;

        public function getIdCliente(){
            return $this->id_cliente;
        }

        public function setIdCliente($id_cliente){
            $this->id_cliente = $id_cliente;
        }

        
        public function getNomeCliente(){
            return $this->nome;
        }

        public function setNomeCliente($nome){
            $this->nome = $nome;
        }

        
        public function getTelefone(){
            return $this->telefone;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
    }
?>