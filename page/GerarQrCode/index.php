<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste qrcode</title>
</head>
<body>

    <h2>Gerar QrCode</h2>
    
    <form action="busca.php" method="GET">
        <label>RA do aluno</label>

       <input type="text" name="RA" placeholder="Digite aqui">

        <select class="form-select" aria-label="Default select example">
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
    </form>

</body>
</html>