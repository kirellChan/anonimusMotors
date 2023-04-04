<?php

class Psupra{
    
    public $idconcessionaria;
    public $nome;
    public $sobrenome;
    public $telefone;
    public $celular;
    public $cpf;
    public $endereco;
    public $complemento;
    public $detalhes;
   

    /*métodos set*/
    
    function setIdconcessionaria($idconcessionaria) {
        $this->idconcessionaria = $idconcessionaria;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setDetalhes($detalhes) {
        $this->detalhes = $detalhes;
    }

    /*métodos get*/


    function getconsessionaria() {
        return $this->idconcessionaria;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getCelula() {
        return $this->celular;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getDetalhes() {
        return $this->detalhes;
    }

    
}

?>