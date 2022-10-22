<?php
  //$conn = new mysqli('localhost','root','','concipe');
  $conn = new mysqli();
  $conn->set_charset('utf8');

  if($conn == TRUE){
    //echo "Conexão estabelecida";
  }else{
    echo "Falha na conexão";
    exit();
  }
?>