<?php 
include '../db/conexion_db.php';
$sql=file_get_contents('../sql/create_table_users.sql');
//echo $sql;
$resultado = $conexion->multi_query($sql);
if ($resultado){
    echo 'Aplicacion instalada con éxito';
}else{
    echo 'Ha ocurrido un error';
}
