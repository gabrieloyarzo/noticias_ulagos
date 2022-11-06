
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script language= javascript type= text/javascript>
function errorDatos(){
 swal({
    title: 'Error',
    text:'El correo ingresado ya se encuentra en uso',
    icon:'error'
})
}
function bienvenido(){
swal({
   title:'Bienvenido!',
   icon:'success'
})
}

function entradasInvalidas(){
 swal({
    title: 'Error',
    text:'Los datos contienen caracteres prohibidos o estan en blanco!',
    icon:'error'
})
}
</script> 


<?php

#Conexion a la base de datos
$conex = mysqli_connect("localhost","root","","noticias_ulagos");

include('sanitizar.php');


if (isset($_POST['send_registro'])){    

$nombre = Limpieza(trim($_POST['nombre']));
$apellido = Limpieza(trim($_POST['apellido']));
$correo = Limpieza(trim($_POST['correo']));
$password= Limpieza(trim($_POST['contra']));


if (strval($nombre) >=1 && strval($apellido) >=1 && strval($correo) >=1 && strval($password) >=1 ){
    $dates = "INSERT INTO usuario (correo,nombre,apellido,contrasena) values('$correo','$nombre','$apellido','$password')";
    
    try {
        $result = mysqli_query($conex,$dates);
        echo '<script>';
        echo 'bienvenido()';
        echo '</script>';
    } catch(Exception $e) {
        
   echo '<script>';
   echo 'errorDatos()';
   echo '</script>';
   

    }
} else {

    echo '<script>';
    echo 'entradasInvalidas()';
    echo '</script>';

}
}
?>
