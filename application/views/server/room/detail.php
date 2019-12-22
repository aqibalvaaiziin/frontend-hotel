<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Data Kamar
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $kamar['id_kamar']; ?></h5>
					<p class="card-text">
						<label for=""><b>NO KAMAR : </b></label>
						<?= $kamar['no_kamar']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>TIPE <span style="margin-left:1.8rem">:</span> </b></label>
						<?= $kamar['tipe']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>HARGA <span style="margin-left:1.8rem">:</span> </b></label>
						<?= $kamar['harga']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>JUMLAH RANJANG <span style="margin-left:1.3rem">:</span> </b></label>
						<?= $kamar['jml_ranjang']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>STATUS <span style="margin-left:1.3rem">:</span> </b></label>
						<?= $kamar['status']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>GAMBAR <span style="margin-left:1.3rem">:</span> </b></label>
						<?= $kamar['gambar']; ?>
					</p>
					<a href="<?= base_url() ;?>admin/room" class="btn btn-primary float-right">
						<i class="fa fa-sign-out" aria-hidden="true">&nbsp;Keluar</i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
