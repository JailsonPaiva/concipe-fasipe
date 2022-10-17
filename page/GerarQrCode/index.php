<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>teste qrcode</title>
</head>
<body>

    <h2>Gerar QrCode</h2>
    
    <form action="busca.php" method="POST">
=======

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

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <title>teste qrcode</title>
</head>
<body class="d-flex flex-column justify-content-between">

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


    
    <!-- <form action="busca.php" method="POST">
>>>>>>> 8c13bea0129e869b84878b7ba77c32eaca4ccbad
        <label>RA do aluno</label>

       <input type="text" name="RA" placeholder="Digite aqui">

        <select class="form-select" aria-label="Default select example" name="turma">
            <option selected>Seleione o seu curso</option>
            <option value="765">Análise de Sistemas</option>
            <option value="765">Biomedicina</option>
            <option value="765">Enfermagem</option>
            <option value="765">Fisioterapia</option>
            <option value="765">Nutrição</option>
            <option value="765">Odontologia</option>

            <option value="764">Direito</option>
            <option value="764">Contabilidade</option>
            <option value="764">Administração</option>
            <option value="764">Psicologia</option>
        </select>   

       <button type="submit">buscar</button>
<<<<<<< HEAD
=======
    </form> -->


    <form class="mt-5" action="busca.php" method="POST">
        <fieldset>
            
            <div class="row justify-content-center">
                <h4 class="text-center">Gerar QrCode</h4>

                <div class="mb-3 col-md-6">
                    <label for="RA" class="form-label">R.A do aluno</label>
                    <input type="text" id="RA" name="RA" class="form-control h-75" placeholder="Digite aqui">
                </div>

                <div class="mb-3 col-md-4 ">
                    <label for="curso" class="form-label">Seleione o seu curso</label>
                    <select class="form-select h-75" aria-label="Default select example" id="curso" name="turma">
                        <option selected>Seleione o seu curso</option>
                        <option value="765">Análise de Sistemas</option>
                        <option value="765">Biomedicina</option>
                        <option value="765">Enfermagem</option>
                        <option value="765">Fisioterapia</option>
                        <option value="765">Nutrição</option>
                        <option value="765">Odontologia</option>
                        <option value="764">Direito</option>
                        <option value="764">Contabilidade</option>
                        <option value="764">Administração</option>
                        <option value="764">Psicologia</option>
                    </select>
                </div>
            <!-- <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                    <label class="form-check-label" for="disabledFieldsetCheck">
                    Can't check this
                    </label>
                </div>
            </div> -->
            
            <button type="submit" class="btn btn-success col-md-4 mt-5" style="margin: 0 1rem; height: 3.3rem;">Gerar</button>
        </div>
        
        </fieldset>
>>>>>>> 8c13bea0129e869b84878b7ba77c32eaca4ccbad
    </form>

</body>
</html>