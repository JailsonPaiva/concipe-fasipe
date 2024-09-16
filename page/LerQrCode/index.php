<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste qrcode</title>

    <style>
        body {
            height: 100vh;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        a {
            font-size:1.2rem ;

            text-decoration: none;
        }

        button {
            width: 70%;
            height: 2rem;

            margin-bottom: 10px;

            background-color: lightgreen;

            font-size: 1.2rem;

            border-radius: 10px;
            border: none;
        }

        .result{
            background-color: green;
            color:#fff;
            padding:20px;
        }
        .row{
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>

</head>
<body>

<script src="html5-qrcode.min.js"></script>
    
    
    <div class="row">
        <div class="col">
            <div style="width:500px;" id="reader"></div>
        </div>

        <div class="col" style="padding:30px;">
            <h4>SCAN RESULT</h4>
            <div id="result">Result Here</div>
        </div>
    </div>

    <script type="text/javascript">
        function onScanSuccess(qrCodeMessage) {
            document.getElementById('result').innerHTML = '<span class="result">'+qrCodeMessage+'</span>';
            const response =  qrCodeMessage;
            const dado = response.split(" ");

            const ra = JSON.stringify(dado[0]);
            const turma = JSON.stringify(dado[1]);

            const url = `http://localhost/QRCODE/presenca.php?ra=${ra}&turma=${turma}`;
        
            const xhr = new XMLHttpRequest();
            xhr.responseType = 'json';
            xhr.open('GET', url, true);
            xhr.setRequestHeader('Content-Type', 'application/json')
            
            xhr.send();
            window.location.href = url
        }

        function onScanError(errorMessage) {
        //handle scan error
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess, onScanError);
    </script>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>
</html>