<?php
class TiendaModel{
    private $db_tienda;

    function __construct(){
        $this->db_tienda = new PDO('mysql:host=localhost;'.'dbname=lasPulpas;charset=utf8', 'root', '');
   }

   function getProductos(){
    $sentencia = $this->db_tienda->prepare( "SELECT * FROM producto");
    $sentencia->execute();
    $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $productos;

} 
echo 'celeste';

}