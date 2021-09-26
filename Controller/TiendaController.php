<?php

require_once "./Model/TiendaModel.php";
require_once "./View/TiendaView.php";

class TiendaController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new TiendaModel();
        $this->view = new TiendaView();
    }
    function showHome(){
       $productos= $this->model->getProductos();
       $this->view->mostrarProductos($productos);
    }
}