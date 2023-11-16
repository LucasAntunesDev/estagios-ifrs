<?php

namespace Model\VO;

final class EstagioAlunoVO extends VO {
    private $id_aluno;
    private $empresa_numero_convenio;
    private $carga_horaria;
    private $id_coordenador;
    private $tipo_processo_estagio;
    private $encaminhamentos;
    private $situacao_estagio;
    private $data_inicio;
    private $previsao_fim;
    private $id_orientador;
    private $id_coorientador;
    private $id_supervisor;
    private $data_fim;
    private $id_area;
    private $id_avaliacao_empresa;
    private $id_termo_compromisso;
    private $id_plano_atividades;
    private $id_autoavaliacao;
    private $id_tcc;

    public function __construct(
        $id = 0,
        $id_aluno = 0,
        $empresa_numero_convenio = 0,
        $carga_horaria = 220,
        $id_coordenador = 0,
        $tipo_processo_estagio = '',
        $encaminhamentos = 0,
        $situacao_estagio = '',
        $data_inicio = '',
        $previsao_fim = '',
        $id_orientador = 0,
        $id_coorientador = 0,
        $id_supervisor = 0,
        $data_fim = '',
        $id_area = 0,
        $id_avaliacao_empresa = '',
        $id_termo_compromisso = '',
        $id_plano_atividades = '',
        $id_autoavaliacao = '',
        $id_tcc = ''
    ) {
        parent::__construct($id);
        $this->id_aluno = $id_aluno;
        $this->empresa_numero_convenio = $empresa_numero_convenio;
        $this->carga_horaria = $carga_horaria;
        $this->id_coordenador = $id_coordenador;
        $this->tipo_processo_estagio = $tipo_processo_estagio;
        $this->encaminhamentos = $encaminhamentos;
        $this->situacao_estagio = $situacao_estagio;
        $this->data_inicio = $data_inicio;
        $this->previsao_fim = $previsao_fim;
        $this->id_orientador = $id_orientador;
        $this->id_coorientador = $id_coorientador;
        $this->id_supervisor = $id_supervisor;
        $this->data_fim = $data_fim;
        $this->id_area = $id_area;
        $this->id_avaliacao_empresa = $id_avaliacao_empresa;
        $this->id_termo_compromisso = $id_termo_compromisso;
        $this->id_plano_atividades = $id_plano_atividades;
        $this->id_autoavaliacao = $id_autoavaliacao;
        $this->id_tcc = $id_tcc;
    }

    // public function getId() {
    //     return $this->id;
    // }

    // public function setId($id) {
    //     $this->id = $id;
    // }

    public function getIdAluno() {
        return $this->id_aluno;
    }

    public function setIdAluno($id_aluno) {
        $this->id_aluno = $id_aluno;
    }

    public function getEmpresaNumeroConvenio() {
        return $this->empresa_numero_convenio;
    }

    public function setEmpresaNumeroConvenio($empresa_numero_convenio) {
        $this->empresa_numero_convenio = $empresa_numero_convenio;
    }

    public function getCargaHoraria() {
        return $this->carga_horaria;
    }

    public function setCargaHoraria($carga_horaria) {
        $this->carga_horaria = $carga_horaria;
    }

    public function getIdCoordenador() {
        return $this->id_coordenador;
    }

    public function setIdCoordenador($id_coordenador) {
        $this->id_coordenador = $id_coordenador;
    }

    public function getTipoProcessoEstagio() {
        return $this->tipo_processo_estagio;
    }

    public function setTipoProcessoEstagio($tipo_processo_estagio) {
        $this->$tipo_processo_estagio = $tipo_processo_estagio;
    }

    public function getEncaminhamentos() {
        return $this->empresa_numero_convenio;
    }

    public function setEncaminhamentos($encaminhamentos) {
        $this->encaminhamentos = $encaminhamentos;
    }

    public function getSituacaoEstagio() {
        return $this->encaminhamentos;
    }

    public function setSituacaoEstagio($situacao_estagio) {
        $this->situacao_estagio = $situacao_estagio;
    }

    public function getDataInicio() {
        return $this->situacao_estagio;
    }

    public function setDataInicio($data_fim) {
        $this->data_fim = $data_fim;
    }

    public function getPrevisaoFim() {
        return $this->data_fim;
    }

    public function setPrevisaoFim($previsao_fim) {
        $this->previsao_fim = $previsao_fim;
    }

    public function getIdOrientador() {
        return $this->previsao_fim;
    }

    public function setIdOrientador($id_orientador) {
        $this->id_orientador = $id_orientador;
    }

    public function getIdCoorientador() {
        return $this->id_orientador;
    }

    public function setIdCoorientador($id_coorientador) {
        $this->id_coorientador = $id_coorientador;
    }

    public function getIdSupervisor() {
        return $this->id_coorientador;
    }

    public function setIdSupervisor($id_supervisor) {
        $this->id_supervisor = $id_supervisor;
    }

    public function getDataFim() {
        return $this->data_fim;
    }

    public function setDataFim($data_fim) {
        $this->data_fim = $data_fim;
    }

    public function getIdArea() {
        return $this->id_area;
    }

    public function setIdArea($id_area) {
        $this->id_area = $id_area;
    }

    public function getIdAvaliacaoEmpresa() {
        return $this->id_avaliacao_empresa;
    }

    public function setIdAvaliacaoEmpresa($id_avaliacao_empresa) {
        $this->id_avaliacao_empresa = $id_avaliacao_empresa;
    }

    public function getIdTermoCompromisso() {
        return $this->id_termo_compromisso;
    }

    public function setIdTermoCompromisso($id_termo_compromisso) {
        $this->id_termo_compromisso = $id_termo_compromisso;
    }

    public function getIdPlanoAtividades() {
        return $this->id_plano_atividades;
    }

    public function setIdPlanoAtividades($id_plano_atividades) {
        $this->id_plano_atividades = $id_plano_atividades;
    }

    public function getIdAutoavaliacao() {
        return $this->id_autoavaliacao;
    }

    public function setIdAutoavaliacao($id_autoavaliacao) {
        $this->id_autoavaliacao = $id_autoavaliacao;
    }

    public function getIdTCC() {
        return $this->id_tcc;
    }

    public function setIdTCC($id_tcc) {
        $this->id_tcc = $id_tcc;
    }
}
