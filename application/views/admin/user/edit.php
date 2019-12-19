<div class="cc">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h2>Form Edit Data User</h2>
				</div>
				<div class="card-body">
					<?php if(validation_errors()): ?>
					<div class="alert alert-danger" role="alert">
						<?= validation_errors() ?>
					</div>
					<?php endif; ?>
					<?php 
					form_open('admin/user/prosesPut');
					?>
					<form action="<?= base_url().'admin/user/prosesPut' ?>" method="post">
						<?php foreach($users->data as $user): ?>
						<input type="hidden" name="id_user" value="<?= $user->id_user ;?>">
						<div class="form-group">
							<label for="nama">NAMA</label>
							<input type="text" class="form-control" id="nama" name="nama"
								value="<?= $user->nama ;?>">
						</div>
						<div class="form-group">
							<label for="email">EMAIL</label>
							<input type="text" class="form-control" id="email" name="email" value="<?= $user->email ;?>">
						</div>
						<div class="form-group">
							<label for="email">No. Telephone</label>
							<input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $user->no_telp ;?>">
						</div>
						<div class="form-group">
							<label for="username">USERNAME</label>
							<input type="text" class="form-control" id="username" name="username"
								value="<?= $user->username ;?>">
						</div>
						<div class="form-group">
							<label for="password">PASSWORD</label>
							<input type="text" class="form-control" id="password" name="password"
								value="<?= $user->password ;?>">
                        </div>
						<div class="form-group">
							<label for="role">ROLE</label>
							<input type="text" class="form-control" id="role" name="role"
								value="<?= $user->role ;?>">
                        </div>
						<button type="submit" name="submit" class="btn btn-success float-right">Submit</button>
						<?php endforeach ;?>
					</form>
					<?php 
					form_close();
					?>
				</div>
			</div>
		</div>
	</div>
</div>
