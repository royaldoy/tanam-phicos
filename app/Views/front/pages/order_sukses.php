<?= $this->extend('front/layout/home'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="container">
            <div class="col-md-12 box padding text-center">
                <p class="box padding" style="font-weight: 500;font-size: 30px;"> Pemesanan Berhasil</p>
                <a href="<?= base_url() ?>/account/orders"><button class="btn btn-primary">Lihat Pesanan</button></a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>