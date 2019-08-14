<html>
<a href="?menu=tambah_pendaftaran" class="btn btn-primary btn-rect"><i class='icon icon-white icon-plus'></i> Tambah Pendaftaran</a><p>
<div class="panel panel-default">
	<div class="panel-heading">
		Pendaftaran Pasien
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nomor Pendaftaran</th>
						<th>Tgl. Pendaftaran</th>
						<th>No. Urut</th>
						<th>Aksi</th>
					</tr>
				</thead>
			<?php
				$pendaftarSql = "SELECT * FROM pendaftaran ORDER BY nopendaftaran DESC LIMIT $hal, $row";
				$pendaftarQry = mysql_query($pendaftarSql, $server)  or die ("Query pendaftaran salah : ".mysql_error());
				$nomor  = 0; 
				while ($pendaftar = mysql_fetch_array($pendaftarQry)) {
				$nomor++;
			?>
				<tbody>
					<tr>
						
						<td><?php echo $nomor;?></td>
						<td><?php echo $pendaftar['nopendaftaran'];?></td>
						<td><?php echo $pendaftar['tglpendaftaran'];?></td>
						<td><?php echo $pendaftar['nourut'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=hapus_pendaftar&aksi=hapus&nmr=<?php echo $pendaftar['id']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a> 
						  <a href="?menu=edit_pendaftar&aksi=edit&nmr=<?php echo $pendaftar['id']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>
						  </div>
						</td>
					</tr>
				</tbody>
			<?php } ?>
					<tr>
						<td colspan="9" align="right">
						<?php
						for($h = 1; $h <= $max; $h++){
							$list[$h] = $row*$h-$row;
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=pendaftaran&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>
</html>






