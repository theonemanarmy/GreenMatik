<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Greenmatik | </title>
    <!-- Archivos externos -->
    <script src="<?= base_url ?>assets/js/jquery-3.3.1.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="<?= base_url ?>assets/images/icons/fav-icon.png" />

    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/owl.theme.min.css">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/owl.carousel.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- MAGNIFIC POPUP--->
    <link rel="stylesheet" href="<?= base_url ?>assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url ?>assets/css/hamburgers.css">
    <link rel="stylesheet" href="<?=base_url?>assets/css/sb-admin.min.css">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/style.css">

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var path = window.location.pathname.split("/").pop();

            if (path == '') {
                path = '<?php echo base_url ?>index/home';
            }

            var target = $('nav a[href="' + path + '"]');
            target.addClass('activo');
        });
    </script>
</head>

<body>

    <div class="ir-arriba"><i class="fas fa-arrow-up"></i></div>

    <nav class="navbar header-oculto ">
        <a class="navbar-brand" href="index.php">
            <img src="<?= base_url ?>assets/images/brand.png" class="d-inline-block align-top header-oculto " alt="">
        </a>

        <ul class="nav justify-content-end">
            <!-- <li class="nav-item">
            <span class="nav-link header-oculto"> <i class="far fa-clock"></i> <span class="header-oculto"><strong>SERVICIO 24 HORAS</strong></span></span>
        </li> -->
            <li class="nav-item">
                <a class="nav-link header-oculto" href="tel:8001347336"><i class="fas fa-phone"></i> <span class="header-oculto">800 134 7336</span> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link header-oculto" href="ventas@greenmatik.com" target="_blank">
                    <i class="fas fa-envelope"></i>
                    <span class="header-oculto">E-MAIL</span>
                </a>
            </li>
            <?php if(isset($_SESSION['identity'])): ?>
            <li class="nav-item">
                <a class="nav-link header-oculto" href="<?=base_url?>usuario/logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="header-oculto">CERRAR SESIÓN</span>
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </nav>

    <nav class="navbar justify-content-center nav-oculto-movil " style="background: #149447; color: white; ">

        <ul class="nav justify-content-center">
            <!--<li class="nav-item">
            <a class="nav-link   " href="#" style="color:white"> <i class="far fa-clock"style="color:white" ></i> <span class="barra-movil" >24/7</span></a>
        </li> -->
            <li class="nav-item">
                <a class="nav-link " href="tel:018001347336" style="color:white"><i class="fas fa-phone" style="color:white"></i> <span class="barra-movil">Llamar</span> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="ventas@greenmatik.com" style="color:white"><i class="fas fa-envelope" style="color:white"></i> <span class="barra-movil">E-mail</span></a>
            </li>
            

        </ul>
    </nav>

    <header>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu" class="hamburger hamburger--emphatic-r">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </label>
        <a href="index.php">
            <img class="nav-oculto-movil " src="<?= base_url ?>assets/images/brand.png" alt="logotipo" style="margin: -50px 0 12px 33%;">
        </a>

        <nav class="menu-responsive navbar justify-content-end bg-blue">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link barra" href="<?= base_url ?>index/home">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link barra" href="<?= base_url ?>index/services">SERVICIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link barra" href="<?= base_url ?>producto/catalogue">CATÁLOGO</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link barra" href="<?= base_url ?>index/spareParts">REFACCIONES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link barra" href="<?= base_url ?>index/us">NOSOTROS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link barra" href="<?= base_url ?>index/faq">PREGUNTAS FRECUENTES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link barra" href="<?= base_url ?>index/contact">CONTACTO</a>
                </li>
            </ul>
        </nav>
    </header>