<?php
  //$conn = new mysqli('localhost','root','','concipe');
  $conn = new mysqli('concipe.com.br','concipecom_cuiaba',')haqi!3Mz6zV','concipecom_cuiaba');
  $conn->set_charset('utf8');

  if($conn == TRUE){
    //echo "Conexão estabelecida";
  }else{
    echo "Falha na conexão";
    exit();
  }
?>