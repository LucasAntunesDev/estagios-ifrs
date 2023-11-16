<?php

namespace Controller;

use Embed\Http\Redirects;
use Model\EstagioAlunoModel;
use Model\VO\EstagioAlunoVO;

#id	
#id_aluno	
#empresa_numero_convenio	
#carga_horaria	
#id_coordenador	
#tipo_processo_estagio	
#encaminhamentos	
#situacao_estagio	
#data_inicio	
#previsao_fim	
#id_orientador	
#id_coorientador	
#id_supervisor	
#data_fim	
#id_area	
#id_avaliacao_empresa	
#id_termo_compromisso	
#id_plano_atividades	
#id_autoavaliacao	
#id_tcc

final class EstagioAlunoController extends Controller {
    public function list() {
        $model  = new EstagioAlunoModel();
        $data = $model->selectAll();

        $this->loadView('listaEstagiosAlunos', [
            'estagiosAlunos' => $data
        ]);
    }

    public function get() {
        $id = $_GET['id_estagioAluno'] ?? null; #>= php 8
        $id = (isset($_GET['id_estagioAluno'])) ? $_GET['id_estagioAluno'] : null; # < php 8

        if (empty($id)) {
            $vo = new EstagioAlunoVO();
        } else {
            $model = new EstagioAlunoModel();
            $vo = $model->selectOne(new EstagioAlunoVO($id));
        }

        $this->loadView('formEstagioAluno', ['estagioAluno' => $vo]);
    }

    public function save() {
        $id = $_POST['id'];
        $vo = new EstagioAlunoVO(
            $_POST['id'],
            $_POST['id_aluno'],
            $_POST['empresa_numero_convenio'],
            $_POST['carga_horaria'],
            $_POST['id_coordenador'],
            $_POST['tipo_processo_estagio'],
            $_POST['encaminhamentos'],
            $_POST['situacao_estagio'],
            $_POST['data_inicio'],
            $_POST['previsao_fim'],
            $_POST['id_orientador'],
            $_POST['id_coorientador'],
            $_POST['id_supervisor'],
            $_POST['data_fim'],
            $_POST['id_area'],
            $_POST['id_avaliacao_empresa'],
            $_POST['id_termo_compromisso'],
            $_POST['id_plano_atividades'],
            $_POST['id_autoavaliacao'],
            $_POST['id_tcc'],
        );
        $model = new EstagioAlunoModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('estagioAlunos.php');
    }

    public function remove() {
        if (empty($_GET['id_estagioAluno'])) die('Necessário passar o ID');

        $model = new EstagioAlunoModel();

        $return = $model->delete(new EstagioAlunoVO($_GET['id_estagio_aluno']));

        $this->redirect('estagioAlunos.php');
    }
}
