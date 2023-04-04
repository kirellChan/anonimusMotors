<?php

class Cliente{
    
    public $idCliente;
    public $nomeCliente;
    public $email;
    public $senha;
    public $cpf;
    public $endereco;
    public $nacionalidade;
    public $cep;
    public $sexo;
    public $rendaAnual;
   

    /*métodos set*/
    
    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNomeCliente($nomeCliente) {
        $this->nomeCliente = $nomeCliente;
    }

    function setCpfCliente($email) {
        $this->email = $email;
    }

    function setEmailCliente($senha) {
        $this->senha = $senha;
    }

    function setTelefone($cpf) {
        $this->cpf = $cpf;
    }

    function setSexo($endereco) {
        $this->endereco = $endereco;
    }

    function setSenha($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setLogradouro($cep) {
        $this->cep = $cep;
    }

    function setNumero($sexo) {
        $this->sexo = $sexo;
    }

    function setBairro($rendaAnual) {
        $this->rendaAnual = $rendaAnual;
    }

    /*métodos get*/


    function getIdCliente() {
        return $this->idCliente;
    }

    function getNomeCliente() {
        return $this->nomeCliente;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getCep() {
        return $this->cep;
    }

    function sexo() {
        return $this->sexo;
    }

    function getRendaAnual() {
        return $this->rendaAnual;
    }
    
}

?>