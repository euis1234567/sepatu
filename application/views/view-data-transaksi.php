<html>
<head>
    <title>Data Transaksi</title>
    <link href="<?php echo base_url() ?>assets/css/form.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container ">
      
		<h2 class="mb-4 mt-4">Data Transaksi</h2>
      <div class="row m-auto d-flex justify-content-between align-items-center ">
        <div class="col-md-6 bg-white p-4 shadow-sm">
          <div class="kode">
            <label class="col-sm-5 col-form-label">Nama Pembeli</label> :
            <label><?= $nama; ?></label>
					</div>
						<div class="nama">
							<label class="col-sm-5 col-form-label">Nomor Telephon</label> :
							<label> <?= $no_hp; ?> </label>
						</div>
						<div class="merek">
							<label class="col-sm-5 col-form-label">Merek</label> :
							<label><?= $merek; ?></label>
						</div>
						<div class="merek">
							<label class="col-sm-5 col-form-label">Harga</label> :
							<label><?= $harga; ?></label>
						</div>
						<div class="ukuran mb-4 ">
							<label class="col-sm-5 col-form-label">Ukuran</label> :
							<label><?= $ukuran; ?></label>
						</div>
            <div class="jumlahbeli ">
              <label class="col-sm-5 col-form-label">Jumlah Beli</label> :
              <label><?= $jumlahbeli; ?></label>
            </div>
            <div class="ukuran mb-4 ">
              <label class="col-sm-5 col-form-label">Total Harga</label> :
              <label>Rp <?= number_format($total,0,'.','.'); ?></label>
            </div>
			<p>
			<div class="col-sm-5 form-control text-center">
				<div class="link ">
					<a href="<?= base_url('transaksi');?>" button class="button-3" role="button">  Kembali  </a>
				</div>
			</div>
			</p>
        </div>
      </div>
    </div>
</body>
</html>
