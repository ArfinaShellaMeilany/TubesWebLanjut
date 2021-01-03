<?= $this->extend('lelang/page_layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <br><br>
    <p class="text-center"></p>
    <hr>


    <div class="card">
        <div class="row">
            <aside class="col-sm-5 border-right">
                <article class="gallery-wrap">
                    <div class="img-big-wrap">
                        <div> <a href="#"><img src="<?= base_url(); ?>/assets/e-auction/assets/images/product_01.jpeg" width="110%" alt=""></a>
                        </div> <!-- slider-product.// -->
                </article> <!-- gallery-wrap .end// -->
            </aside>
            <aside class="col-sm-7">
                <article class="card-body p-5">
                    <h3 class="title mb-3">INI SEPATU</h3>

                    <p class="price-detail-wrap">
                        <span class="price h3 text-warning">
                            <span class="currency">Rp.</span><span class="num">999.999</span>
                        </span>

                        <span>/per kg</span>
                    </p> <!-- price-detail-wrap .// -->
                    <dl class="item-property">
                        <dt>Description</dt>
                        <dd>
                            <p>Sepatu dalam kondisi baik. Size 40 </p>
                        </dd>
                    </dl>
                    <dl class="param param-feature">
                        <dt>Sisa Waktu</dt>
                        <dd>2 jam 31 menit</dd>
                    </dl> <!-- item-property-hor .// -->
                    <hr>

                    <dl class="param param-inline">
                        <dt>Penawar</dt>
                        <dd> pinskuy :)

                        </dd>
                    </dl> <!-- item-property .// -->
        </div> <!-- col.// -->
    </div> <!-- row.// -->
    <hr>
    <a href="#" class="btn btn-lg btn-primary text-uppercase"> bid now </a>
    <a href="/keranjang" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-shopping-cart"></i> Add to cart </a>
    </article> <!-- card-body.// -->
    </aside> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- card.// -->


</div>


<?= $this->endSection(); ?>