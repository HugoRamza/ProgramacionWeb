<?php
       require_once("includes/connection.php");  //archivo donde se encuentra la carpeta / conexion
       include("includes/header.php");
       session_start();
 //BOTON INICIAR
 //PASSWORD CREAR SECUNDARIA Y OBTENER HASH
       if(isset($_POST["login"])){
           if(!empty($_POST["username"]) && !empty($_POST["password"]))
              {
                  $username=$_POST['username'];
                  $password=$_POST['password'];

                  $query = $connection -> prepare("SELECT * FROM users WHERE USERNAME=:username");
                  $query->bindParam("username", $username, PDO::PARAM_STR);
                  $query->execute();

                   $result = $query->fetch(PDO::FETCH_ASSOC);

                   if(!$result){
                       echo '<p class="error">La combinacion del usuario y la contraseña son invalidos!</p>';
                   }else{
                       if(password_verify($password, $result['password'])){
                           $_SESSION['session_username']=$username;
                           //redirect browser
                           header("Location:  index.php");
                       }
                       else{
                           $message = "Nombre de usuario o contrasena invalida.";
                       }
                   }
              }else{
                  $message = "Todos los campos son requeridos";
              }
       }
       
?>

<div class="container mlogin">
<div class="ctn-form">
    <div id="login">
    <h1>Autenticacion de usuario</h1>
    <form name="loginform" id="loginform" action="" method="POST">
        <P>
            <label for="user_login">Nombre de usuario<br />
            <input type="text" name="username"  id="username" class="input" value="" size="20"/></label> 
        </P>
        <P>
            <label for="user_pass">Contraseña<br />
            <input type="password" name="password"  id="password" class="input" value="" size="20"/></label> 
        </P>
        <p class="submit">
            <input type="submit" name="login" class="button" value="Entrar"/>
        </p>
        <p class="regtext">No estas registrado? <a href="register.php" >Registrate aqui</a>!</p>
    </form>
    </div>
</div>
    </div>

    <?php ?>
    <?php if(!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</P>";}
            
