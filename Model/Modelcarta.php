<?php

class Modelcarta
{

    public $id, $nome, $nivel, $ataque, $defesa, $descricao;
    public $rows;

    public function save()
    {
        include 'DAO/DAOcarta.php';

        var_dump($this);
        echo $this->id;
        
        $dao = new cartaDAO();

        if($this->id == null)
        {
           $dao->insert($this);
        } else 
        {
            $dao->update($this); 
        }
    }

    public function getAllRows()
    {
        include 'DAO/DAOcarta.php';

        $dao = new cartaDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/DAOcarta.php';

        $dao = new cartaDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new Modelcarta();

    }

    public function delete (int $id)
    {
        include 'DAO/DAOcarta.php';

        $dao = new cartaDAO();

        $dao->delete($id);

    }

}





