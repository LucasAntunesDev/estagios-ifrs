<?php

namespace Model\VO;

final class SupervisorVO extends VO {
    private $nome;
    private $telefone;
    private $email;
    private $empresa_numero_convenio;
    private $cargo;

    public function __construct($id = 0, $nome = '', $telefone = '', $email = '', $empresa_numero_convenio = '' , $cargo = '') {
        parent::__construct($id);
        $this->nome = $nome;
        $this->telefone = $telefone;  
        $this->email = $email;
        $this->empresa_numero_convenio = $empresa_numero_convenio;
        $this->cargo = $cargo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    
    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmpresa_numero_convenio() {
        return $this->empresa_numero_convenio;
    }

    public function setEmpresa_numero_convenio($empresa_numero_convenio) {
        $this->empresa_numero_convenio= $empresa_numero_convenio;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }
}