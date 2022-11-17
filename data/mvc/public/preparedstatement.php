<?php
$dsn = "mysql:dbname=demo;host=db";
$usuario = "dbuser";
$password = "secret";

/* 
    1. Preparar la consulta -> Prepare.
    2. Vincular los datos -> bindParam / bindValue
    3. Ejecutar la sentencia -> execute(); (query, exec)
*/
try {
    $db = new PDO($dsn, $usuario, $password);
    //Establece el nivel de error que muestra en la conexion
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Preparación por nombre
    //$sentencia = $db->prepare("INSERT INTO credenciales (nombreusu,password) VALUES (:nombre,:clave) ");

    //Preparación por posición
    $sentencia = $db->prepare("INSERT INTO credenciales (nombreusu,password) VALUES (?, ?) ");

    $nombre = "Alicia";
    $clave1 = "sombrero";
    $sentencia->bindParam(1, $nombre);
    $sentencia->bindParam(2, $clave1);

    //Preparación + ejercución: execute(array[datos]);

    // $sentencia->bindValue(":nombre", $nombre);
    // $sentencia->bindValue(":clave", $clave1);

    //$nombre = "Pedro";
    //$clave1 = "789";
    $sentencia->execute(); //Ejecuta la sentencia

    echo "<h2>Éxito</h2>";
} catch (PDOException $e) {
    echo "Error producido al conectar: " . $e->getMessage();
}
