<?php

namespace Model\VO;

final class ProfessorVO extends VO {
    private $nome;
    private $email;
    private $idArea;

    public function __construct($id = 0, $nome = '', $email = '', $idArea = '') {
        parent::__construct($id);
        $this->nome = $nome;
        $this->email = $email;
        $this->idArea = $idArea;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getIdArea() {
        return $this->idArea;
    }

    public function setIdArea($idArea) {
        $this->idArea = $idArea;
    }
}