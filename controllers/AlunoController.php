<?php

namespace Controller;

use Embed\Http\Redirects;
use Model\AlunoModel;
use Model\VO\AlunoVO;


final class AlunoController extends Controller {
    public function list() {
        $model  = new AlunoModel();
        $data = $model->selectAll();

        $this->loadView('listaAlunos', [
            'alunos' => $data
        ]);
    }

    //monta o formulário
    public function get() {
        $id = $_GET['id_aluno'] ?? null; #>= php 8
        $id = (isset($_GET['id_aluno'])) ? $_GET['id_aluno'] : null; # < php 8

        if (empty($id)) {
            $vo = new AlunoVO();
        } else {
            $model = new AlunoModel();
            $vo = $model->selectOne(new AlunoVO($id));
        }

        $this->loadView('formAluno', ['aluno' => $vo]);
    }

    public function save() {
        $id = $_POST['id_aluno'];
        $vo = new AlunoVO(
            $_POST['matricula'],
            $_POST['id_aluno'],
            $_POST['nome'],
            $_POST['data_nascimento'],
            $_POST['email'],
            $_POST['cpf'],
            $_POST['rg'],
            $_POST['endereco'],
            $_POST['telefone'],
            $_POST['turma'],
            $_POST['id_cidade'],
            $_POST['id_curso'],
        );
        $model = new AlunoModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('alunos.php');
    }

    public function remove() {
        if (empty($_GET['id_aluno'])) die('Necessário passar o ID');

        $model = new AlunoModel();

        $return = $model->delete(new AlunoVO($_GET['id_aluno']));

        $this->redirect('alunos.php');
    }
}
