<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/Controllercarta.php';

switch($uri_parse){

    case '/cartas':
        Controllercarta::index();
        break;

    case '/cartas/form':
        Controllercarta::form();
        break;

    case '/cartas/save':
        Controllercarta::save();
        break;

    
    case '/cartas/delete':
        Controllercarta::delete();
        break;

    default:
        include "View/pgInicial.php";
        break;
}