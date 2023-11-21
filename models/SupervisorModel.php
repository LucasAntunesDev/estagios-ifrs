<?php

namespace Model;

use Model\VO\SupervisorVO;
use Util\Database;

final class SupervisorModel extends Model {
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select('SELECT * FROM supervisor');

        $array = [];

        foreach ($data as $row) {
            $vo = new SupervisorVO(
                $row['id'],
                $row['nome'],
                $row['telefone'],
                $row['email'],
                $row['empresa_numero_convenio'],
                $row['cargo']
            );
            array_push($array, $vo);
        }

        return $array;
    }
    public function selectOne($vo = null) {
        $db = new Database();
        $query = 'SELECT * FROM supervisor WHERE id = :id';
        $binds = [':id' => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) === 0) return null;

        return new SupervisorVO(
            $data[0]['id'],
            $data[0]['nome'],
            $data[0]['telefone'],
            $data[0]['email'],
            $data[0]['empresa_numero_convenio'],
            $data[0]['cargo']
        );
    }

    public function insert($vo = null) {
        $db = new Database();
        $query = 'INSERT INTO supervisor (nome, telefone, email, empresa_numero_convenio, cargo) VALUES ( :nome, :telefone, :email, :empresa_numero_convenio, :cargo)';

        $binds = [
            ':nome' => $vo->getNome(),
            ':telefone' => $vo->getTelefone(),
            ':email' => $vo->getEmail(),
            ':empresa_numero_convenio' => $vo->getEmpresa_numero_convenio(),
            ':cargo' => $vo->getCargo()
        ];

        $success = $db->execute($query, $binds);

        return $success ? $db->getLastInsertedId() : null;
    }

    public function update($vo = null) {
        $db = new Database();

        $query = 'UPDATE Supervisor
                    SET  
                    nome = :nome,
                    telefone = :telefone,
                    email = :email,
                    empresa_numero_convenio = :empresa_numero_convenio,
                    cargo = :cargo
                    WHERE id = :id';

        $binds = [
            ':nome' => $vo->getNome(),
            ':telefone' => $vo->Telefone(),
            ':email' => $vo->getEmail(),
            ':empresa_numero_convenio' => $vo->getEmpresa_numero_convenio(),
            ':cargo' => $vo->getCargo(),
            ':id' => $vo->getId()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($vo = null) {
        $db = new Database();
        $query = 'DELETE FROM supervisor WHERE id = :id';
        $binds = [':id' => $vo->getId()];

        return $db->execute($query, $binds);
    }
}
