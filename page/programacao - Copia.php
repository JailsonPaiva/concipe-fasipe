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
  <div class="container"> 
    <iframe class="responsive-iframe" src="https://fasipe.mentorweb.ws/fasipe/inspos/detalhedisciplinas.do?evento=continua"></iframe>
  </div>
    <table>
  <tr>
    <th>Data</th>
    <th>Oficina</th>
    <th>Palestrante</th>
    <th>Inscrição</th>
  </tr>
  <?php foreach($oficinas as $oficina) {?>
    <tr>
      <td>27/10/2022</td>
      <td><?php echo $oficina['tema'];?></td>
      <td><?php echo $oficina['palestrante']; ?></td>
      <td><button><a href="https://fasipe.mentorweb.ws/fasipe/inspos/detalhedisciplinas.do?evento=continua">Inscrição</a></button></td>
    </tr>
    <tr></tr>
  <?php  } ?>
</table>
</body>
</html>