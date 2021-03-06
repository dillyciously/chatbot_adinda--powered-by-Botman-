<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BotMan Studio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        body {
            font-family: "Varela Round", sans-serif;
            margin: 0;
            padding: 0;
            background: radial-gradient(#57bfc7, #45a6b3);
        }

        .container {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .content {
            text-align: center;
        }

        .logo {
            margin-right: 40px;
            margin-bottom: 20px;
        }

        .links a {
            font-size: 1.25rem;
            text-decoration: none;
            color: white;
            margin: 10px;
        }

        @media all and (max-width: 500px) {

            .links {
                display: flex;
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="logo">
          <img width=300 height=300 src='/dinda.png' />
            </div>
        <div class="links">
          <a href="/botman/tinker" target="_blank">ADINDA</a>
          <a href="https://bpad.jakarta.go.id" target="_blank">Portal BPAD</a>
          <a href="https://aset.jakarta.go.id" target="_blank">Aplikasi BPAD</a>
          <a href="https://www.youtube.com/channel/UC_S1y4yWE7nngg66DfG_hxg" target="_blank">Tutorial</a>
        </div>
    </div>
</div>
<script>
var botmanWidget = {
    frameEndpoint: '/botman/chat',
    title: "ADINDA",
    bubbleAvatarUrl: "/logo.png",
    introMessage: "Selamat datang, saya ADINDA - Asisten Digital Aset Anda",
    aboutLink: "https://bpad.jakarta.go.id",
    aboutText: "BPAD Provinsi DKI Jakarta"
};
</script>
<script src='/js/widget.js'></script>
</body>
</html>
