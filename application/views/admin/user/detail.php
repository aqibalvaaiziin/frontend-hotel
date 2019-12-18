<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Data User
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $user['id_user']; ?></h5>
					<p class="card-text">
						<label for=""><b>NAMA <span style="margin-left:1.8rem">:</span> </b></label>
						<?= $user['nama']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>EMAIL <span style="margin-left:1.8rem">:</span> </b></label>
						<?= $user['email']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>USERNAME <span style="margin-left:1.3rem">:</span> </b></label>
						<?= $user['username']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>PASSWORD <span style="margin-left:1.3rem">:</span> </b></label>
						<?= $user['password']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>ROLE <span style="margin-left:1.3rem">:</span> </b></label>
						<?= $user['role']; ?>
					</p>
					<a href="<?= base_url() ;?>admin/user" class="btn btn-primary float-right">
						<i class="fa fa-sign-out" aria-hidden="true">&nbsp;Keluar</i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
