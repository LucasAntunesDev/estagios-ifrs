<?php

namespace Model;

use Model\VO\EmpresaVO;
use Util\Database;

final class EmpresaModel extends Model {
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select('SELECT * FROM empresa');

        $array = [];

        foreach ($data as $row) {
            $vo = new EmpresaVO(
                $row['id'],
                $row['nome'],
                $row['endereco'],
                $row['telefone'],
                $row['email'],
                $row['cnpj'],
                $row['id_cidade']
            );
            array_push($array, $vo);
        }

        return $array;
    }
    public function selectOne($vo = null) {
        $db = new Database();
        $query = 'SELECT * FROM empresa WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0) return null;

        return new EmpresaVO(
            $data[0]['id'],
            $data[0]['nome'],
            $data[0]['endereco'],
            $data[0]['telefone'],
            $data[0]['email'],
            $data[0]['cnpj'],
            $data[0]['id_cidade']
        );
    }

    public function insert($vo = null) {
        $db = new Database();
        $query = 'INSERT INTO empresa
        (id, nome, endereco, telefone, email, cnpj, id_cidade)
        VALUES 
        (:id, :nome, :endereco, :telefone, :email,: cnpj, :id_cidade)';

        $binds = [
            ':matricula' => $vo->getMatricula(),
            ':nome' => $vo->getNome(),
            ':endereco' => $vo->getEndereco(),
            ':telefone' => $vo->getTelefone(),
            ':email' => $vo->getEmail(),
            ':cnpj' => $vo->getCNPJ(),
            ':id_cidade' => $vo->getIdCiade()
        ];

        $success = $db->execute($query, $binds);

        return $success ? $db->getLastInsertedId() : null;
    }

    public function update($vo = null) {
        $db = new Database();

        $query = 'UPDATE empresa
                    SET  
                    id = :id, 
                    nome = :nome, 
                    endereco = :endereco, 
                    telefone = :telefone, 
                    email = :email, 
                    cnpj = :cnpj, 
                    id_cidade = :id_cidade
                    WHERE id = :id';

        $binds = [
            ':matricula' => $vo->getMatricula(),
            ':id' => $vo->getId(),
            ':nome' => $vo->getNome(),
            ':endereco' => $vo->getEndereco(),
            ':telefone' => $vo->getTelefone(),
            ':email' => $vo->getEmail(),
            ':cnpj' => $vo->getCNPJ(),
            ':id_cidade' => $vo->getIdCiade()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($vo = null) {
        $db = new Database();
        $query = 'DELETE FROM empresa WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }
}
