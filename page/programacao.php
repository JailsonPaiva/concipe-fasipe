<?php
    include 'oficina.php';
    $oficina = new Oficina($conn);
    $oficinas = $oficina->exibirOficina();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONCIPE | PROGRAMAÇÃO</title>

    <link rel="stylesheet" href="../css/estilo.css">

</head>
<body>  
<ul>
  <li><a class="active" href="../index.html">Home</a></li>
  <li><a href="#">Programação</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
  <h1>Oficinas</h1>

    <iframe  
      src="https://fasipe.mentorweb.ws/fasipe/inspos/detalhecurso.do?evento=exibir&turmaID=13918&inscricaoOpcaoID=241" 
      width="100%" height="600">
    </iframe>

</body>
</html>