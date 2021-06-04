<?php
include "conectar.php";

try {
       $queryStr="select * from barbero";
       $query=$con->prepare($queryStr);
       $query->execute();

        while ($row = $query->fetch()) {
            echo $row['ID_BARBERO'].'-'.
                 $row['NOMBRE'].'-'.
                 $row['APELLIDO_PATERNO'].'-'.
                 $row['APELLIDO_MATERNO'].'<br>';
        }
        $query->closeCursor();

} catch(PDOException $e) {
        echo "Error de consulta a la base de datos";
        echo $e->getMessage();
}

?>
