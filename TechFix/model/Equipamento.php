<?php

    class Equipamento{
        private $id_equipamento;
        private $nome_equipamento;
        private $estado;
        private $fk_cliente;

        public function getIdEquipamento(){
            return $this->id_equipamento;
        }

        public function setIdEquipamento($id_equipamento){
            $this->id_equipamento = $id_equipamento;
        }

        public function getNomeEquipamento(){
            return $this->nome_equipamento;
        }

        public function setNomeEquipamento($nome_equipamento){
            $this->nome_equipamento = $nome_equipamento;
        }

        public function setEquipamento($nome_equipamento){
            $this->nome_equipamento = $nome_equipamento;
        }

        public function getEstado(){
            return $this->estado;
        }

        public function setEstado($estado){
            $this->estado = $estado;
        }

        public function getCliente(){
            return $this->fk_cliente;
        }

        public function getFkCliente(){
            return $this->fk_cliente;
        }

        public function setCliente($fk_cliente){
            $this->fk_cliente = $fk_cliente;
        }

        public function setFkCliente($fk_cliente){
            $this->fk_cliente = $fk_cliente;
        }
    }
?>