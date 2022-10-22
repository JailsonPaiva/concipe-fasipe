<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concipe | FASIPE Cuiabá</title>
</head>
<body>
    <video id="vid" muted autoplay></video>



    <script>

        $(function () {
            video = document.getElementById('vid');
            video.style.width = document.width + 'px';
            video.style.height = document.height + 'px';
            video.setAttribute('autoplay', '');
            video.setAttribute('muted', '');
            video.setAttribute('playsinline', '');

            var constraints = {
                audio: false,
                video: {
                    facingMode: 'user'
                }
            }

            navigator.mediaDevices.getUserMedia(constraints).then(function success(stream) {
                video.srcObject = stream;
            });
        });

        

    </script>
</body>
</html>