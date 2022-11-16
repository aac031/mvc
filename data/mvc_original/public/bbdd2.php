<?php
require "../bbddcon.php";

$sql = "select nombreusu,password from credenciales";
$registros = $bd->query($sql);
echo "<br>Número de registros devueltos: " . $registros->rowCount();
if ($registros->rowCount() > 0) {
    foreach ($registros as $fila) {
        echo "<br>Nombre de usuario: " . $fila["nombreusus"];
        echo "<br>Password: " . $fila["password"];
    }
} else {
    echo "<br>No se ha devuelto ninguna fila.";
}
