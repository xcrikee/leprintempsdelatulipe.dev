<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LePrintempsDeLaTulipe</title>
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('node_modules/font-awesome/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/header_nav.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
    <script src='https://www.google.com/recaptcha/api.js'></script>
   
</head>
<body>
    
<div id="home">
    <div id="welcome">
         <!--<div id="slider-1"></div>-->
        <div id="carousel-id" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item">
                    <img alt="First slide" src="<?php echo base_url('assets/img/home/slider1.jpg'); ?>">
                </div>
                <div class="item">
                    <img alt="Second slide" src="<?php echo base_url('assets/img/home/slider2.jpg'); ?>">
                </div>
                <div class="item active">
                    <img alt="Third slide" src="<?php echo base_url('assets/img/home/slider3.jpg'); ?>">
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('template/base/nav'); ?>
</div>
<a href="#" class="scrollToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

<div class= "container ctn-color">

<?= $view_content ?>

</div>

<?php $this->load->view('template/base/footer'); ?>

<script src=" <?= base_url('node_modules/jquery/dist/jquery.js') ?>"></script>
<script src=" <?= base_url('node_modules/bootstrap/dist/js/bootstrap.js') ?>"></script>
<script src="<?php echo base_url('assets/js/home.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>
</html>