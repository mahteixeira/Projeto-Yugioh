<?php


class Controllercarta
{
    public static function index()
    {
        include 'Model/Modelcarta.php';

        $model = new Modelcarta();
        $model->getAllRows();

        include 'View/carta/lista_carta.php';
    }


    public static function form()
    {
        include 'Model/Modelcarta.php';
        $model = new Modelcarta();

        if (isset($_GET['id']))
          $model = $model->getById((int) $_GET['id']);

        include 'View\carta\criar_carta.php';
    }
    
    public static function save()
    {
        include 'Model/Modelcarta.php';

        $carta = new Modelcarta();
        $carta->id = (int)$_POST['id'];
        $carta->nome = $_POST['nome'];
        $carta->nivel = (int) $_POST['nivel'];
        $carta->ataque = (int) $_POST['ataque'];
        $carta->defesa = (int) $_POST['defesa'];
        $carta->descricao = $_POST['descricao'];
        $carta->tipo = $_POST['tipo'];
        
        $carta->save();
        
        header("Location: /cartas");
    }

    
    
    
    
    public static function delete()
    {
        include 'Model/Modelcarta.php';

        $model = new Modelcarta();

        $model->delete((int) $_GET['id']);

        header("Location: /cartas");

    }
}