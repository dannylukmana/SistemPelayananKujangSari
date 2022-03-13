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
    <title>Rekap Medis</title>
</head>
<body>
  <form method="post" action="<?php echo base_url(); ?>Impulse/inputRekap">
    <div class="container-fluid kotakbesar" id="input">
      <h2 style="color: white; text-align:center; margin-top:50px;background-color: #004d61;" class="kotak1">
        FORM INPUT REKAP MEDIS
      </h2>
        <div class="row kotak1">
            <div class="col-md-4">
                <label style="margin-bottom: 10px; margin-top:0px; font-size: 14px"><b>Nama</b></label>
                <p style="margin-bottom: 0px">
                  <input style="border-radius: 2px; border: none" type="text" size="40" class="nama" name="nama" id="nama" required/>
                  <?php echo form_error('nama', '<small><font color="red">', '</font></small>'); ?>
                </p>
                <label style="margin-bottom: 5px; margin-top:0px; font-size: 14px"><b>No BPJS </b></label>
                  <p style="margin-bottom: 10px">
                    <input style="border-radius: 2px; border: none" type="text" size="40" class="bpjs" name="bpjs" id="bpjs"/>
                    <?php echo form_error('bpjs', '<small><font color="red">', '</font></small>'); ?>
                  </p>
            </div>
            <div class="col-md-4">
              <label style="margin-bottom: 5px; margin-top:0px; font-size: 14px"><b>Usia </b></label>
                <p style="margin-bottom: 10px">
                  <input style="border-radius: 2px; border: none" type="text" size="40" class="usia" name="usia" id="usia"/>
                  <?php echo form_error('usia', '<small><font color="red">', '</font></small>'); ?>
                </p>
              <label style="margin-bottom: 5px; margin-top:0px; font-size: 14px"><b>Keluhan sakit</b></label>
              <p>
                <input style="border-radius: 2px; border: none" type="text" size="40" class="keluhan" name="keluhan" id="keluhan"/>
                <?php echo form_error('keluhan', '<small><font color="red">', '</font></small>'); ?>
              </p>	
            </div>
            <div class="col-md-4">
              <label style="margin-bottom: 5px; margin-top:0px; font-size: 14px"><b>Tanggal Berobat</b></label>
              <p style="margin-bottom: 31px">
                <input style="border-radius: 2px; border: none" type="text" size="40" class="tanggal" name="tanggal" id="tanggal"/>
                <?php echo form_error('tanggal', '<small><font color="red">', '</font></small>'); ?>
              </p>
              <p style="margin-bottom: 0px">
                <button  type="submit" class="button button1 ">TAMBAH</button>
              </p>	
            </div>
        </div>
      </div> 
    </form>
</body>
</html>