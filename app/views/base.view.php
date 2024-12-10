<?php ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= App::get("public_uri") ?>/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= App::get("public_uri") ?>/img/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <title><?= $data['title']; ?></title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= App::get("public_uri") ?>/img/favicon.ico">

    <!-- Jsvectormap plugin css -->
    <link href="<?= App::get("public_uri") ?>/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css">

    <!-- Icons css  (Mandatory in All Pages) -->
    <link href="<?= App::get("public_uri") ?>/css/icons.min.css" rel="stylesheet" type="text/css">

    <!-- App css  (Mandatory in All Pages) -->
    <link href="<?= App::get("public_uri") ?>/css/app.min.css" rel="stylesheet" type="text/css">
    <!-- favicon link -->
    <link rel="shortcut icon" href="<?= App::get("public_uri") ?>/img/favicon.ico" type="image/x-icon">
    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ionicons cdn -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- alpine js cdn -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    
    <!-- style css -->
    <style type="text/tailwindcss">
        *,:root,html{
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

<body class="position-relative" style="font-family: Poppins-Regular; ">
    <div class="position-fixed z-1" style="right: -85px; bottom:9vh;">
    </div>
    <?php require $subview; ?>


    <script src="https://unpkg.com/taos@1.0.5/dist/taos.js">

    </script>
    <script>
        // Mengambil semua tautan di navbar
        const links = document.querySelectorAll('#navbarToggler');

        // Menambahkan event listener pada setiap tautan
        links.forEach(link => {
            link.addEventListener('click', function() {
                // Menghapus kelas 'text-yellow-500' dari semua tautan
                links.forEach(link => link.classList.remove('text-purple-500'));
                console.log(this)

                this.classList.remove('text-slate-700');
                // Menambahkan kelas 'text-yellow-500' pada tautan yang diklik
                this.classList.add('text-purple-500'); // Warna aktif
            });
        });
    </script>

    <!-- Plugin Js (Mandatory in All Pages) -->
    <script src="<?= App::get("public_uri"); ?>/libs/jquery/jquery.min.js"></script>
    <script src="<?= App::get("public_uri"); ?>/libs/preline/preline.js"></script>
    <script src="<?= App::get("public_uri"); ?>/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= App::get("public_uri"); ?>/libs/iconify-icon/iconify-icon.min.js"></script>
    <script src="<?= App::get("public_uri"); ?>/libs/node-waves/waves.min.js"></script>

    <!-- App Js (Mandatory in All Pages) -->
    <script src="<?= App::get("public_uri"); ?>/js/app.js"></script>

    <!-- Apexcharts js -->
    <script src="<?= App::get("public_uri"); ?>/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector Map Js -->
    <script src="<?= App::get("public_uri"); ?>/libs/jsvectormap/js/jsvectormap.min.js"></script>

    <!-- Dashboard Project Page js -->
    <script src="<?= App::get("public_uri"); ?>/js/pages/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>


</body>

</html>