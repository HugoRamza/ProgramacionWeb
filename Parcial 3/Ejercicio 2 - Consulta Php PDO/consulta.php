<?php
include "conectar.php";

try {
       $queryStr="select * from users";
       $query=$con->prepare($queryStr);
       $query->execute();

        while ($row = $query->fetch()) {
            echo $row['id_usuario'].'-'.
                 $row['nombre'].'-'.
                 $row['primer_apellido'].'-'.
                 $row['segundo_apellido'].'<br>';
        }
        $query->closeCursor();

} catch(PDOException $e) {
        echo "Error de consulta a la base de datos";
        echo $e->getMessage();
}

?>
