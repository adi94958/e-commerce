<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?= $this->extend('v_header_footer') ?>
    <?= $this->section('content') ?>

    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">
                <?php foreach ($barang as $item) : ?>
                    <div class="col-12 col-md-4 col-lg-3 mb-5">
                        <a class="product-item" href="<?= base_url('/cart/add/' . $item['id_barang']) ?>">
                            <img src="<?= base_url('images/' . $item['gambar']) ?>" class="img-fluid product-thumbnail">
                            <h3 class="product-title"><?= $item['nama_barang']; ?></h3>
                            <strong class="product-price">Rp. <?= number_format($item['harga'], 0, ',', '.'); ?></strong>
                            <span class="icon-cross">
                                <img src="<?= base_url('images/cross.svg') ?>" class="img-fluid">
                            </span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>