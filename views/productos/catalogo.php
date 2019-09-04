<section id="catalogue-banner">
    <div class="container">
        <h1 class="titulo-refacciones">Catálogo</h1>
        <p class="white mt-10 mb-50">Conoce nuestra increíble línea de productos pensada 100% en el mercado Mexicano.

        </p>
        <a href="<?=base_url?>index/contact"><button class="btn btn-border-white mont">Contáctanos</button></a>
        <a href="<?=base_url?>producto/catalogue"><button class="btn btn-blanco ml-10 mont"><i class="fas fa-download"></i> <strong>Catálogo</strong></button></a>
    </div>
</section>

<section class="catalogo">
    <div class="container">
        <div class="row justify-content-center"></div>
    </div>
</section>


<section id="filtro" class="catalogo-filtro">
    <div class="container">
        <div class="row justify-content-center" style="margin:70px 0;">
            <div class="category_list">
                <button category="todos" data-toggle="tooltip" data-placement="top" title="ALL ITEMS" class="btn categoryItem">TODOS</button>
                <button category="Túneles de lavado" data-toggle="tooltip" data-placement="top" title="TÚNEL DE LAVADO" class=" btn categoryItem">TÚNEL DE LAVADO</button>
                <button category="Puentes de lavado" data-toggle="tooltip" data-placement="top" title="PUENTE DE LAVADO" class="btn categoryItem">PUENTE DE LAVADO</button>
                <button category="Free Touch" data-toggle="tooltip" data-placement="top" title="FREE TOUCH" class="btn categoryItem">FREE TOUCH</button>
                <button category="Productos químicos" data-toggle="tooltip" data-placement="top" title="PRODUCTO QUÍMICO CERTIFICADO" class="btn categoryItem">PRODUCTO QUÍMICO CERTIFICADO</button>
            </div>
        </div>
        <div class="row filtr-container text-center">
            <?php while ($pro = $productos->fetch_object()) : ?>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 filtr-item" category="<?= $pro->categoria ?>">
                <div class="item-catalogo">
                    <a href="<?=base_url?>producto/detalle&id=<?=$pro->id?>"><img src="data:image/jpg;base64, <?= base64_encode($pro->imagen); ?>" alt="Producto" class="img-fluid imagenProducto">
                        <div class="text-item">
                            <h6 class="nombreProducto mont"><strong><?= $pro->nombre ?></strong></h6>
                            <p class="light"><?= $pro->categoria ?></p>
                        </div>
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>