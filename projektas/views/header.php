<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/adaa5eca50.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="../projektas/js/fancybox-custom.js" defer></script>
    <link rel="stylesheet" href="../projektas/css/normalize.css">
    <link rel="stylesheet" href="../projektas/css/stiliusbaigiamasis.css">
    <script src="../projektas/js/baigiamasis.js" defer></script>
    <script>
        function myFunction() {
            var x = document.getElementById("mobileMenu");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
</head>

<body>
<header class="site-header">
        <div class="container flex-container">
            <div class="logo">
                <a href="baigiamasis.php">
                    <img src="../projektas/images/LogoKalnais.png" alt="Kalnais ir miskais logotipas">
                </a>
            </div>
            <nav class="main-nav">
                <ul class="flex-container">
                    <li><a href="baigiamasis.php">Pagrindinis</a></li>
                    <li><a href="apie.php">Apie</a></li>
                    <li><a href="renginiai.php">Renginiai</a></li>
                    <li><a href="#contacts">Kontaktai</a></li>
                    <li><a href="https://www.facebook.com/kalnaisirmiskais/" target="_blank"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/kalnais_ir_miskais/?hl=en" target="_blank"><i class="bi bi-instagram"></i></a></li>
                </ul>
            </nav>
            <nav class="mobile-nav">
                <ul class="flex-container" id="mobileMenu">
                    <li><a href="#">Pagrindinis</a></li>
                    <li><a href="#">Apie</a></li>
                    <li><a href="#">Renginiai</a></li>
                    <li><a href="#contact">Kontaktai</a></li>
                    <li><a href="https://www.facebook.com/kalnaisirmiskais/" target="_blank"><i class="bi bi-facebook"></i> Facebook</a></li>
                    <li><a href="https://www.instagram.com/kalnais_ir_miskais/?hl=en" target="_blank"><i class="bi bi-instagram"></i> Instagram</a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i></a> 
            </nav> 
        </div>
    </header>