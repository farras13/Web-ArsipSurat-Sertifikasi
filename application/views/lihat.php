<div style="margin-left: 43px;">
	<h2 class="mt-4">Arsip Surat >> Lihat</h2>
	<p style="margin-bottom: 0;">Nomor : <?= $surat->no_surat ?>
		<br> Kategori : <?= $surat->kategori ?> <br> Judul : <?= $surat->judul ?> <br> Waktu Unggah : <?= $surat->waktu_input ?>
	</p>
</div>

<div class="row" style="margin-left: 35px;margin-top:20px; margin-right: 30px;">
	<div class="col-md-12 mb-4">
		<iframe src="<?= base_url('uploads/surat/').$surat->file_surat ?>" width="850" height="400"></iframe>
	</div>
	<div class="col-md-12 mb-4">
		<a href="" class="btn btn-danger"><< Kembali</a>
		<a href="" class="btn btn-primary">Unduh</a>
		<a href="" class="btn btn-warning">Edit/Ganti File</a>
	</div>
</div>