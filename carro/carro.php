<?php
    class Carro{
        private $nome;
        private $marca;
        private $ano;
        private $modelo;

            public function getNome(){
                return $this->nome;
            }

            public function setNome($nome){
                $this->nome = $nome;
            }

            public function getMarca(){
                return $this->marca;
            }

            public function setMarca($marca){
                $this->marca = $marca;
            }

            public function getAno(){
                return $this->ano;
            }

            public function setAno($ano){
                $this->ano = $ano;
            }

            public function getModelo(){
                return $this->modelo;
            }

            public function setModelo($modelo){
                $this->modelo = $modelo;
            }

    }
?>