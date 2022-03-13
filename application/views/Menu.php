<!doctype html>
<html>
<head>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/Menu.css" type="text/css" rel="stylesheet">
	<meta charset="utf-8">
	<title>Untitled Document</title>
</head>

<body>
	<div class="container-fluid kotakbesar">
		<div class="row kotak1">
			<div class="col-md-4">
				<label style="margin-bottom: 5px; margin-top:0px; font-size: 14px"><b>Nama </b></label>
				<p style="margin-bottom: 10px"><input style="border-radius: 2px; border: none" type="text" size="40" class="username"/></p>
				<label style="margin-bottom: 5px; margin-top:0px; font-size: 14px"><b>NIP (Nomor Induk Pegawai) </b></label>
				<p style="margin-bottom: 20px"><input style="border-radius: 2px; border: none" type="text" size="40" class="username"/></p>
			</div>
			<div class="col-md-4">
				<label style="margin-bottom: 5px; margin-top:0px; font-size: 14px"><b>Jenis Kelamin </b></label>
				<p style="margin-bottom: 0px"><select class="kelamin"  >
                    <option>Pria</option>
					<option>Wanita</option>
                   </select>
				</p>
				<label style="margin-bottom: 5px; margin-top:0px; font-size: 14px"><b>Status Kepegawaian </b></label>
				<p><select class="kelamin"  >
                    <option>Dokter</option>
                   </select>
				</p>	
			</div>
			<div class="col-md-4">
				<label style="margin-bottom: 5px; margin-top:0px; font-size: 14px"><b>Nomor Telepon </b></label>
				<p style="margin-bottom: 31px"><input style="border-radius: 2px; border: none" type="text" size="40" class="username"/></p>
				<p style="margin-bottom: 0px"><input type="submit" class="button button1 " value="login"/></p>	
			</div>
		</div>
	</div> 
</body>
</html>
