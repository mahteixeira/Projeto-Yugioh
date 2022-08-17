<?php

class Modelcarta
{

    public $id, $nome, $nivel, $ataque, $defesa, $descricao;
    public $rows;

    public function save()
    {
        include 'DAO/cartaDAO.php';
        
        $dao = new cartaDAO();

        if(empty($this->id))
        {
           $dao->insert($this);
       } else {
        $dao->update($this); 
       }
    }

    public function getAllRows()
    {
        include 'DAO/cartaDAO.php';

        $dao = new cartaDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/cartaDAO.php';

        $dao = new cartaDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new Modelcarta();

    }

    public function delete (int $id)
    {
        include 'DAO/cartaDAO.php';

        $dao = new cartaDAO();

        $dao->delete($id);

    }

}





