<?php
include '../conexion.php';

$id=$_REQUEST['id'];
$nombre=$_POST['nombre'];
$cantidad=$_POST['cantidad'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];

$query="UPDATE platos SET nombre ='$nombre', cantidad='$cantidad', descripcion='$descripcion', precio='$precio' WHERE id = '$id'";
 $re = mysql_query($query, $conexion) or die(mysql_error());
if($re){
    

    header("Location:modificar.php");
    
    
}else{
    echo "Actuañizacion Fallida";
}