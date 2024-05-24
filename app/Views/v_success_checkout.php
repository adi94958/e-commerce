<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="/css/tiny-slider.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <?= $this->extend('v_header_footer') ?>
    <?= $this->section('content') ?>

    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="h3 mb-3 text-black">Order Success</h2>
                    <p>Thank you for your order. Your order has been placed successfully.</p>
                    <a href="/" class="btn btn-black btn-lg py-3 btn-block">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>