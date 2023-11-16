<?php 

namespace Controller;

use Model\TermoCompromissoModel;
use Model\VO\DocumentosVO;

final class TermoCompromissoController extends Controller {
    
    public function list() {
        $model = new TermoCompromissoModel();
        $data = $model->selectAll();

        $this->loadView("listaTermoCompromisso", [
            "termoCompromisso" => $data
        ]);

    }

    public function get() {
        $id = $_GET['id'] ?? null;

        if (empty($id)) {
            $vo = new DocumentosVO();
        } else {
            $model = new TermoCompromissoModel();
            $vo = $model->selectOne(new DocumentosVO($id));
        }

        $this->loadView("formTermoCompromisso", [
            "termoCompromisso" => $vo
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
        $model = new TermoCompromissoModel();
        
        if(empty($id)) {
            $return = $model->insert($vo);
        } else {
            $return = $model->update($vo);
        }

        $this->redirect("TermoCompromissos.php");
        
    }

    public function remove() {
        if (empty($_GET['id'])) {
            die("Necessário passar o ID");
        }

        $model = new TermoCompromissoModel();
        $return = $model->delete(new DocumentosVO($_GET['id']));

        $this->redirect("TermoCompromissos.php");

    }

}
