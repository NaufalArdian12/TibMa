<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_URL;?>/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= BASE_URL;?>/img/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Halaman <?= $data['title']; ?></title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= BASE_URL;?>/img/favicon.ico">

    <!-- Jsvectormap plugin css -->
    <link href="<?= BASE_URL;?>/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css">

    <!-- Icons css  (Mandatory in All Pages) -->
    <link href="<?= BASE_URL;?>/css/icons.min.css" rel="stylesheet" type="text/css">

    <!-- App css  (Mandatory in All Pages) -->
    <link href="<?= BASE_URL;?>/css/app.min.css" rel="stylesheet" type="text/css">
    <!-- favicon link -->
    <link rel="shortcut icon" href="<?= BASE_URL;?>/img/favicon.ico" type="image/x-icon">
    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ionicons cdn -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- alpine js cdn -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- style css -->
    <style type="text/tailwindcss">
        body{
            font-family: 'Inter', sans-serif;
            
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            overflow: auto; /* Ini untuk memastikan body dapat di-scroll */
        }

        ::-webkit-scrollbar {
            display: none; /* Sembunyikan scrollbar di browser berbasis WebKit */
        }
    </style>
    <script>
        document.documentElement.classList.add('js')
    </script>

</head>

<body>


    </head>

    <body>