<?php
    // header('Content-Type: application/json');
    date_default_timezone_set('America/cuiaba');

    
    $ra = $_GET['ra'];
    
    $turma = $_GET['turma'];
    
    $horario = date('d/m/Y H:i');
    
    // echo $ra;
    // echo $turma;
    // echo $horario;
    
    $pdo = new PDO('mysql: host=localhost; dbname=concipe', 'root', '');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $sql = "INSERT INTO presenca VALUES(default, :ra, :turma, :horario)";
    $sql = $pdo->prepare($sql);
    
    $sql->bindParam(':ra', $ra, PDO::PARAM_STR);
    $sql->bindParam(':turma', $turma, PDO::PARAM_STR);
    $sql->bindParam(':horario', $horario, PDO::PARAM_STR);


    
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Qr code</title>
</head>
<body>
    <h2>Qr Code validado</h2>
</body>
</html>
