<html>
<head>
    <title>Tugas WebProgramming II_Triyanto Kurniawan_12200015</title>
    <link href="<?php echo base_url() ?>assets/css/form.css" rel="stylesheet">

</head>
<body>
    <div class="container ">
		<h2 class="mb-4 mt-4">Form Input Sepatu</h2>
		<form action="<?= base_url('transaksi/cetak'); ?>" method="POST">
		<div class="row">
			<div class="input-group input-group-icon">
			<input type="text" placeholder="Nama Pembeli" name="nama" />
			<?= form_error('nama','<small class="text-danger pl-3">','</small> '); ?>
			</div>
			<div class="input-group input-group-icon">
			<input type="text" placeholder="No Hp" name="no_hp" />
			<?= form_error('no_hp','<small class="text-danger pl-3">','</small> '); ?>
			</div>
			<div class="input-group input-group-icon">
			<select name="merek" id="Sepatu" class="form-select-	">
				<option selected value="" >Pilih Sepatu</option>
				<option value="Nike">Nike</option>
				<option value="Adidas">Adidas</option>
				<option value="Kickers">Kickers</option>
				<option value="Eiger">Eiger</option>
			</select>
			<?= form_error('merek','<small class="text-danger pl-3">','</small> '); ?>
			</div>
			<div class="input-group input-group-icon">
			<select name="ukuran" id="Sepatu" class="form-select">
				<option selected value="" >Ukuran</option>
				<?php for($i=32; $i <= 44; $i++) :?>
				<option value="<?= $i; ?>"><?= $i; ?></option>
				<?php endfor;?>
			</select>
			<?= form_error('ukuran','<small class="text-danger pl-3">','</small> '); ?>
			</div>
      <div class="input-group input-group-icon">
      <input type="text" placeholder="Jumlah Beli" name="jumlahbeli" />
      <?= form_error('jumlahbeli','<small class="text-danger pl-3">','</small> '); ?>
      </div>
			<div class="col-sm-5 form-control text-center">
			<!--<input type="submit" value="Submit" class="btn btn-primary">-->
      <button class="button-3" role="button"> Proses </button>
			</div>
			</div>
		</form>
    </div>
</body>
</html>
