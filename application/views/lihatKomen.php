<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.min.css">
    <link href="<?php echo base_url(); ?>assets/css/rekapmedis.css" type="text/css" rel="stylesheet">
    
	
    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/Magnific-Popup/dist/magnific-popup.css">

    <!--  custom css file  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    <!--  Responsive css file  -->
	  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">

      <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/owl-carousel/css/owl.theme.default.min.css">
    <title>Document</title>
</head>
<body>
    <!--Lihat Komentar-->
  <div class="container-fluid kotakbesar content" id="keluhan">
    <div class="kotak12">
      <p class="Judul"><label style="font-size:30px"><b>Komentar Masyarakat</b></label></p>
      <div class="container-fluid kotakbesar1">
        <?php 
          $no = 1;
          foreach ($komentar['entries']->result_array() as $komen_entry){
        ?>
          <div class="row kotaks">
            <div class="col-md-4">
              <label style="margin-bottom: 5px; margin-top:0px; font-size: 20px"><b><?php echo $komen_entry['nama']?></b></label><br>
            
              <label style="margin-bottom: 5px; margin-top:0px; font-size: 14px"><p><?php echo $komen_entry['keluhan']?></p></label>
            </div>
          </div>
        <?php
            }
        ?>
    </div> 
  </div>
</body>
</html>