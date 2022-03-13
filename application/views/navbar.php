<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.min.css">
    
    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/Magnific-Popup/dist/magnific-popup.css">

    <!--  custom css file  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    <!--  Responsive css file  -->
	  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">

      <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/owl-carousel/css/owl.theme.default.min.css">
    <title>Home</title>
    <title>Document</title>
</head>
<body>
    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #004d61;">
                <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/image/Asset 2@2x.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" >
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav" id="menu">
                        <li class="nav-item">
                            <a class="nav-link" style="color: white; font-size : 14px;"href="<?php echo base_url('Impulse/inputJadwal');?>">INPUT JADWAL <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white; font-size : 14px;" href="<?php echo base_url('Impulse/viewJadwal');?>">JADWAL PELAYANAN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white; font-size : 14px;" href="<?php echo base_url('Impulse/inputRekap');?>">INPUT REKAP MEDIS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white; font-size : 14px;" href="<?php echo base_url('Impulse/viewRekap');?>">REKAP MEDIS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white; font-size : 14px;" href="<?php echo base_url('Impulse/viewKeluhan');?>">KELUHAN MASYARAKAT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white; font-size : 14px;" href="<?php echo base_url('Impulse/logout');?>">LOG OUT</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
</body>
</html>