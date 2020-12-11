<?php include('mapa.html');   ?>

<!--
  Este codigo es posible que tenga errores

  Aquí hay que verificar que se manden correctamente los datos
  
--> 


<body>
  <h1 align="center">Mensajes de Buques</h1>
  

  <br>

  <div id="mapid" style="width: 600px; height: 400px; " align="center"></div>
  <script src="puntos_mapa.js"></script>


  <div class="api-requester">
  <form align="center" action="busqueda_texto_mensaje.php" method="post">
    <label for="ID" class="id_ID">Ingrese ID</label><br>
    <input type="number" name="ID">

    <label for="fecha_inicio">Fecha inicial</label><br>
    <input type="date" name="fecha_inicio">

    <label for="fecha_final">Fecha final</label><br>
    <input type="date" name="fecha_termino">
   
    <label for="palabras_clave">Palabras claves:</label><br>
    <input type="text" name="palabras_clave">
    <br/><br/>

    <input type="submit" value="Buscar">
    </div>
  </form>
  


  <br>
  <br>
  <br>
  <br>
</body>
</html>
