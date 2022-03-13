<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
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
    <div class="container-fluid kotakbesar1">
        <div class="kotak12">
            <p class="Judul"><label style="font-size:30px"><b>REKAP MEDIS PASIEN</b></label></p>
            <div class="kotak2">
                <table class="table table-hover table-borderless table-striped thead-light" >
                    <thead>
                        <tr class="bg-info">
                            <th scope="col">Nama</th>
                            <th scope="col">NO BPJS</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Keluhan Sakit</th>
                            <th scope="col">Tanggal berobat</th>
                        </tr>
                        </thead>
                    <tbody style="color: white;">
                    <?php 
                        $no = 1;
                        foreach ($rekap_medis['entries']->result_array() as $rekap_entry){
                    ?>
                        <tr>
                        <td><?php echo $rekap_entry['nama']?></td>
                        <td><?php echo ($rekap_entry['bpjs'] != NULL) ? $rekap_entry['bpjs'] : '-';  ?></td>
                        <td><?php echo $rekap_entry['usia'] ?></td>
                        <td><?php echo $rekap_entry['keluhan'] ?></td>
                        <td><?php echo $rekap_entry['tanggal'] ?></td>
                        </tr>
                    <?php
                        }
                    ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>