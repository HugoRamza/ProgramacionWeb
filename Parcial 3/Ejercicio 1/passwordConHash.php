<?php
    
    $hash = password_hash('zarate', PASSWORD_DEFAULT, ['cost' => 10]);
    
    echo $hash . '<br/>'; //$2y$10$T7x88FtOdxRuAygdQnyFbOkSyTxG.GeqFYbjcJw4aHtiG5BcfMZDS

?>
