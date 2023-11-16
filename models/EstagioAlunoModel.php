<?php

namespace Model;

use Model\VO\EstagioAlunoVO;
use Util\Database;

final class EstagioAlunoModel extends Model {
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select('SELECT * FROM estagio_aluno');

        $array = [];

        foreach ($data as $row) {
            $vo = new EstagioAlunoVO(
                $row['id'],
                $row['id_aluno'],
                $row['empresa_numero_convenio'],
                $row['carga_horaria'],
                $row['id_coordenador'],
                $row['tipo_processo_estagio'],
                $row['encaminhamentos'],
                $row['situacao_estagio'],
                $row['data_inicio'],
                $row['previsao_fim'],
                $row['id_orientador'],
                $row['id_coorientador'],
                $row['id_supervisor'],
                $row['data_fim'],
                $row['id_area'],
                $row['id_avaliacao_empresa'],
                $row['id_termo_compromisso'],
                $row['id_plano_atividades'],
                $row['id_autoavaliacao'],
                $row['id_tcc']
            );
            array_push($array, $vo);
        }

        return $array;
    }
    public function selectOne($vo = null) {
        $db = new Database();
        $query = 'SELECT * FROM estagioAluno WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0) return null;

        return new EstagioAlunoVO(
            $data['id'],
            $data['id_aluno'],
            $data['empresa_numero_convenio'],
            $data['carga_horaria'],
            $data['id_coordenador'],
            $data['tipo_processo_estagio'],
            $data['encaminhamentos'],
            $data['situacao_estagio'],
            $data['data_inicio'],
            $data['previsao_fim'],
            $data['id_orientador'],
            $data['id_coorientador'],
            $data['id_supervisor'],
            $data['data_fim'],
            $data['id_area'],
            $data['id_avaliacao_empresa'],
            $data['id_termo_compromisso'],
            $data['id_plano_atividades'],
            $data['id_autoavaliacao'],
            $data['id_tcc']
        );
    }

    public function insert($vo = null) {
        $db = new Database();
        $query = 'INSERT INTO estagio_aluno
        (id, id_aluno, empresa_numero_convenio, carga_horaria, id_coordenador, tipo_processo_estagio, encaminhamentos, situacao_estagio, data_inicio, previsao_fim, id_orientador, id_coorientador, id_supervisor, data_fim, id_area, id_avaliacao_empresa, id_termo_compromisso, id_plano_atividades, id_autoavaliacao, id_tcc) 
        VALUES 
        (:id, :id_aluno, :empresa_numero_convenio, :carga_horaria, :id_coordenador, :tipo_processo_estagio, :encaminhamentos, :situacao_estagio, :data_inicio, :previsao_fim, :id_orientador, :id_coorientador, :id_supervisor, :data_fim, id_area, :id_avaliacao_empresa, :id_termo_compromisso, :id_plano_atividades, :id_autoavaliacao, :id_tcc)';

        $binds = [
            ':id' =>   $vo->getId(),
            ':id_aluno' =>  $vo->getIdAluno(),
            ':empresa_numero_convenio' =>  $vo->getEmpresaNumeroConvenio(),
            ':carga_horaria' =>  $vo->getCargaHoraria(),
            ':id_coordenador' =>  $vo->getIdCoordenador(),
            ':tipo_processo_estagio' =>  $vo->getTipoProcessoEstagio(),
            ':encaminhamentos' =>  $vo->getEncaminhamentos(),
            ':situacao_estagio' =>  $vo->getSituacaoEstagio(),
            ':data_inicio' =>  $vo->getDataInicio(),
            ':previsao_fim' =>  $vo->getPrevisaoFim(),
            ':id_orientador' =>  $vo->getIdOrientador(),
            ':id_coorientador' =>  $vo->getIdCoorientador(),
            ':id_supervisor' =>  $vo->getIdSupervisor(),
            ':data_fim' =>  $vo->getDataFim(),
            ':id_area' =>  $vo->getIdArea(),
            ':id_avaliacao_empresa' =>  $vo->getIdAvaliacaoEmpresa(),
            ':id_termo_compromisso' =>  $vo->getIdTermoCompromisso(),
            ':id_plano_atividades' =>  $vo->getIdPlanoAtividades(),
            ':id_autoavaliacao' =>  $vo->getIdAutoavaliacao(),
            ':id_tcc' =>  $vo->getIdTCC()
        ];

        $success = $db->execute($query, $binds);

        return $success ? $db->getLastInsertedId() : null;
    }

    public function update($vo = null) {
        $db = new Database();

        $query = 'UPDATE estagio_aluno
                    SET id = :id
                    id_aluno  =  :id_aluno 
                    empresa_numero_convenio =  :empresa_numero_convenio
                    carga_horaria =  :carga_horaria
                    id_coordenador =  :id_coordenador
                    tipo_processo_estagio =  :tipo_processo_estagio
                    encaminhamentos =  :encaminhamentos
                    situacao_estagio =  :situacao_estagio
                    data_inicio =  :data_inicio
                    previsao_fim =  :previsao_fim
                    id_orientador =  :id_orientador
                    id_coorientador =  :id_coorientador
                    id_supervisor =  :id_supervisor
                    data_fim =  :data_fim
                    id_area =  :id_area
                    id_avaliacao_empresa =  :id_avaliacao_empresa
                    id_termo_compromisso =  :id_termo_compromisso
                    id_plano_atividades =  :id_plano_atividades
                    id_autoavaliacao =  :id_autoavaliacao
                    id_tcc =  :id_tcc
                    WHERE id = :id';

        $binds = [
            ':id' =>   $vo->getId(),
            ':id_aluno' =>  $vo->getIdAluno(),
            ':empresa_numero_convenio' =>  $vo->getEmpresaNumeroConvenio(),
            ':carga_horaria' =>  $vo->getCargaHoraria(),
            ':id_coordenador' =>  $vo->getIdCoordenador(),
            ':tipo_processo_estagio' =>  $vo->getTipoProcessoEstagio(),
            ':encaminhamentos' =>  $vo->getEncaminhamentos(),
            ':situacao_estagio' =>  $vo->getSituacaoEstagio(),
            ':data_inicio' =>  $vo->getDataInicio(),
            ':previsao_fim' =>  $vo->getPrevisaoFim(),
            ':id_orientador' =>  $vo->getIdOrientador(),
            ':id_coorientador' =>  $vo->getIdCoorientador(),
            ':id_supervisor' =>  $vo->getIdSupervisor(),
            ':data_fim' =>  $vo->getDataFim(),
            ':id_area' =>  $vo->getIdArea(),
            ':id_avaliacao_empresa' =>  $vo->getIdAvaliacaoEmpresa(),
            ':id_termo_compromisso' =>  $vo->getIdTermoCompromisso(),
            ':id_plano_atividades' =>  $vo->getIdPlanoAtividades(),
            ':id_autoavaliacao' =>  $vo->getIdAutoavaliacao(),
            ':id_tcc' =>  $vo->getIdTCC()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($vo = null) {
        $db = new Database();
        $query = 'DELETE FROM estagio_aluno WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }
}
