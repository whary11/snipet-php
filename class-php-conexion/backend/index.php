<?php
  require_once 'db.php';
  $nombre =   $_POST["nombre"];
  $tel =  $_POST["tel"];
  $correo =   $_POST["correo"];
  $db = new DataBase();
  $sql = "INSERT INTO `landig` (`id`, `nombre`, `correo`, `tel`) VALUES (NULL, '$nombre', '$correo', '$tel')";
  $resultado = $db->ejecutar_idu($sql);
  header('Location: ../');
 ?>
