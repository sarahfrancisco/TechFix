<?php

    class Atendimento{
        private $id_atendimento;
        private $servico;
        private $fk_cliente;
        private $fk_equipamento;

        public function getIdAtendimento(){
            return $this->id_atendimento;
        }

        public function setIdAtendimento($id_atendimento){
            $this->id_atendimento = $id_atendimento;
        }

        public function getServico(){
            return $this->servico;
        }

        public function setServico($servico){
            $this->servico = $servico;
        }

        public function getFkCliente(){
            return $this->fk_cliente;
        }

        public function setFkCliente($fk_cliente){
            $this->fk_cliente = $fk_cliente;
        }

        public function getFkEquipamento(){
            return $this->fk_equipamento;
        }

        public function setFkEquipamento($fk_equipamento){
            $this->fk_equipamento = $fk_equipamento;
        }
    }
?>
