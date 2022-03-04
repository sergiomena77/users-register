<?php 
include '../db/conexion_db.php';
$sql = file_get_contents('../sql/users_list.sql');

$resultado = $conexion -> query($sql);

while($fila=$resultado -> fetch_assoc()){
     $filas[]= $fila;
    
}
//var_dump($filas);
include '../views/users_list_vista.php';

