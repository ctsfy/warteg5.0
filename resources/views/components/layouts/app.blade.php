<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

        <script
            src="https://unpkg.com/html5-qrcode"
            type="text/javascript"
        ></script>

        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />

        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />

        @vite(["resources/css/app.css", "resources/js/app.js"])

        <title>{{ $title ?? "Warteg" }}</title>
        <style>
            html, body {
                margin: 0;
                padding: 0;
            }
        </style>

    </head>
    <body class="{{ $class ?? "" }} mx-auto flex min-h-screen max-w-[430px] flex-col bg-[#94999b]">
        {{ $slot }}
    </body>
</html>
