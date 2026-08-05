<?php
    class Conexao{
        private $servidor = "localhost";
        private $usuario = "root";
        private $senha = "";
        private $banco = "techfix";

        private $conexao;

        public function EstabelecerConexao(){
            return  mysqli_connect($this->servidor, $this->usuario,$this->senha, $this->banco);
        }

        public function getConexao(){
            $this->conexao=$this->EstabelecerConexao();

             if($this->conexao){
                //echo "CONEXAO ESTABELECIDA ";
             
            
             return $this->conexao;
            }
        }
           
    }
?>