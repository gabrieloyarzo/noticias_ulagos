<?php
include("connect.php");
mysqli_select_db($conex,'ulagos_user');
$nombre = strval(trim($_POST['user_name']));
$correo = strval(trim($_POST['user_email']));
$pass = strval(trim($_POST['user_password']));


if (isset($_POST['send'])){
    if ((strlen($_POST['user_name']) >= 1)  && (strlen($_POST['user_email']) >= 1) && (strlen($_POST['user_password'])) >= 1) {       
            $dates = "INSERT INTO usuarios(user,email,password) values('$nombre','$correo','$pass')";
            $result = mysqli_query($conex,$dates);

        }      
    }




?>