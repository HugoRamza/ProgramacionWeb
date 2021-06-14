<?php
include "conectar.php";

try {
    $queryStr="select * from BARBERO"
    $query=$con->prepare($queryStr);
    $query->execute();

    while ($row = $query->fetch()) {
        echo $row['ID_BARBERO']. ' '.
             $row['NOMBRE']. ' '.
             $row['APELLIDO_PATERNO']. ' '.
             $row['NOMBRE_USUARIO']. '<br><br><br>';
    }
    $query->closeCursor();

} catch (PDOException $ex) {
    echo "Error de consulta a la base de datos";
    echo $ex->getMessage();
}
?>
