<?php
namespace Model\VO;

final class CursoVO extends VO {
    private $nome;
    private $id_coordenador;

    public function __construct($id = 0, $nome = '',$id_coordenador = 0) {
        parent::__construct($id);
        $this->nome = $nome;
        $this->id_coordenador = $id_coordenador;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdCoordenador() {
        return $this->id_coordenador;
    }

    public function setIdCoordenador($id_coordenador) {
        $this->id_coordenador = $id_coordenador;
    }

}
