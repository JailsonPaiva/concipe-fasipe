<?php

if(!isset($_GET['RA'])) {
    header("Location: index.php");
    exit;
}

$RA = "%".trim($_GET['RA'])."%";    

// CONFIG E QUERY DE BUSCA NO BANCO

$pdo = new PDO('mysql: host=localhost; dbname=concipe', 'root', '');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$sql = "SELECT * FROM alunos WHERE RA LIKE :RA";
$sql = $pdo->prepare($sql);

$sql->bindParam(':RA', $RA, PDO::PARAM_STR);
$sql->execute();

$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

// print_r($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LIB PARA GERAR QRCODE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="style.css">

    <title>QrCode</title>
</head>
<body>

    <h2>
        <?php echo $resultado[0]['Aluno']?>
    </h2>
    <h3>
        <?php echo $resultado[0]['Curso']?>
    </h3>
    
    <?php
        foreach($resultado as $value) {
            ?>
            <div>
                <div id="qrcode<?php echo $value['RA']?>"></div>
                <input type="hidden" name="dados" id="dados" value="<?php echo $data = $value['RA'].' '.$value['Aluno'];
                ?>">

            </div>

            <script>
                let dados = document.querySelector('#dados');
                console.log(dados.value)
                const qrc = new QRCode(document.getElementById('qrcode<?php echo $value['RA']?>'));
                qrc.makeCode(dados.value);

            </script>
            <?php
        }
    ?>

    <a href="../../index.html" class="btn-home">Home</a>

  

</body>
</html>