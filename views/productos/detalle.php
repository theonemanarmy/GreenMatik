    <section class="producto">
        <div class="container">
            <div class="row">
                <?php if (isset($prod) && is_object($prod)) : ?>
                    <div class="col-xs-12 col-md-6">
                        <div class="row align-center">

                        </div>
                        <img src="data:image/jpg;base64, <?= isset($prod->imagenDetalle) ? base64_encode($prod->imagenDetalle) : ''; ?>" class=" img-product-ocultar" alt="Productos GreenMatik">
                        <h6 class="bule2" style="color: #149447; font-weight:700;"><?= isset($prod->serie) ? $prod->serie : ''; ?></h6>
                        <h3 class="blue"><strong><?= isset($prod->categoria) ? $prod->categoria : ''; ?> <?= isset($prod->nombre) ? $prod->nombre : ''; ?></strong></h3>

                        <h6 class="bule2" style="color: black; font-weight:700;"><?= isset($prod->categoriaQuimicos) ? $prod->categoriaQuimicos : ''; ?></h6>

                        <div class="lista-productos">
                            <?= isset($prod->prodQuimico) ? "<strong>$prod->prodQuimico</strong> - " : ''; ?>

                            <?= isset($prod->serieDescripcion) ? $prod->serieDescripcion : ''; ?>
                            <?= isset($prod->descripcion) ? str_replace("\n", "<br>", $prod->descripcion) : ''; ?>
                        </div>
                        <div>
                            <strong><?= isset($prod->serieVentajas) ? $prod->serieVentajas : ''; ?></strong>
                        </div>

                        <div class="mt-20">
                            <ul>
                                <?= isset($prod->descripcion1) ? "<li>$prod->descripcion1</li>" : ''; ?>
                                <?= isset($prod->descripcion2) ? "<li>$prod->descripcion2</li>" : ''; ?>
                                <?= isset($prod->descripcion3) ? "<li>$prod->descripcion3</li>" : ''; ?>
                                <?= isset($prod->descripcion4) ? "<li>$prod->descripcion4</li>" : ''; ?>
                                <?= isset($prod->descripcion5) ? "<li>$prod->descripcion5</li>" : ''; ?>
                                <?= isset($prod->descripcion6) ? "<li>$prod->descripcion6</li>" : ''; ?>
                                <?= isset($prod->descripcion7) ? "<li>$prod->descripcion7</li>" : ''; ?>
                                <?= isset($prod->descripcion8) ? "<li>$prod->descripcion8</li>" : ''; ?>
                            </ul>
                        </div>
                        <!--Diseñado para ser amigable con el medio ambiente-->

                        <div class="mt-20">
                            <h5><strong><?= isset($prod->incluye1) ? 'INCLUYE' : ''; ?></strong></h5>

                            <ul>
                                <?= isset($prod->incluye1) ? "<li>$prod->incluye1</li>" : ''; ?>
                                <?= isset($prod->incluye2) ? "<li>$prod->incluye2</li>" : ''; ?>
                                <?= isset($prod->incluye3) ? "<li>$prod->incluye3</li>" : ''; ?>
                                <?= isset($prod->incluye4) ? "<li>$prod->incluye4</li>" : ''; ?>
                                <?= isset($prod->incluye5) ? "<li>$prod->incluye5</li>" : ''; ?>
                                <?= isset($prod->incluye6) ? "<li>$prod->incluye6</li>" : ''; ?>
                                <?= isset($prod->incluye7) ? "<li>$prod->incluye7</li>" : ''; ?>
                                <?= isset($prod->incluye8) ? "<li>$prod->incluye8</li>" : ''; ?>
                            </ul>
                            <?= isset($prod->precio) ? "<h5><strong>Desde $$prod->precio USD</strong></h5>" : ''; ?>
                        </div>

                        <div class="row">
                            <a onclick="history.back();">
                                <button class="btn btn-productos-claro mont">
                                    <h6 style="margin-bottom:0;">
                                        <i class="fas fa-undo"></i>
                                        <strong>Regresar</strong>
                                    </h6>
                                </button>
                            </a>
                            <a href="<?= base_url ?>index/contact">
                                <button class="btn btn-productos btn-productos-oculto mont" id="prueba">
                                    <strong>Contáctanos</strong>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 img-producto">
                        <img src="data:image/jpg;base64, <?= isset($prod->imagenDetalle) ? base64_encode($prod->imagenDetalle) : ''; ?>" class="img-product-mostrar" alt="Productos GreenMatik">
                    </div>
            </div>

        </div>
    </section>

    <?php if (isset($prod->categoria) && $prod->categoria != "Productos químicos"): ?>
    <section class="productos-relacionados">
        <div class="container">
            <div class="row ">
                <div class="col-xs-12 col-md-6 ">
                    <h3 class="blue"><strong><?= isset($prod->fabricacion) ? "ESPECIFICACIONES TÉCNICAS" : ''; ?></strong></h3>
                    <div class="services">
                        <?= isset($prod->fabricacion) ? "<table class='table services'>" : '';  ?>
                        <thead class="thead-light">
                            <tr class="align-items-center">
                                <th scope="col"></th>
                                <?= isset($prod->fabricacion) ? "<th scope='col'>EQUIPO</th>" : ''; ?>
                                <?= isset($prod->categoria) && $prod->categoria != "Productos químicos" ? "<th scope='col'>$prod->categoria" : ''; ?> <?= "$prod->nombre </th>" ?>

                            </tr>
                        </thead>

                        <tbody>

                            <?= isset($prod->numeroCepillos) ? "<tr>
                                    <th scope='row'></th>
                                    <td>Numero de cepillos</td>
                                    <td> $prod->numeroCepillos </td>
                                    </tr>" : ''; ?>

                            <?= isset($prod->areaDeMontaje) ? "<tr>
                                    <th scope='row'></th>
                                    <td>Área de montaje</td>
                                    <td> $prod->areaDeMontaje </td>
                                </tr>" : ''; ?>

                            <?= isset($prod->unidadesPorHora) ? "<tr>
                                    <th scope='row'></th>
                                    <td>Unidades por hora</td>
                                    <td> $prod->unidadesPorHora </td>
                                </tr>" : ''; ?>

                            <?= isset($prod->potencialTotal) ? "<tr>
                                    <th scope='row'></th>
                                    <td>Potencial Total</td>
                                    <td> $prod->potencialTotal </td>
                                </tr>" : ''; ?>

                            <?= isset($prod->longitudCarril) ? "<tr>
                                    <th scope='row'></th>
                                    <td>Longitud Carril</td>
                                    <td>$prod->longitudCarril </td>
                                </tr>" : ''; ?>

                            <?= isset($prod->dimensionesEquipo) ? "<tr>
                                    <th scope='row'></th>
                                    <td>Dimensiones Equipo</td>
                                    <td> $prod->dimensionesEquipo</td>
                                </tr>" : ''; ?>

                            <?= isset($prod->medidaVehiculo) ? "<tr>
                                    <th scope='row'></th>
                                    <td>Medida Vehiculo</td>
                                    <td> $prod->medidaVehiculo</td>
                                </tr>" : ''; ?>

                            <?= isset($prod->consumoVehiculo) ? "<tr>
                                    <th scope='row'></th>
                                    <td>Consumo Vehículo</td>
                                    <td>$prod->consumoVehiculo </td>
                                </tr>" : ''; ?>

                            <?= isset($prod->fabricacion) ? "<tr>
                                    <th scope='row'></th>
                                    <td>Fabricación</td>
                                    <td>$prod->fabricacion</td>
                                </tr>" : ''; ?>

                            <?= isset($prod->personalizacion) ? "<tr>
                                    <th scope='row'></th>
                                    <td>Personalización</td>
                                    <td>$prod->personalizacion</td>
                                </tr>" : ''; ?>

                            <?= isset($prod->garantia) ? "<tr>
                                    <th scope='row'></th>
                                    <td>Garantía</td>
                                    <td> $prod->garantia </td>
                                </tr>" : ''; ?>


                        </tbody>
                        </table>

                        <!--tablas de Free touch-->
                        <table class="table services">
                            <?= isset($prod->brazoGir) && isset($prod->bombaAgua) ? "<thead class='thead-light'>
                                <tr class='align-items-center'>
                                    <th scope='col' colspan='3' class='text-center'>LAVADO</th>
                                </tr>
                            </thead>" : ''; ?>

                            <tbody>

                                <?= isset($prod->brazoGir) ? "<tr>
                                    <th scope='row'></th>
                                    <td>
                                        Brazo Giratorio de Alta presión
                                        a 284.46 PSI
                                    </td>
                                    <td>$prod->brazoGir</td>
                                </tr>" : ''; ?>

                                <?= isset($prod->bombaAgua) ? "<tr>
                                    <th scope='row'></th>
                                    <td>Bomba de agua alta presión 2.2 kw</td>
                                    <td>$prod->bombaAgua</td>
                                </tr>" : ''; ?>

                                <?= isset($prod->compresorAire) ? "<tr>
                                    <th scope='row'></th>
                                    <td>Compresor de aire de 2.2kw</td>
                                    <td>$prod->compresorAire</td>
                                </tr>" : ''; ?>

                                <?= isset($prod->dispensadorEspuma) ? "<tr>
                                    <th scope='row'></th>
                                    <td>Dispensador de espuma y cortina burbuja</td>
                                    <td> $prod->dispensadorEspuma </td>
                                </tr>" : ''; ?>
                            </tbody>
                        </table>

                        <table class="table services">
                            <?= isset($prod->turbinas) ? "<thead class='thead-light'>
                                <tr class='align-items-center'>
                                    <th scope='col' colspan='3' class='text-center'>SECADO</th>
                                </tr>
                            </thead>" : ''; ?>

                            <tbody>
                                <?= isset($prod->turbinas) ? "<tr>
                                    <th scope='row'></th>
                                    <td>Turbinas fixed type de 5.5kw = 7hp</td>
                                    <td> $prod->turbinas </td>
                                </tr>" : ''; ?>
                            </tbody>
                        </table>
                        <!--tablas de Free touch-->
                    </div>
                </div>


                <div class="col-xs-12 col-md-6">
                    <h3 class="blue"><strong>TE OFRECEMOS LO MEJOR</strong></h3>

                    <div class="row text-left services">
                        <div class="col-xs-12 col-sm-12 col-lg-12  left ">
                            <a href="servicio-asesoria" style="color:black">
                                <div class="media">
                                    <img class="mr-3" src="<?= base_url ?>assets/images/icons/catalogo-01.png" alt="Servicios de Lavado GreenMatik">
                                    <div class="media-body">
                                        <h6 class="mt-0 mont"><strong> CALIDAD DE LAVADO</strong></h6>
                                        <p class="light mt-0 mont"> CEPILLOS DE FOAMI DE ÚLTIMA GENERACIÓN</p>
                                    </div>
                                </div>
                                <!--end media-->
                                <p class="gray mt-10">Los cepillos de FOAMI se adaptan al contorno del auto y ofrecen un
                                    lavado profundo sin rayones. </p>
                            </a>
                        </div>
                        <!--col-end-->

                        <div class="col-xs-12 col-sm-12 col-lg-12  left ">
                            <a href="servicio-asesoria" style="color:black">
                                <div class="media">
                                    <img class="mr-3" src="<?= base_url ?>assets/images/icons/catalogo-02.png" alt="Servicios de Lavado GreenMatik">
                                    <div class="media-body">
                                        <h6 class="mt-0 mont"><strong> SECADO EFICIENTE</strong></h6>
                                        <p class="light mt-0 mont"> POTENTES TURBO VENTILADORES DE 5.5 KW</p>
                                    </div>
                                </div>
                                <!--end media-->
                                <p class="gray mt-10">Los turbo ventiladores trabajan a bajas revoluciones y un alto
                                    caudal de aire lo que mejora su rendimiento. La tobera horizontal móvil con su
                                    particular diseño 3D ofrece una eficiencia de secado excepcional en cualquier tipo
                                    de vehículo.</p>
                            </a>
                        </div>
                        <!--col-end-->

                        <div class="col-xs-12 col-sm-12 col-lg-12  left ">
                            <a href="servicio-asesoria" style="color:black">
                                <div class="media">
                                    <img class="mr-3" src="<?= base_url ?>assets/images/icons/catalogo-03.png" alt="Servicios de Lavado GreenMatik">
                                    <div class="media-body">
                                        <h6 class="mt-0 mont"><strong> BRILLO DESLUMBRANTE</strong></h6>
                                        <p class="light mt-0 mont"> EXCLUSIVO MÓDULO AUTO POLISH SYSTEM (APS)</p>
                                    </div>
                                </div>
                                <!--end media-->
                                <p class="gray mt-10">Compuesto por 3 cepillos de tela absorbente, optimiza la acción de
                                    la cera aplicada tras el ciclo de aclarado, optimiza el secado y ofrece un brillo
                                    deslumbrante de forma totalmente automatizada. </p>
                            </a>
                        </div>
                        <!--col-end-->
                        <div class="col-xs-12 col-sm-12 col-lg-12  left ">
                            <a href="servicio-asesoria" style="color:black">
                                <div class="media">
                                    <img class="mr-3" src="<?= base_url ?>assets/images/icons/catalogo-04.png" alt="Servicios de Lavado GreenMatik">
                                    <div class="media-body">
                                        <h6 class="mt-0 mont"><strong> CERRAMIENTO INCLUIDO</strong></h6>
                                        <p class="light mt-0 mont"> LA SERIE MATIK’S INCLUYE EL CERRAMIENTO DEL TÚNEL
                                        </p>
                                    </div>
                                </div>
                                <!--end media-->
                                <p class="gray mt-10">
                                    Todos los modelos de túnel de lavado incluyen la estructura de
                                    acero galvanizado del cerramiento, las cubiertas superiores y laterales que pueden
                                    ser de cristal, policarbonato o PVC se cotizan aparte.
                                </p>
                            </a>
                        </div>
                        <!--col-end-->
                        <div class="col-xs-12 col-sm-12 col-lg-12  left ">
                            <a href="servicio-asesoria" style="color:black">
                                <div class="media">
                                    <img class="mr-3" src="<?= base_url ?>assets/images/icons/catalogo-05.png" alt="Servicios de Lavado GreenMatik">
                                    <div class="media-body">
                                        <h6 class="mt-0 mont"><strong> PERSONALIZA TU EQUIPO</strong></h6>
                                        <p class="light mt-0 mont"> TÚ DESIDES CÓMO QUIERES QUE SEA TU EQUIPO</p>
                                    </div>
                                </div>
                                <!--end media-->
                                <p class="gray mt-10">Personaliza tu equipo con los diferentes colores, pictogramas,
                                    configuraciones y operaciones para hacer único y exclusivo el equipo de autolavado.
                                </p>
                            </a>
                        </div>
                        <!--col-end-->
                        <div class="col-xs-12 col-sm-12 col-lg-12  left ">
                            <a href="servicio-asesoria" style="color:black">
                                <div class="media">
                                    <img class="mr-3" src="<?= base_url ?>assets/images/icons/catalogo-06.png" alt="Servicios de Lavado GreenMatik">
                                    <div class="media-body">
                                        <h6 class="mt-0 mont"><strong> AHORRO DE AGUA</strong></h6>
                                        <p class="light mt-0 mont"> PUEDES RECICLAR HASTA 95% DE AGUA UTILIZADA</p>
                                    </div>
                                </div>
                                <!--end media-->
                                <p class="gray mt-10">Instalando un reciclador de agua GreenMatik se puede llegar a
                                    reciclar hasta el 90% del agua utilizada en los procesos de lavado, optimizando
                                    costes y reduciendo de forma significativa el impacto de la huella hídrica. </p>
                            </a>
                        </div>
                        <!--col-end-->



                    </div>
                    <!--end row-->
                </div>
                    <?php 
                        endif; //if para validar que no imprima las columnas si es de la categoria productos químicos
                    ?>

            <?php else : ?>
                <h3>No hay productos actualmente!</h3>
            <?php endif; ?>
            <!--Termina if de imprimir todo del producto-->
            </div>
        </div>
    </section>

    <!--Productos relacionados-->
    <section class="productos-relacionados">
        <div class="container">
            <h3 class="blue"><strong>OTROS PRODUCTOS RELACIONADOS</strong></h3>
            <div class="row">
                <?php while ($pro = $productosr->fetch_object()) : ?>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="item-catalogo">
                            <a href="<?= base_url ?>producto/detalle&id=<?= $pro->id ?>&categoria=<?= $pro->categoria_id ?>">
                                <img src="data:image/jpg;base64, <?= base64_encode($pro->imagen); ?>" alt="Productos GreenMatik" class="img-fluid imagenProducto">
                                <div class="text-item">
                                    <h6 class="blue" style="font-weight:700;">
                                        <?= isset($pro->categoria) ? $pro->categoria : ''; ?> 
                                        <?= isset($pro->nombre) ? $pro->nombre : ''; ?> 
                                        <?= isset($pro->categoriaQuimicos) ? $pro->categoriaQuimicos : ''; ?>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>