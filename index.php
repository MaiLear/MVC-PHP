<?php
//Si cargo aca el modelo de la base de datos todos los metodos que llame en la parte 
//Inferior pueden acceder a la clase en el la carpeta Models DATAbASE()
require_once 'Models/DataBase.php';

if (!isset($GET['c'])) {
    require_once 'Controllers/inicio.controlador.php';
    $controller = new InicioController();
    call_user_func(array($controller, 'Inicio'));
} else {
    $controller = $_GET['c'];
    require_once "Controllers/$controller.controlador.php";
    $controller = ucwords($controller) . 'Controlador';
    $controller = new $controller;
    $accion = isset($_GET['a']) ? $_GET['a'] : 'Inicio';
    call_user_func(array($controller,$accion));
}
