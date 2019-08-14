<html>
<div class="box">
	<header>
		<h5>Tambah Pendaftar</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal">
   
						<div class="form-group">
							<label class="control-label col-lg-4">No Pendaftaran</label>
							<div class="col-lg-4">
								<input type="text" name="Nomor_pendftrn" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
						<label class="control-label col-lg-4">Tanggal Pendaftaran</label>
						<div class="col-lg-2">
						<input type="text" class="form-control" placeholder="1998-05-09" name="Tanggal_pendftrn" /> Tahun-Bulan-Tanggal
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kode Dokter</label>
							<div class="col-lg-4">
								<input type="text" required name="Kode_dktr" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Kode Poliklinik</label>
							<div class="col-lg-4">
								<input type="text" required name="Kode_psien" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Kode Dokter</label>
							<div class="col-lg-4">
								<input type="text" required name="Kode_plklinik" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Biaya</label>
							<div class="col-lg-4">
								<input type="text" required name="Biaya" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Keterangan</label>
							<div class="col-lg-4">
								<input type="text" required name="keterangan" class="form-control" />
							</div>
						</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pendaftar" value="Simpan" class="btn btn-primary" />
							&nbsp <input type="reset" value="Reset" class="btn btn-warning" onclick=self.history.back()>
						</div>

					</form>
	</div>
</div>
</html>