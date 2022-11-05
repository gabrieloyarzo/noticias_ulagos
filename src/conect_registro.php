<?php
#Conexion a la base de datos
$conex = mysqli_connect("localhost","root","","noticias_ulagos");



if (isset($_POST['send_registro'])){    

$nombre = strval(trim($_POST['nombre']));
$apellido = strval(trim($_POST['apellido']));
$correo = strval(trim($_POST['correo']));
$password=strval(trim($_POST['contra']));

if (strval($nombre) >=1 && strval($apellido) >=1 && strval($correo) >=1 && strval($password) >=1 ){
    $dates = "INSERT INTO usuario (correo,nombre,apellido,contrasena) values('$correo','$nombre','$apellido','$password')";
    
    try {
        $result = mysqli_query($conex,$dates);
    } catch(Exception $e) {
        
    echo "Correo en uso, si está usted resgitrado puede iniciar sesión";

}


}
}
?>
