<?php
    require_once("includes/connection.php");  //archivo donde se encuentra la carpeta / conexion 

    include("includes/header.php");  //incluya el header
     
    session_start(); //crear una sesion 

    if(isset($_POST["register"])) 
    {          //si no esta vacio el campo hara que...
         if(!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']))
         {
            //guarda los campos en las variables correspondientes para poder luego usarlas
            $full_name =$_POST['fullname'];
            $email =$_POST['email'];
            $username =$_POST['username'];
            $password =$_POST['password'];
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
         
                $query =$connection->prepare("SELECT * FROM users Where EMAIL=:email");
                $query->bindParam("email", $email,PDO::PARAM_STR);
                $query->execute();

                if($query->rowCount()>0){
                    echo '<p class="error">El email ya existe</p>';
                }//fin de ($query->rowCount()>0)

                if($query->rowCount()==0)
                {
                    $query = $connection->prepare("INSERT INTO users(FULLNAME,USERNAME,PASSWORD,EMAIL) VALUES(:fullname,:username,:password_hash,:email)");
                    $query->bindParam("fullname", $full_name, PDO::PARAM_STR);
                    $query->bindParam("username", $username, PDO::PARAM_STR);
                    $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
                    $query->bindParam("email", $email,PDO::PARAM_STR);
                    $result = $query->execute();
                    //si la consulta se genera exitosamente se crea 

                    if($result){ 
                        $message = "Cuenta correctamente creada"; /*fin de if(if($result)*/
                    }                
                     else{$message="Error al ingresar datos de la informacion"; /* fin del Else*/ }
                     
                }/*fin de if($query->rowCount()==0)*/
                else{
                    $message = "El nombre de usuario ya existe, Favor de intentar con otro!";  }

        }else{
            $message="Todos los campos no deben estar vacios!";
        } //fin de if(!empty($_POST['fullname']) && !empty($_POST['email']))
    }//fin de register
?>


       <?php if(!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} ?>

        <div class "container mregister">
        <div class="ctn-form">
            <div id="login">
            <h1>Registrar</h1>
            <form name="registerform" id="registerform" action="register.php" method="post">
               
                <p>
                   <label for="user_login">Nombre completo<br />
                   <input type="text" name="fullname" id="fullname" class="input" size="32" value="" /></label>
                </p>

                <p>
                   <label for="user_pass">E-mail<br />
                   <input type="text" name="email" id="email" class="input" value="" size="32" /></label>
                </p>

                 <p>
                   <label for="user_pass">Nombre de usuario<br/>
                   <input type="text" name="username" id="username" class="input" value="" size="20" /></label>
                </p>

                <p>
                    <label for="user_pass">Contraseña<br/>
                    <input type="password" name="password" id="password" class="input" value="" size="32" /></label>
                </p>
                
                <p class="submit">
                    <input type="submit" name="register" id="register" class="button" value="Registrar"/>
                </p>

                <p class="regtext">Ya tienes una cuenta? <a href="login.php" >Entra Aqui!</a>!</p>
            </form>
            </div>
        </div>
        </div>
       <?php ?>
