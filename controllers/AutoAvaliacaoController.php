<?php 

namespace Controller;

use Model\AutoAvaliacaoModel;
use Model\VO\DocumentosVO;

final class AutoAvaliacaoController extends Controller {
    
    public function list() {
        $model = new AutoAvaliacaoModel();
        $data = $model->selectAll();

        $this->loadView("listaAutoAvaliacao", [
            "autoAvaliacao" => $data
        ]);

    }

    public function get() {
        $id = $_GET['id'] ?? null;

        if (empty($id)) {
            $vo = new DocumentosVO();
        } else {
            $model = new AutoAvaliacaoModel();
            $vo = $model->selectOne(new DocumentosVO($id));
        }

        $this->loadView("formAutoAvaliacao", [
            "autoAvaliacao" => $vo
        ]);
    }

    public function save() {    
        $id = $_POST['id'];
        $vo = new DocumentosVO($_POST['id']);
        // Bloco de Upload do Arquivo
        if($_FILES['url']['error']) {
            echo "Ocorre um erro ao fazer o upload do arquivo";
        } else {
           $diretorio = "uploads/";
           // $nomeCompletoArquivo = $diretorio . $_FILES['arquivo']['name']; 
           $nomeArquivo = uniqid();
           $nomeArquivo .= ".";
           $nomeArquivo .= pathinfo($_FILES['url']['name'], PATHINFO_EXTENSION);
           $nomeCompletoArquivo = $diretorio . $nomeArquivo;
        
           $sucesso = move_uploaded_file($_FILES['url']['tmp_name'], $nomeCompletoArquivo);
           $vo->setUrl($nomeArquivo);
        }
        $model = new AutoAvaliacaoModel();
        
        if(empty($id)) {
            $return = $model->insert($vo);
        } else {
            $return = $model->update($vo);
        }

        $this->redirect("autoAvaliacoes.php");
        
    }

    public function remove() {
        if (empty($_GET['id'])) {
            die("Necessário passar o ID");
        }

        $model = new AutoAvaliacaoModel();
        $return = $model->delete(new DocumentosVO($_GET['id']));

        $this->redirect("autoAvaliacoes.php");

    }

}
