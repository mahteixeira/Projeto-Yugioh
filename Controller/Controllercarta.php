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
          $model = $model->getById($_GET['id']);

        include 'View\carta\criar_carta.php';
    }
    
    public static function save()
    {
        include 'Model/Modelcarta.php';

        $carta = new Modelcarta();
        $carta -> id = $_POST['id'];
        $carta -> nome = $_POST['nome'];
        $carta -> nivel = $_POST['nivel'];
        $carta -> ataque = $_POST['ataque'];
        $carta -> defesa = $_POST['defesa'];
        $carta -> descricao = $_POST['descricao'];

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