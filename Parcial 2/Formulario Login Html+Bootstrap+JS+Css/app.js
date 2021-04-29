(function(){
    $(document).ready(function(){
        $('#Ingresar').click(function(){
            var usuario=$('#correo').val();            
            var pass=$('#Pass').val();
            console.log(usuario,pass)
            if(usuario == 'Correo' && pass == '123')
            {
                alert('Usuario y contraseña correctos!!, Bienvenido al himalaya :)');
                return(false);
            }
            else{
                alert('Usuario o contraseña incorrectos, ingresalos nuevamente');
                return(false);
            }
        });
        });
}());