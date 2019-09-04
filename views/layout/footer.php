<footer class="footer">
    <div class="container">
        <div class="row mt-20">
            <div class="col-xs-12 col-sm-12 col-lg-3">
                <h2 class="footer"> <strong> <img src="<?= base_url ?>assets/images/brand.png" alt="" style="width:75%;"> </strong> </h2>
                <p>
                    Empresa dedicada a dar soluciones de autolavado de
                    vehículos, venta de equipo, refacciones, accesorios
                    y productos de limpieza. Un autolavado es un negocio
                    rentable, invierte ahora.
                </p>

                <!---->
            </div>

            <div class="col-6 col-sm-6 col-lg-3">
                <h6><strong>MENÚ</strong> </h6>
                <a class="footer-link activo" href="<?= base_url ?>index/home"><span>INICIO</span></a> <br>
                <a class="footer-link" href="<?= base_url ?>index/services"><span>SERVICIOS </span></a> <br>
                <a class="footer-link" href="<?= base_url ?>producto/catalogue"><span>CATÁLOGO DE PRODUCTOS</span></a><br>
                <a class="footer-link" href="<?= base_url ?>index/spareParts"><span>REFACCIONES</span></a><br>
                <a class="footer-link" href="<?= base_url ?>index/us"><span>NOSOTROS</span></a><br>
                <a class="footer-link" href="<?= base_url ?>index/faq"><span>PREGUNTAS FRECUENTES</span></a><br>
                <a class="footer-link mb-20" href="<?= base_url ?>index/contact"><span class="">CONTACTO</span></a>
                <!-- <h6 class=" margen-movil2  "><strong>SÍGUENOS</strong></h6>
                <a class="mostrar footer-link" href="/" target="_blank"> <i class="fab fa-facebook-f dos  "> </i> @friocontrol </a>
                <h6 class="oculto margen-movil2  "><strong>SÍGUENOS</strong></h6>
                <a class="oculto link" href="/" target="_blank"> <i class="fab fa-facebook-f dos"></i> @GREENMATIK </a>   -->
            </div>

            <div class="col-6 col-sm-6 col-lg-3">
                <h6><strong>CONTÁCTANOS</strong></h6>
                <a class="footer-link"> <i class="fas fa-phone dos"></i> <span style="font-family: 'Raleway', sans-serif;"><strong>TELÉFONOS</strong> </span> </a> <br>
                <a class="mostrar margen-movil" href="tel:8110867509"><span class="sucursales-footer">811 086 7509</span> </a> <br>
                <a class="footer-link"> <i class="fas fa-envelope dos"></i> <span style="font-family: 'Raleway', sans-serif;"><strong>E-MAIL</strong> </span> </a> <br>
                <a class=" footer-link" href="mailto:ventas@greenmatik.mx"> <span class="sucursales-footer">ventas@greenmatik.mx</span> </a> <br>

                <a class="footer footer-link"> <i class="fas fa-map-marker-alt dos"></i> <strong>UBICACIÓN</strong></a>
                <br>
                <a class="footer-link mt-20" href="https://www.google.com/maps/place/Greenmatik+S.A.+de+C.V./@25.6573297,-100.1985461,21z/data=!4m13!1m7!3m6!1s0x8662c1b8cf080609:0xc84def865bbcb1af!2sPresa+Manuel+%C3%81vila+Camacho+105,+S.C.O.P.,+Guadalupe,+N.L.!3b1!8m2!3d25.6579486!4d-100.1991389!3m4!1s0x8662c130d43003ab:0xc5ccd26d2e891e0a!8m2!3d25.6573297!4d-100.1984093" target="_blank">
                    <span class="sucursales-footer" style="font-size:11px;">
                        Presa Manuel Avila Camacho #105
                        <br>
                        S. C. O. P Guadalupe, N. L.
                        <br>
                        C. P. 67190
                    </span>
                </a>
                <br>

                <a class="oculto link" href="tel:8110867509">
                    <i class="fas fa-phone dos"></i> </a>
                <br>

            </div>

            <div class="col-6 col-sm-6 col-lg-3">
                <h6><strong>UBICACIÓN</strong> </h6>

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d224.77632316017608!2d-100.1985461!3d25.6573297!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662c130d43003ab%3A0xc5ccd26d2e891e0a!2sGreenmatik%20S.A.%20de%20C.V.!5e0!3m2!1ses!2smx!4v1567094722360!5m2!1ses!2smx" width="100%" height="165" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>



        <div class="copyRight mt-20">
            <p style="color:white; text-align:center;">
                <br>
                © Copyright 2019 GREENMATIK, Todos los derechos
                reservados.

                <a class="footer-link" href="<?= base_url ?>index/terminosYCondiciones">
                    Aviso de Privacidad
                </a>
                |
                <a class="footer-link " href="http://www.3e-digital.com/" target="_blank">
                    Sitio web diseñado por 3e-Digital
                </a>
            </p>
        </div>


    </div>
</footer>


<!-- Optional JavaScript -->
<script src="<?= base_url ?>assets/js/bootstrap.js"></script>
<script src="<?= base_url ?>assets/js/owl.carousel.min.js"> </script>
<script type="text/javascript" src="<?= base_url ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url ?>assets/aos-master/dist/aos.js"></script>


<script src="<?= base_url ?>assets/js/custom.js"></script>
<script src="<?= base_url ?>assets/js/jquery.backstretch.min.js"></script>
<script src="<?= base_url ?>assets/js/jquery.simple-text-rotator.min.js"></script>

<script>
    AOS.init();
</script>
<script>
    $(document).ready(function() {
        $('.category_list .categoryItem[category="todos"]').addClass('ct-item-active');

        //Agregarle la clase active al item seleccionado
        $('.categoryItem').click(function() {
            //filtrado de los productos
            var catEvent = $(this).attr('category');
            console.log(catEvent);

            $('.categoryItem').removeClass('ct-item-active');
            $(this).addClass('ct-item-active');

            //ocultar los productos
            $('.filtr-item').css('transform', 'scale(0)');

            function hideEvents() {
                $('.filtr-item').hide();
            }
            setTimeout(hideEvents, 400);

            //Mostrando los productos
            function showEvents() {
                $('.filtr-item[category="' + catEvent + '"]').show();
                $('.filtr-item[category="' + catEvent + '"]').css('transform', 'scale(1)');
            }
            setTimeout(showEvents, 400);
        });

        //mostrando los productos
        $('.categoryItem[category="todos"]').click(function() {
            function showAll() {
                $('.filtr-item').show();
                $('.filtr-item').css('transform', 'scale(1)');
            }
            setTimeout(showAll, 400);

        });
    });
    // sucursales

    $(document).ready(function() {
        $('.category_lista2 .categoryItem[category="todos"]').addClass('ct-item-active');

        //Agregarle la clase active al item seleccionado
        $('.category_lista2  .categoryItem').click(function() {
            //filtrado de los productos
            var catEvent = $(this).attr('category');
            console.log(catEvent);

            $('.category_lista2  .categoryItem').removeClass('ct-item-active');
            $(this).addClass('ct-item-active');

            //ocultar los productos
            $('.filtr-item').css('transform', 'scale(0)');

            function hideEvents() {
                $('.filtr-item').hide();
            }
            setTimeout(hideEvents, 400);

            //Mostrando los productos
            function showEvents() {
                $('.filtr-item[category="' + catEvent + '"]').show();
                $('.filtr-item[category="' + catEvent + '"]').css('transform', 'scale(1)');
            }
            setTimeout(showEvents, 400);
        });

        //mostrando los productos
        $('.category_lista2  .categoryItem[category="todos"]').click(function() {
            function showAll() {
                $('.filtr-item').show();
                $('.filtr-item').css('transform', 'scale(1)');
            }
            setTimeout(showAll, 400);

        });
    });
</script>
<script>
    $("#owl-catalogo").owlCarousel({
        items: 4,
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: 5000,
        singleItem: false
    });

    $('#inter-movil').backstretch([
        'images/bg1-movil.png',
        'images/bg2-movil.png',
        'images/bg3-movil.png'

    ], {
        duration: 3000,
        fade: 750
    });

    $(".rotate").textrotator({
        animation: "dissolve",
        separator: "|",
        speed: 3850
    });
</script>

</body>

</html>