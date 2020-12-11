<!DOCTYPE html>
<html>

<!--
  Este es el inicio de sesión
  deberia notificarte cuando tu usuario es incorrecto 
  tambien deberia enviarte a mapa si el usuario es correcto
--> 

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> Mapa de Mensajes </title>
    <!-- Bootstrap(CSS), Jquery (javascripts), etc... -->

    <!-- para que sea index.php pueda importarlo -->
    <link rel="stylesheet" href="styles/mystyles.css">
    <!-- para que una consulta.php pueda importarlo -->
    <link rel="stylesheet" href="../styles/mystyles.css">
</head>

<body>
  <form align="center" action="verificar_usuario.php" method="post">
    Nombre:
    <input type="text" name="usuario">
    <br/>
    contraseña:
    <input type="password" name="contrasenna">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>



</body>

</html>