<?php

namespace Controller;

use Embed\Http\Redirects;
use Model\SupervisorModel;
use Model\VO\SupervisorVO;


final class SupervisorController extends Controller {
    public function list() {
        $model  = new SupervisorModel();
        $data = $model->selectAll();

        $this->loadView('listaSupervisor', [
            'supervisores' => $data
        ]);
    }

    public function get() {
        $id = $_GET['id'] ?? null; #>= php 8
        $id = (isset($_GET['id'])) ? $_GET['id'] : null; # < php 8

        if (empty($id)) {
            $vo = new SupervisorVO();
        } else {
            $model = new SupervisorModel();
            $vo = $model->selectOne(new SupervisorVO($id));
        }

        $this->loadView('formSupervisor', ['supervisor' => $vo]);
    }

    public function save() {
        $id = $_POST['id'];
        $vo = new SupervisorVO(
            $_POST['id'],
            $_POST['nome'],
            $_POST['telefone'],
            $_POST['email'],
            $_POST['empresa_numero_convenio'],
            $_POST['cargo']
        );
        $model = new SupervisorModel();

        $return = empty($id) ? $model->insert($vo) : $model->update($vo);

        $this->redirect('supervisores.php');
    }

    public function remove() {
        if (empty($_GET['id'])) die('Necessário passar o ID');

        $model = new SupervisorModel();

        $return = $model->delete(new SupervisorVO($_GET['id']));

        $this->redirect('supervisores.php');
    }
}
