<?php

if($_POST['RA'] == null || $_POST['RA'] == '') {

    header("Location: NoFound.php");

} elseif(isset($_POST)) {

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


        if(count($res_sql) > 0) {
            $resultado = $res_sql[0];

        } else {
            echo "Error";
            header("Location: NoFound.php");
        }

    };

}


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

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="../../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="QrCode.css">
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <title>QrCode</title>
</head>
<body>

     <!-- Navigation-->
     <nav class="navbar navbar-expand-lg bg-success text-uppercase " id="mainNav">
            
            <div class="container">
                <a class="navbar-brand" href="../../index.html">Fasipe Cuiabá</a>
               <!-- <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    </ul>
                </div> -->
            </div>
           
        </nav>




<div class="container-qr-code">
    <div class="background-qr-code">
        <div class="info-aluno">
            <h2>
                <?php echo $resultado['aluno']?>
            </h2>
            <h3>
                <?php echo $resultado['curso']?>
            </h3>
        </div>
        
        
            <div>
                <div id="qrcode<?php echo $resultado['ra']?>"></div>
                <input type="hidden" name="dados" id="dados" value="<?php echo $data = $resultado['aluno'].' '.$resultado['ra']. ' '.$resultado['turma'];
                ?>">
            </div>        
    </div>
    <a href="../../index.html" class="btn btn-primary col-md-3 mt-3">Home</a>
</div>

  

    <script>
        let dados = document.querySelector('#dados');
        // console.log(dados.value)
        const qrc = new QRCode(document.getElementById('qrcode<?php echo $resultado['ra']?>'));
        qrc.makeCode(dados.value);
    </script>
</body>
</html>