<?php include('templates/header.html');   ?>

<!--
  A este archivo hay que hacerle casí toda la parte PHP
  el rechazo del usuario hay que programarlo
  cuando se acepta el usuario hay que eviarlo a mapa.php
--> 

<body>

  <?php
  require("conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  $usuario = $_POST["usuario"];
  $contrasenna = $_POST["contrasenna"];

  
  ?>
</body>