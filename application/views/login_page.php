<!doctype html>
<html>
<head>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/Front-page.css" type="text/css" rel="stylesheet">
	<meta charset="utf-8">
	<title>Halaman Login</title>
</head>

<body>
	<div class="container-fluid .kotak1">
		<div class="row">
			<div class="col-md-8 judul">
				<div class="kotak1">
					<p style="font-size: 110px; margin: 0px">E-Puskesmas</p>
					<p style="font-size: 55px;">Kujangsari</p>
				</div>
			</div>
			<div class="col-md-4 login">
				<form method="post" action="<?php echo base_url(); ?>Impulse/login" >
					<div class="kotak2">
						<p class="kalimat1" style="margin-top: 60px; font-size: 40px; margin-bottom: 0px"><b>Selamat Datang,</b></p>
						<p class="kalimat2" style="margin-bottom: 5px;font-size: 25px">Masukkan Data Akun Anda</p>
					</div>
					<div class="kotak3">
						<label style="margin-bottom: 5px; font-size: 14px"><b>Nama Akun</b></label>
						<?php echo form_error('username', '<small><font color="red">', '</font></small>'); ?>
						<p style="margin-bottom: 0px">
							<input style="border-radius: 2px; border: none" type="text" size="40" class="username" name="username" id="username"value="<?php echo set_value('username') ?>" required/>
						</p>
						
						<label style="margin-bottom: 5px; font-size: 14px"><b>Kata Sandi</b></label>
						<?php echo form_error('password', '<small><font color="red">', '</font></small>'); ?>
						<p>
							<input style="border-radius: 2px; border: none" type="password" size="40px" class="password" name="password" id="password" required/>
						</p>
					</div>
					<div class="kotak4">
						<p style="margin-bottom: 0px">
						<button type="submit" class="button button1" >LOGIN</button></p>
						<label>Hanya untuk admin</label>
					</div>

				</form>
			</div>
		</div>
	</div>
</body>
</html>
