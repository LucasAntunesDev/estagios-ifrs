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
                $row['id_empresa'],
                $row['carga_horaria'],
                $row['id_coordenador'],
                $row['tipo_processo_estagio'],
                $row['numero_encaminhamentos'],
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
        $query = 'SELECT * FROM estagio_aluno WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0) return null;

        return new EstagioAlunoVO(
            $data[0]['id'],
            $data[0]['id_aluno'],
            $data[0]['id_empresa'],
            $data[0]['carga_horaria'],
            $data[0]['id_coordenador'],
            $data[0]['tipo_processo_estagio'],
            $data[0]['numero_encaminhamentos'],
            $data[0]['situacao_estagio'],
            $data[0]['data_inicio'],
            $data[0]['previsao_fim'],
            $data[0]['id_orientador'],
            $data[0]['id_coorientador'],
            $data[0]['id_supervisor'],
            $data[0]['data_fim'],
            $data[0]['id_area'],
            $data[0]['id_avaliacao_empresa'],
            $data[0]['id_termo_compromisso'],
            $data[0]['id_plano_atividades'],
            $data[0]['id_autoavaliacao'],
            $data[0]['id_tcc']
        );
    }

    public function insert($vo = null) {
        $db = new Database();
        $query = 'INSERT INTO estagio_aluno
        (id,
        id_aluno,
        id_empresa,
        carga_horaria,
        id_coordenador,
        tipo_processo_estagio,
        numero_encaminhamentos,
        situacao_estagio,
        data_inicio,
        previsao_fim,
        id_orientador,
        id_coorientador,
        id_supervisor,
        data_fim,
        id_area,
        id_avaliacao_empresa,
        id_termo_compromisso,
        id_plano_atividades,
        id_autoavaliacao,
        id_tcc)
        VALUES 
        (:id,
        :id_aluno,
        :id_empresa,
        :carga_horaria,
        :id_coordenador,
        :tipo_processo_estagio,
        :numero_encaminhamentos,
        :situacao_estagio,
        :data_inicio,
        :previsao_fim,
        :id_orientador,
        :id_coorientador,
        :id_supervisor,
        :data_fim,
        :id_area,
        :id_avaliacao_empresa,
        :id_termo_compromisso,
        :id_plano_atividades,
        :id_autoavaliacao,
        :id_tcc)';

        $binds = [
            ':id' =>   $vo->getId(),
            ':id_aluno' =>  $vo->getIdAluno(),
            ':id_empresa' =>  $vo->getIdEmpresa(),
            ':carga_horaria' =>  $vo->getCargaHoraria(),
            ':id_coordenador' =>  $vo->getIdCoordenador(),
            ':tipo_processo_estagio' =>  $vo->getTipoProcessoEstagio(),
            ':numero_encaminhamentos' =>  $vo->getNumeroEncaminhamentos(),
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
                    id_empresa =  :id_empresa
                    carga_horaria =  :carga_horaria
                    id_coordenador =  :id_coordenador
                    tipo_processo_estagio =  :tipo_processo_estagio
                    numero_encaminhamentos =  :numero_encaminhamentos
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
            ':id_empresa' =>  $vo->getIdEmpresa(),
            ':carga_horaria' =>  $vo->getCargaHoraria(),
            ':id_coordenador' =>  $vo->getIdCoordenador(),
            ':tipo_processo_estagio' =>  $vo->getTipoProcessoEstagio(),
            ':numero_encaminhamentos' =>  $vo->getNumeroEncaminhamentos(),
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
