<section id="carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?= base_url ?>assets/images/banners/banner_1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="titulo-carousel">Invierte en un Negocio Rentable</h1>
                    <p class="white">Conoce nuestra increíble línea de productos 100% <br> Mexicana diseñada para cuidar
                        el medio ambiente y cuidar tu bolsillo.
                    </p>

                    <div>
                        <a href="tel:8127480049"><button class="btn btn-border-white mont">Llámanos</button></a>
                        <a href="<?= base_url ?>index/contact"><button class="btn btn-blanco ml-10 mont"><strong>Contáctanos</strong></button></a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url ?>assets/images/banners/banner_1.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="titulo-carousel">Mejora tu equipo y ahorra costos</h1>
                    <p class="white">Conoce nuestra increíble línea de productos 100% <br> Mexicana diseñada para cuidar
                        el medio ambiente y cuidar tu bolsillo.
                    </p>
                    <div>
                        <a href="<?= base_url ?>index/contact"><button class="btn btn-border-white mont">Contáctanos</button></a>
                        <a href="<?= base_url ?>producto/catalogue"><button class="btn btn-blanco ml-10 mont"><strong>Catálogo</strong></button></a>
                    </div>
                </div>
            </div>

            <div class="carousel-item ">
                <img class="d-block w-100" src="<?= base_url ?>assets/images/banners/banner_1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="titulo-carousel">Autolavado Llave en mano</h1>
                    <p class="white">Conoce nuestra increíble línea de productos 100% <br> Mexicana diseñada para cuidar
                        el medio ambiente y cuidar tu bolsillo.
                    </p>
                    <div>
                        <a href="tel:8127480049"><button class="btn btn-border-white mont">Llámanos</button></a>
                        <a href="<?= base_url ?>index/contact"><button class="btn btn-blanco ml-10 mont"><strong>Contáctanos</strong></button></a>
                    </div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section id="inter-movil">
    <div class="container">
        <h3 class="rotate mont" style="color: #fff; font-weight:700">
            <strong>
                Invierte en un Negocio Rentable |
                Autolavado Llave en mano |
                ¡Mejora tu equipo y ahorra costos
            </strong>
        </h3>
        <br>

        <a href="tel:8127480049">
            <button class="btn btn-border-white mont">
                Llámanos
            </button>
        </a>
        <a href="<?= base_url ?>index/contact">
            <button class="btn btn-blanco ml-10 mont">
                <strong>Contáctanos</strong>
            </button>
        </a>
    </div>
</section>


<section id="servicios" class="mt-70">
    <div class="container">
        <h2 class="nosotros"> <span class="blue"> ¿Cómo podemos ayudarte? </span> </h2>
        <div class="row">
            <div class="col-xs-12 col-md-2"></div>
            <div class="col-xs-12 col-md-8">
                <p class=" text-center">
                    Bienvenidos a nuestra familia GreenMatik, donde encontraras las mejores soluciones para tu negocio,
                    con nuestro equipo y personal de alta calidad, nosotros te llevamos de la mano en tu modelo de
                    negocio.
                </p>
            </div>
            <div class="col-xs-12 col-md-2"></div>
        </div>
        <div class="row text-left services">
            <div class="col-xs-12 col-sm-6 col-lg-3  text-center">
                <a href="<?=base_url?>producto/catalogue" style="color:black">
                    <img src="<?= base_url ?>assets/images/icons/01.png " alt="">

                    <h6 class=" servicios-margin mont"> <br> <strong>Equipo de Autolavado</strong></h6>
                    <p class="gray">¿Buscas comprar o remplazar por un mejor equipo de lavado de acuerdo a tus
                        necesidades?.</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3  text-center">
                <a href="http://greenmatik.mx/clientes/" target="_blank" style="color:black">
                    <img src="<?= base_url ?>assets/images/icons/02.png" alt="">

                    <h6 class=" servicios-margin mont"> <br> <strong>Inicia tu Negocio Ahora</strong> </h6>
                    <p class="gray">¿Eres una persona emprendedora, cuentas con un terreno o algún medio de invertir
                        inteligentemente en un autolavado y reducir costos?</p>
                </a> </div>
            <div class="col-xs-12 col-sm-6 col-lg-3  text-center">
                <a href="<?=base_url?>index/llaveMano" style="color:black">
                    <img src="<?= base_url ?>assets/images/icons/03.png" alt="">
                    <h6 class=" servicios-margin mont"> <br> <strong>Tu Negocio Llave en Mano</strong></h6>
                    <p class="gray">
                        ¿Buscas Invertir en un negocio rentable con 
                        recuperación de inversión en 18 meses?
                    </p>
                </a> </div>
            <div class="col-xs-12 col-sm-6  col-lg-3  text-center">
                <a href="<?=base_url?>index/contact" style="color:black">
                    <img src="<?= base_url ?>assets/images/icons/04.png" alt="">
                    <h6 class=" servicios-margin mont"> <br> <strong>Autolavado para flotillas</strong></h6>
                    <p class="gray">
                        ¿Tienes una empresa de flotilla de vehículos, quieres mejorar tu productividad,
                        ahorrar tiempos y dinero?
                    </p>
                </a> 
            </div>
        </div>
    </div>

</section>


<section id="servicios" class="bg-gray">
    <div class="container">
        <h2 class="nosotros"> <span class="blue"> Nuestros Servicios </span> </h2>
        <div class="row">
            <div class="col-xs-12 col-md-2"></div>
            <div class="col-xs-12 col-md-8">
                <p class=" text-center">
                    En GreenMatik nos interesa que tu negocio sea rentable, es por ello que nosotros te llevamos de la
                    mano en todo el proceso de negocio y te ofrecemos los mejores equipos de México y Latinoamérica.
                </p>
            </div>
            <div class="col-xs-12 col-md-2"></div>
        </div>
        <div class="row text-left mt-70">
            <div class="col-xs-12 col-sm-6 col-lg-6  left mt-20">
                <a href="<?= base_url ?>index/servicioAsesoria" style="color:black">
                    <div class="media">
                        <img class="mr-3" src="<?= base_url ?>assets/images/icons/servicios-01.png" alt=" Asesoría  Personalizada de Negocios">
                        <div class="media-body">
                            <h6 class="mt-0"><strong> Asesoría Personalizada <br> de Negocios</strong></h6>
                        </div>
                    </div>
                    <p class="gray mt-10">Contamos con un plan de negocios realista y proactivo, basado en la
                        experiencia. </p>
                </a>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-6  left mt-20">
                <a href="<?= base_url ?>index/servicioGarantias" style="color:black">
                    <div class="media">
                        <img class="mr-3" src="<?= base_url ?>assets/images/icons/servicios-02.png" alt=" Asesoría  Personalizada de Negocios">
                        <div class="media-body">
                            <h6 class="mt-0"><strong> Garantías y Programas <br> Exclusivos Greenmatik</strong></h6>
                        </div>
                    </div>
                    <p class="gray mt-10">Todos nuestros equipos y accesorios cuentan con la garantía BÁSICA de 1 año
                        contra defectos de fabricación. </p>
                </a> </div>

            <div class="col-xs-12 col-sm-6 col-lg-6  left mt-20">
                <a href="<?= base_url ?>index/servicioAsistencia" style="color:black">
                    <div class="media">
                        <img class="mr-3" src="<?= base_url ?>assets/images/icons/servicios-03.png" alt=" Asesoría  Personalizada de Negocios">
                        <div class="media-body">
                            <h6 class="mt-0"><strong> Servicio de Asistencia<br> Permanente</strong></h6>
                        </div>
                    </div>
                    <p class="gray mt-20">Ponemos a tu servicio nuestros recursos técnicos y humanos, para darte
                        soluciones rápidas y efectivas.. </p>
                </a> </div>

            <div class="col-xs-12 col-sm-6 col-lg-6  left mt-20">
                <a href="<?= base_url ?>index/llaveMano" style="color:black">
                    <div class="media">
                        <img class="mr-3" src="<?= base_url ?>assets/images/icons/servicios-04.png" alt=" Asesoría  Personalizada de Negocios">
                        <div class="media-body">
                            <h6 class="mt-0"><strong> Autolavado Llave<br> en mano.</strong></h6>
                        </div>
                    </div>
                    <p class="gray mt-20">Si tienes un gran sueño pero no sabes como hacerlo realidad, Nosotros nos
                        ocupamos de cada detalle y te entregamos un proyecto llave en mano con ¡TODO!</p>
                </a>
            </div>
        </div>
    </div>

</section>

<section id="app">

    <div class="container">

        <div class="row">


            <div class="col-xs-12 col-md-12 col-lg-6 ">
                <img src="<?= base_url ?>assets/images/icons/medioambiente-md.png" alt="" class="mt-20 mostrar-md">
                <img src="<?= base_url ?>assets/images/icons/medioambiente-movil.png" alt="" class="mt-20 mostrar-movil mb-20">
            </div>

            <div class="col-xs-12 col-md-12 col-lg-6 " data-aos="fade-left" data-aos-duration="3000">
                <h2 class="app">Minimizando el impacto de la huella hídrica</h2>
                <h5><strong>El agua es un elemento imprescindible para la limpieza, pero ¡Hay que hacer un uso
                        responsable de ella!</strong> </h5>
                <h6><strong>Ahorra hasta 90% de Agua</strong></h6>
                <p>Incorpora a tu kit de lavado nuestro sistema de reciclado de agua, que hara que reutilices hasta el
                    90% del agua empleada en los procesos de lavado.</p>
                <h6><strong>Combinación perfecta para ahorro de agua consumida por auto</strong></h6>
                <p>Mediante la combinación de un reciclador físico, biológico o mixto, eficientes rejillas de
                    recuperación y el cerramiento optimizado del área de lavado.</p>

                <a href="<?= base_url ?>producto/catalogue"><button class="btn btn-blanco">Reciclar</button></a>

            </div>
        </div>

    </div>

</section>

<section id="productos-carousel">

    <div class="container">
        <h2 class="nosotros"> <span class="blue"> Conoce Nuestro Catálogo </span> </h2>
        <div class="row">
            <div class="col-xs-12 col-md-2"></div>
            <div class="col-xs-12 col-md-8">
                <p class=" text-center">
                    La mejor calidad y precio del mercado lo encuentras en nuestros equipos GreenMatik 100% Mexicanos.
                </p>
            </div>
            <div class="col-xs-12 col-md-2"></div>
        </div>

        <div class="row mt-50 mb-50 ocultar-caracteristicas">
            <div class="col-xs-6 col-sm-6 col-md-3 mt-10">
                <div class="media">
                    <img class=" mt-0 mr-2" src="<?= base_url ?>assets/images/icons/catalogo-01.png" width="40" alt="Generic placeholder image">
                    <div class="media-body">
                        <h6 class="mt-0 mont">CALIDAD <br> DE LAVADO</h6>
                    </div>
                </div>
                <!--wnd media -->
            </div>
            <!--end col -->
            <div class="col-xs-6 col-sm-6 col-md-3 mt-10">
                <div class="media">
                    <img class=" mt-0 mr-2" src="<?= base_url ?>assets/images/icons/catalogo-02.png" width="40" alt="Generic placeholder image">
                    <div class="media-body">
                        <h6 class="mt-0 mont">BRILLO <br>DESLUMBRANTE</h6>
                    </div>
                </div>
                <!--wnd media -->
            </div>
            <!--end col -->
            <div class="col-xs-6 col-sm-6 col-md-3 mt-10">
                <div class="media">
                    <img class=" mt-0 mr-2" src="<?= base_url ?>assets/images/icons/catalogo-03.png" width="40" alt="Generic placeholder image">
                    <div class="media-body">
                        <h6 class="mt-0 mont">CERRAMIENTO <br>INCLUIDO</h6>
                    </div>
                </div>
                <!--wnd media -->
            </div>
            <!--end col -->
            <div class="col-xs-6 col-sm-6 col-md-3 mt-10">
                <div class="media">
                    <img class=" mt-0 mr-2" src="<?= base_url ?>assets/images/icons/catalogo-04.png" width="40" alt="Generic placeholder image">
                    <div class="media-body">
                        <h6 class="mt-0 mont">PERSONALIZA <br>TU EQUIPO</h6>
                    </div>
                </div>
                <!--wnd media -->
            </div>
            <!--end col -->
            <div class="col-xs-6 col-sm-6 col-md-3 mt-10">
                <div class="media">
                    <img class=" mt-0 mr-2" src="<?= base_url ?>assets/images/icons/catalogo-05.png" width="40" alt="Generic placeholder image">
                    <div class="media-body">
                        <h6 class="mt-0 mont">AHORRO <br>DE AGUA </h6>
                    </div>
                </div>
                <!--wnd media -->
            </div>
            <!--end col -->
            <div class="col-xs-6 col-sm-6 col-md-3 mt-10">
                <div class="media">
                    <img class=" mt-0 mr-2" src="<?= base_url ?>assets/images/icons/catalogo-06.png" width="40" alt="Generic placeholder image">
                    <div class="media-body">
                        <h6 class="mt-0 mont">SECADO <br>EFICIENTE</h6>
                    </div>
                </div>
                <!--wnd media -->
            </div>
            <!--end col -->
        </div>
        <!--end row -->


        <div id="owl-catalogo" class="owl-carousel wow ">
            <!--camiones grandes-->

            <div class="item-carousel text-center">
                <a href="<?= base_url ?>producto/catalogue"> <img src="<?= base_url ?>assets/images/tsunami/TSUNAMI360.png" alt="">
                    <h6 class="item-title mont">TSUNAMI 360 -4D</h6>
                    <h6>FREE TOUCH - PUENTE DE LAVADO</h6>

                </a>
                <p class="item-description">
                    LAVADO FREE TOUCH
                    <br>
                    FÁCIL OPERACIÓN
                    <br>
                    BAJO COSTE DE MANTENIMIENTO
                </p>

            </div>
            <div class="item-carousel text-center">
                <a href="<?= base_url ?>producto/catalogue"> <img src="<?= base_url ?>assets/images/xpressSeries/XP5-DS.png" alt="">
                    <h6 class="item-title mont">XP5 DS</h6> 
                    <h6>PUENTE DE LAVADO</h6>
                </a>
                <p class="item-description">
                    ESPACIO MÍNIMO DE 50M
                    <br>
                    GRAN RENTABILIDAD
                    <br>
                    BAJOS COSTES DE MANTENIMIENTO
                </p>
            </div>


            <div class="item-carousel text-center">
                <a href="<?= base_url ?>producto/catalogue"> <img src="<?= base_url ?>assets/images/matiksSeries/MK12.png" alt="">
                    <h6 class="item-title mont">MK 12</h6>
                    <h6>PUENTE DE LAVADO</h6>
                </a>
                <p class="item-description">
                    ÓPTIMO COSTE DE INVERSIÓN
                    <br>
                    ALTA PRODUCTIVIDAD
                    <br>
                    BAJO COSTE DE MANTENIMIENTO
                </p>
            </div>

            <div class="item-carousel text-center">
                <a href="<?= base_url ?>producto/catalogue"> <img src="<?= base_url ?>assets/images/xpressSeries/XP5-DS.png" alt="">
                    <h6 class="item-title mont">LAVA ALFOMBRILLAS</h6>
                    <h6>PRODUCTOS Y ACCESORIOS</h6>
                </a>
                <p class="item-description">
                    FACILIDAD DE USO
                    <br>
                    LAVADO EN SECO O CON AGUA
                    <br>
                    RESISTENTE Y AUTOMÁTICO
                </p>
            </div>

        </div>
    </div>

    <div class="row justify-content-center">
        <a href="<?= base_url ?>producto/catalogue"> <button class="btn btn-ver-catalogo mont"> Ver Catálogo </button></a>
    </div>
</section>

<section class="bg-callto">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-7">
                <img src="<?= base_url ?>assets/images/callto.png" alt="GreenMatic" class="mostrar-callto-md mb-20">
            </div>
            <div class="col-xs-12 col-md-5">
                <h2 class="callto-title"> <span class="white"> ¿Deseas más información? </span> </h2>
                <p class="white mt-20 mb-50">Llamanos y recibe más información personalizada para iniciar tu propio
                    negocio de autolavado con la ayuda y calidad de GreenMatik.</p>
                <a href="<?= base_url ?>index/contact"><button class="btn btn-border-white mont">Contáctanos</button></a>
                <a href="tel:8127480049"><button class="btn btn-blanco ml-10 mont"><strong>Llámanos</strong></button></a>

            </div>
        </div>
    </div>
</section>