<!doctype html>
<html>
<head>
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
	<meta charset="utf-8">
	<title>Jadwal</title>
</head>

<body>
	<div class="container-fluid kotakbesar1" id="jadwal">
		<header class="header_area">
			<div class="main-menu" style="margin-bottom:30px;">
				<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #004d61;">
					<div class="collapse navbar-collapse" id="navbarNav" >
						<div class="mr-auto"></div>
						<ul class="navbar-nav" id="menu">
							<li class="nav-item">
								<a class="nav-link" style="color: white;"href="<?php echo base_url('Impulse/jadwalSenin');?>">SENIN<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" style="color: white;" href="<?php echo base_url('Impulse/jadwalSelasa');?>">SELASA</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" style="color: white;" href="<?php echo base_url('Impulse/jadwalRabu');?>">RABU</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" style="color: white;" href="<?php echo base_url('Impulse/jadwalKamis');?>">KAMIS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" style="color: white;" href="<?php echo base_url('Impulse/jadwalJumat');?>">JUMAT</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<div class="kotak1 content">
			<p class="Judul"><label style="font-size:30px"><b>Jadwal dan Waktu</b></label></p>
			<table class="table table-hover table-borderless table-striped thead-light" >
				<thead>
					<tr class="bg-info" style="color: white;">
						<th scope="col">Hari</th>
						<th scope="col">Nama</th>
						<th scope="col">NIP</th>
						<th scope="col">Pekerjaan</th>
						<th scope="col">Poli</th>
					</tr>
				</thead>
				<tbody style="color: white;">
					<?php 
						$no = "";
						foreach ($jadwal['entries']->result_array() as $jadwal_entry){
					?>
						<tr>
							<td><?php echo $jadwal_entry['hari']?></td>
							<td><?php echo $jadwal_entry['nama'] ?></td>
							<td><?php echo ($jadwal_entry['nip'] != NULL) ? $jadwal_entry['nip'] : '-';  ?></td>
							<td><?php echo $jadwal_entry['pekerjaan'] ?></td>
							<td><?php echo $jadwal_entry['poli'] ?></td>
						</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
  	</div>
</body>
</html>
