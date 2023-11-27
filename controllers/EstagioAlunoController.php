<?php

namespace Controller;

use Embed\Http\Redirects;
use Model\EstagioAlunoModel;
use Model\VO\EstagioAlunoVO;
use Model\AlunoModel;
use Model\EmpresaModel;
use Model\SupervisorModel;
use Model\ProfessorModel;
use Model\AreaModel;

final class EstagioAlunoController extends Controller
{
    public function list()
    {
        $model = new EstagioAlunoModel();
        $data = $model->selectAll();

        $this->loadView('listaEstagiosAlunos', [
            'estagiosAlunos' => $data
        ]);
    }

    public function get()
    {
        $id = $_GET['id'] ?? null;

        if (empty($id)) {
            $vo = new EstagioAlunoVO();
        } else {
            $model = new EstagioAlunoModel();
            $vo = $model->selectOne(new EstagioAlunoVO($id));
        }

        $model= new AlunoModel();
        $alunos = $model->selectAll();

        $model= new EmpresaModel();
        $empresas = $model->selectAll();
        
        $model= new SupervisorModel();
        $supervisores = $model->selectAll();
        
        $model= new ProfessorModel();
        $coordenadores = $model->selectAll();
        
        $model= new ProfessorModel();
        $orientadores = $model->selectAll();
        
        $model= new ProfessorModel();
        $coorientadores = $model->selectAll();
        
        $model= new AlunoModel();
        $alunos_sem_estagio = $model->selectSemEstagio();
        
        $model= new AreaModel();
        $areas = $model->selectAll();

        $this->loadView('formEstagioAluno', [
            'estagioAluno' => $vo,
            'alunos' => $alunos,
            'empresas' => $empresas,
            'coordenadores' => $coordenadores,
            'orientadores' => $orientadores,
            'coorientadores' => $coorientadores,
            'supervisores' => $supervisores,
            'alunosSemEstagio' => $alunos_sem_estagio,
            'areas' => $areas
        ]);
    }

    public function save()
    {
        $id = $_POST['id'];
        $vo = new EstagioAlunoVO(
            $_POST['id'],
            $_POST['id_aluno'],
            $_POST['id_empresa'],
            $_POST['carga_horaria'],
            $_POST['id_coordenador'],
            $_POST['tipo_processo_estagio'],
            $_POST['numero_encaminhamentos'],
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

        $this->redirect('estagiosAlunos.php');
    }

    public function remove()
    {
        if (empty($_GET['id']))
            die('Necessário passar o ID');

        $model = new EstagioAlunoModel();

        $return = $model->delete(new EstagioAlunoVO($_GET['id_estagio_aluno']));

        $this->redirect('estagiosAlunos.php');
    }
}
