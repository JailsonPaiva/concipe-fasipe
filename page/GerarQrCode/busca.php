<?php

if(isset($_POST)) {
    $turma = trim($_POST['turma']);

    // CONFIG E QUERY DE BUSCA NO BANCO
    $pdo = new PDO('mysql: host=localhost; dbname=concipe', 'root', '');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $RA = trim($_POST['RA']);

    if( $turma == '764') {
                
        $sql = "SELECT alunos.aluno, alunos.curso, inscritos_764.ra, inscritos_764.turma FROM inscritos_764 JOIN alunos ON  inscritos_764.ra = alunos.ra WHERE alunos.ra = :RA and inscritos_764.ra = :RA";
        $sql = $pdo->prepare($sql);
        $sql->bindParam(':RA', $RA, PDO::PARAM_STR);
        $sql->execute();
        $res_sql = $sql->fetchAll(PDO::FETCH_ASSOC);

        if(count($res_sql) > 0) {
            $resultado = $res_sql[0];
            print_r($resultado);
        } else {
            echo "Error";
            header("Location: NoFound.php");
        }

    } elseif ( $turma == '765') {
        // INNER JOIN Das tableas ALUNOS e INSCRITOS_765
        // select alunos.aluno, alunos.curso, inscritos_765.ra, inscritos_765.turma from  inscritos_765 join alunos on inscritos_765.ra = alunos.ra where alunos.ra like 60130 and inscritos_765.ra = 60130;

        $sql = "SELECT alunos.aluno, alunos.curso, inscritos_765.ra, inscritos_765.turma FROM inscritos_765 JOIN alunos ON  inscritos_765.ra = alunos.ra WHERE alunos.ra = :RA and inscritos_765.ra = :RA";
        $sql = $pdo->prepare($sql);
        $sql->bindParam(':RA', $RA, PDO::PARAM_STR);
        $sql->execute();
        $res_sql = $sql->fetchAll(PDO::FETCH_ASSOC);
        print_r($res_sql);

        if(count($res_sql) > 0) {
            $resultado = $res_sql[0];
            print_r($resultado);
        } else {
            echo "Error";
            header("Location: NoFound.php");
        }

    };

} elseif(!$_POST == null) {
    header("Location: index.php");
};


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
        <?php echo $resultado['aluno']?>
    </h2>
    <h3>
        <?php echo $resultado['curso']?>
    </h3>
    

        <div>
            <div id="qrcode<?php echo $resultado['ra']?>"></div>
            <input type="hidden" name="dados" id="dados" value="<?php echo $data = $resultado['aluno'].' '.$resultado['ra']. ' '.$resultado['turma'];
            ?>">
        </div>

        <script>
            let dados = document.querySelector('#dados');
            console.log(dados.value)
            const qrc = new QRCode(document.getElementById('qrcode<?php echo $resultado['ra']?>'));
            qrc.makeCode(dados.value);
        </script>

    <a href="../../index.html" class="btn-home">Home</a>

  

</body>
</html>