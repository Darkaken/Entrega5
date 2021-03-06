<?php include('../../templates/header.html');?>
<?php $id_usuario = $_GET['ID'];
?>
<body>
<br>
<br>
<h1 align="center">Mensajes</h1>
<div class="container">
<form align="center" action="busqueda_texto_mensaje.php" method="get">
    <input type="hidden" name="ID" value="<?php echo $id_usuario ?>">
    Busqueda Simple: <input type="text" name="desired">
    Busqueda Exacta: <input type="text" name="required">
    No buscar: <input type="text" name="forbidden">
<input type="submit" value="Buscar">
</form>
</div>

<?php 

if (!empty($_GET['desired'])){ $desired = explode(",", $_GET['desired']);} else {$desired = [];};
if (!empty($_GET['required'])) {$required = explode(",",$_GET['required']);} else {$required =[];};
if (!empty($_GET['forbidden'])) {$forbidden =  explode(",", $_GET['forbidden']);} else{$forbidden = [];};
if (!empty($_GET['userId'])) {$userId =  $_GET['ID'];} else{$userId = $id_usuario;};

$data = array(
    'desired' => $desired,
    'required' => $required,
    'forbidden' => $forbidden,
    'userId' => intval($userId)
);


$options = array(
    'http' => array(
      'method'  => 'GET',
      'content' => json_encode( $data ),
      'header'=>  "Content-Type: application/json\r\n" .
                  "Accept: application/json\r\n"
      )
  );
  
  $context  = stream_context_create( $options );
  $result = file_get_contents( 'https://still-hollows-62050.herokuapp.com/text-search', false, $context );
  $response = json_decode($result, true);

?>

<br>
<br>
<div class="container">
    <table class="table table-striped table-bordered table-hover table-condensed">
	  <thead>
    <tr>
      <th>Fecha</th>
      <th>Latitud</th>
      <th>Longitud</th>
      <th>Enviado a</th>
      <th>ID mensaje</th>
      <th>Mensaje</th>
	</tr>
    </thead>
    <tr>
    <?php foreach ($response as $men){
            $ch = curl_init();
            $url = 'https://still-hollows-62050.herokuapp.com/users/' . $men['receptant'];
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $res = curl_exec($ch);
            curl_close($ch);
            $recibidor = json_decode($res, true);

            echo "<tr> <td>" .  $men['date'] . "</td>";
            echo "<td>" . $men['lat'] . "</td>";
            echo "<td>" . $men['long'] . "</td>";
            echo "<td>" . $recibidor[0]["name"] . "</td>";
            echo "<td>" . $men['mid'] . "</td>";
            echo "<td>" . $men['message'] . "</td> </tr>";
    }
    ?>
    </tr>
    </table>
    </div>


</body>

</html>


<?php include('../../templates/footer.html'); ?>