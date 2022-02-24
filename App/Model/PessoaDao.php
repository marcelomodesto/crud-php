<?php

namespace App\Model;

use App\Model\Pessoa;
use App\Model\Conexao;
use PDO;


class PessoaDao
{



    public function create(Pessoa $p)
    {

        $sql = 'INSERT INTO pessoa (codpes, nome, codpub, urlalu, urlort) VALUES (?,?,?,?,?)';
        $stmt = Conexao::getConnection()->prepare($sql);
        $stmt->bindValue(1, $p->getCodpes());
        $stmt->bindValue(2, $p->getNome());
        $stmt->bindValue(3, $p->getCodpub());
        $stmt->bindValue(4, $p->getUrlalu());
        $stmt->bindValue(5, $p->getUrlort());

        $stmt->execute();
    }

    public function read()
    {
        $sql = 'SELECT * FROM pessoa';
        $stmt = Conexao::getConnection()->prepare($sql);
        $stmt->execute();


        
        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            echo "nenhum registro encontrado";
            return [];
        }
    }

    public function update(Pessoa $p)
    {

        $sql = 'UPDATE pessoa SET nome = ?, codpub = ?, urlalu =?, urlort = ? WHERE codpes = ?';
        $stmt = Conexao::getConnection()->prepare($sql);

        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getCodpub());
        $stmt->bindValue(3, $p->getUrlalu());
        $stmt->bindValue(4, $p->getUrlort());
        $stmt->bindValue(5, $p->getCodpes());

        $stmt->execute();
    }


    public function delete($codpes)
    {

        $sql = 'DELETE FROM pessoa WHERE codpes = ?';
        $stmt = Conexao::getConnection()->prepare($sql);
        $stmt->bindValue(1, $codpes);
        $stmt->execute();
    }
}
