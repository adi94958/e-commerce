<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arxy</title>
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('/css/tiny-slider.css') ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url('/css/tiny-slider.css') ?>" rel="stylesheet">
    <link href="<?= base_url('/css/style.css') ?>" rel="stylesheet">
</head>

<body>
    <?= $this->extend('v_header_footer') ?>
    <?= $this->section('content') ?>

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Be Yourself<br><span clsas="d-block">Be Arxy</span></h1>
                        <p class="mb-4">Arxy Production merupakan bisnis di bidang fashion yang menawarkan pakaian simpel dan netral sesuai dengan tren terkini. Produk Arxy hadir berdasarkan keinginan dan preferensi konsumen serta memberikan pengalaman personalisasi yang membuat konsumen menjadi tampil percaya diri.</p>
                        <p><a href="#" class="btn btn-secondary me-2">About Us</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="images/produk/produk-4.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
                    <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
                    <p><a href="<?= base_url('/shop') ?>" class="btn">Explore</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <?php
                $count = 0;
                foreach ($barang as $item) :
                    if ($count >= 3) break;
                ?>
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="<?= base_url('/cart/add/' . $item['id_barang']) ?>">
                            <img src="<?= base_url('images/produk/' . $item['gambar']) ?>" class="img-fluid product-thumbnail">
                            <h3 class="product-title"><?= $item['nama_barang']; ?></h3>
                            <strong class="product-price">Rp. <?= number_format($item['harga'], 0, ',', '.'); ?></strong>
                            <span class="icon-cross">
                                <img src="<?= base_url('images/cross.svg') ?>" class="img-fluid">
                            </span>
                        </a>
                    </div>
                <?php
                    $count++;
                endforeach;
                ?>
                <!-- End Column 2 -->

            </div>
        </div>
    </div>
    <!-- End Product Section -->


    <!-- End Blog Section -->

    <?= $this->endSection() ?>

    <script src="<?= base_url('/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('/js/tiny-slider.js') ?>"></script>
    <script src="<?= base_url('/js/custom.js') ?>"></script>
</body>

</html>