<div style="margin-left: 100px;">
	<h1 class="mt-4">Arsip Surat</h1>
	<p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan,<br>Klik "lihat" pada kolom aksi untuk menampilkan surat.</p>
</div>
<form action="" method="post" style="margin-top: 45px;">
	<div class="row" style="margin-left: 50px;">
		<div style="flex: 0 0 auto; width: 10%;">
			<p style="padding-top: 4px; font-weight: bold;">Cari surat: </p>
		</div>
		<div class="col-md-8">
			<div class="form-group has-search">
				<span class="fa fa-search form-control-feedback"></span>
				<input type="text" class="form-control" placeholder="Search" style=" border-radius: 25px;">
			</div>
		</div>
		<div class="col-md-2">
			<button class="btn btn-dark" type="submit" style="box-shadow: 2px 2px 2px rgba(0,0,0,0.8);">Cari!</button>
		</div>
	</div>
</form>
<div class="row" style="margin-left: 50px;margin-top:10px; margin-right: 30px;">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nama Surat</th>
					<th>Kategori</th>
					<th>Judul</th>
					<th>Waktu Pengerjaan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php for ($i = 0; $i < 5; $i++) { ?>
					<tr>
						<td>2020/PD3/TU/001</td>
						<td>Pengumuman</td>
						<td>Nota Dinas WFH</td>
						<td>2021-06-21 17:23</td>
						<td>
							<a class="btn btn-danger" href=""><b>Hapus</b></a>
							<a class="btn btn-warning" href=""><b>Unduh</b></a>
							<a class="btn btn-primary" href="<?= base_url('welcome/lihat')?>"><b>Lihat > ></b></a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<div class="col-md-3">
		<a href="<?= base_url('welcome/unggah')?>" class="btn btn-dark" style="box-shadow: 2px 2px 2px rgba(0,0,0,0.8);">Arsipkan Surat..</a>
	</div>
</div>