<!DOCTYPE html>
<head>
<title>UNETE!</title>
<link rel="stylesheet" href="styleI.css">
<meta charset="utf-8">
</head>

<body>
    <form id ="register" method="post">
        <label>Usuario</label> <br/>
        <input type="text" id="name" class="inp" name="user_name" placeholder="Nombre de usuario"> <br/><br/>
        <label>Correo institucional</label> <br/>
        <input type="email" id="email" class="inp" name="user_email" placeholder="Correo Electronico"> <br/><br/>
        <label>Contrasenha</label> <br/>
        <input type="password" id="password" class="inp" name="user_password" placeholder="Contrasenha"> <br/><br/>
        <input type="submit" name="send" value="Enviar formulario">
       
    </form>

        <?php
           include('send_datos.php');
        ?>
  


</body>

