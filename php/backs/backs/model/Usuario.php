<?php
    class Usuario{
        public $idUsuario;
        public $nomeUsuario;
        public $loginUsuario;
        public $senha;

        //métodos set e get

        function setidUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }
        function setnomeUsuario($nomeUsuario){
            $this->nomeUsuario = $nomeUsuario;
        }
        function setloginUsuario($loginUsuario){
            $this->loginUsuario = $loginUsuario;
        }
        function setsenha($senha){
            $this->senha = $senha;
        }
        function getIdUsuario() {
            return $this->idUsuario;
        }
        function getnomeUsuario(){
            return $this->nomeUsuario;
        }
        function getloginUsuario(){
            return $this->loginUsuario;
        }
        function getsenha(){
            return $this->senha;
        }
    }
?>