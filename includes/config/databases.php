<?php
function conectarDB() : mysqli{
    $db = mysqli_connect('localhost','root','hello','bienesraices');

    if(!$db){
        echo "error de conexion";
        exit;
    }
    
    return $db;
}