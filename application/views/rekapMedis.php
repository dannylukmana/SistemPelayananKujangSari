<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/rekapmedis.css" type="text/css" rel="stylesheet">
    <title>Rekap Medis</title>
</head>
<body>
    <form method="POST" action="<?php echo base_url(); ?> C_SPJPK/inputRekap">
      <div class="container-fluid kotakbesar content" id="medis">
        <div class="row kotak1">
          <div class="col-md-4">
            <label style="margin-bottom: 5px; margin-top:0px; font-size: 14px"><b>Nama Pasien </b></label>
            <p style="margin-bottom: 10px">
              <input style="border-radius: 2px; border: none" type="text" size="40" class="nama" name="nama" id="nama" required/>
              <?php echo form_error('nama', '<small><font color="red">', '</font></small>'); ?>
            </p>
            <label style="margin-bottom: 5px; margin-top:0px; font-size: 14px"><b>NO BPJS </b></label>
            <p style="margin-bottom: 20px">
              <input style="border-radius: 2px; border: none" type="text" size="40" class="bpjs" name="bpjs" id="bpjs"/>
              <?php echo form_error('bpjs', '<small><font color="red">', '</font></small>'); ?>
            </p>
          </div>
          <div class="col-md-4">
            <label style="margin-bottom: 5px; margin-top:0px; font-size: 14px"><b>Usia</b></label>
            <p style="margin-bottom: 0px">
              <input style="border-radius: 2px; border: none" type="text" size="40" class="usia" name="usia" id="usia"/>
              <?php echo form_error('usia', '<small><font color="red">', '</font></small>'); ?>
            </p>
            <label style="margin-bottom: 5px; margin-top:0px; font-size: 14px"><b>Keluhan Sakit</b></label>
            <p style="margin-bottom: 20px">
              <input style="border-radius: 2px; border: none" type="text" size="40" class="keluhan" name="keluhan" id="keluhan"/>
              <?php echo form_error('keluhan', '<small><font color="red">', '</font></small>'); ?>
            </p>	
          </div>
          <div class="col-md-4">
            <label style="margin-bottom: 5px; margin-top:0px; font-size: 14px"><b>Tanggal berobat</b></label>
            <p style="margin-bottom: 31px">
              <input style="border-radius: 2px; border: none" type="text" size="40" class="tanggal" name="tanggal" id="tanggal"/>
              <?php echo form_error('tanggal', '<small><font color="red">', '</font></small>'); ?>
            </p>
            <button  type="submit" class="button button1 ">TAMBAH</button>
          </div>
        </div>
      </div>
    </form>
</body>
</html>