<?php
$conex = mysqli_connect("localhost","root","","noticias_ulagos");
mysqli_select_db($conex,"noticias_ulagos");
$date = "SELECT * FROM noticia";
$result = mysqli_query($conex,$date);
$fila=mysqli_fetch_array($result);


while ($fila=mysqli_fetch_array($result)){

echo "<p>";
echo "-"; //un separador
echo $fila["correo"];
echo "-"; // un separador
echo $fila["nombre"];
echo "-"; // un separador
echo $fila["apellido"];
echo "<p>";
echo "-"; // un separador
echo $fila["contrasena"];
echo "<p>";

}


?>
