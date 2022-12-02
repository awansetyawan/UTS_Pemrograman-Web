<?php require_once('../../layouts/web/header.php') ?>

<?php include("../../core/functions.php"); ?>

<?php $guitars = all("gitar") ?>
<!-- MAIN -->
<div class="site-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-md-12 order-2">
                <div class="row mb-5">
                    <?php foreach ($guitars as $guitar) : ?>
                        <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                            <div class="block-4 text-center border">
                                <figure class="block-4-image">
                                    <a href="shop-single.html">
                                        <img src="<?= $guitar['gambar'] ?>" alt="Image placeholder" class="img-fluid">
                                    </a>
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><?= $guitar['nama'] ?></h3>
                                    <h5><?= $guitar['tipe'] ?></h5>
                                    <p class="mb-0">
                                        <?= $guitar['deskripsi'] ?>
                                    </p>
                                    <p class="text-primary font-weight-bold">Rp. <?= number_format($guitar['harga']) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../../layouts/web/footer.php') ?>