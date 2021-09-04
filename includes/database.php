<?php

$db = mysqli_connect('localhost','root','','appsalon');
$db->set_charset('utf8');

if ($db) {
    // echo "Conexión Correcta";
}else{
    echo "No fue posible la conexion";
    exit;
}
