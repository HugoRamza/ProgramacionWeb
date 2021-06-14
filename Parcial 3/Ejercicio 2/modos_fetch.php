<?php
include 'conectar.php';
try {
    $consultaSql = "select nombre, apellido_paterno, nombre_usuario from barbero";
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();

    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    print "<h1><pre>PDO::FETCH_ASOC</pre></h1>";
    print "<br>";
    var_dump($resultado);
    print "<br>";
    printf("<b>nombre               = </b> %s <br>", $resultado['nombre']);
    printf("<b>apellido_paterno     = </b> %s <br>", $resultado['apellido_paterno']);
    printf("<b>nombre_usuario       = </b> %s <br>", $resultado['nombre_usuario']);
    print "<br><br><br>";

    $consulta->closeCursor();

} catch (PDOException $e) 
{
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}
?>