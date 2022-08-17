<?php

class cartaDAO{

    private $conexao;

    function __construct()
    {

        $dsn = "mysql:host=localhost:3307;dbname=yugioh";
        $user = "root";
        $pass = "etecjau";


        $this->conexao = new PDO($dsn, $user, $pass);
    }

    function insert(Modelcarta $model)
    {
        $sql = "INSERT INTO carta 
                (nome, nivel, ataque, defesa, descricao) 
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->nivel);
        $stmt->bindValue(3, $model->ataque);
        $stmt->bindValue(4, $model->defesa);
        $stmt->bindValue(5, $model->descricao);

        $stmt->execute();
    }

    public function update(Modelcarta $model)
    {
        $sql = "UPDATE carta SET nome= ?, nivel= ?, ataque= ?, defesa= ?, descricao= ?
                WHERE id= ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->nivel);
        $stmt->bindValue(3, $model->ataque);
        $stmt->bindValue(4, $model->defesa);
        $stmt->bindValue(5, $model->descricao);
        $stmt->bindValue(6, $model->id);

        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM carta";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById($id)
    {
        $sql="SELECT * FROM carta WHERE id = ?";

        $stmt = $this-> conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }

    public function delete (int $id)
    {
        $sql = "DELETE FROM carta WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt-> bindValue(1, $id);
        $stmt-> execute();

    }

}