<?php 

namespace Controller;

use Model\AvaliacaoEmpresaModel;
use Model\VO\DocumentosVO;

final class AvaliacaoEmpresaController extends Controller {
    
    public function list() {
        $model = new AvaliacaoEmpresaModel();
        $data = $model->selectAll();

        $this->loadView("listaAvaliacaoEmpresa", [
            "avaliacaoEmpresa" => $data
        ]);

    }

    public function get() {
        $id = $_GET['id'] ?? null;

        if (empty($id)) {
            $vo = new DocumentosVO();
        } else {
            $model = new AvaliacaoEmpresaModel();
            $vo = $model->selectOne(new DocumentosVO($id));
        }

        $this->loadView("formAvaliacaoEmpresa", [
            "avaliacaoEmpresa" => $vo
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
        $model = new AvaliacaoEmpresaModel();
        
        if(empty($id)) {
            $return = $model->insert($vo);
        } else {
            $return = $model->update($vo);
        }

        $this->redirect("AvaliacaoEmpresas.php");
        
    }

    public function remove() {
        if (empty($_GET['id'])) {
            die("Necessário passar o ID");
        }

        $model = new AvaliacaoEmpresaModel();
        $return = $model->delete(new DocumentosVO($_GET['id']));

        $this->redirect("AvaliacaoEmpresas.php");

    }

}
