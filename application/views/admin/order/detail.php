<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Data Transaksi
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $transaksi['id_transaksi']; ?></h5>
					<p class="card-text">
						<label for=""><b>ID KAMAR : </b></label>
						<?= $transaksi['id_kamar']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>ID USER : </b></label>
						<?= $transaksi['id_user']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>CHECKIN <span style="margin-left:1.8rem">:</span> </b></label>
						<?= $transaksi['checkin']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>CHECKOUT <span style="margin-left:1.8rem">:</span> </b></label>
						<?= $transaksi['checkout']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>TOTAL <span style="margin-left:1.3rem">:</span> </b></label>
						<?= $transaksi['total']; ?>
					</p>
					<a href="<?= base_url() ;?>admin/order" class="btn btn-primary float-right">
						<i class="fa fa-sign-out" aria-hidden="true">&nbsp;Keluar</i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
