<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h2>Form Edit Data Transaksi</h2>
				</div>
				<div class="card-body">
					<?php if(validation_errors()): ?>
					<div class="alert alert-danger" role="alert">
						<?= validation_errors() ?>
					</div>
					<?php endif; ?>
					<form action="" method="post">
						<input type="hidden" name="id_transaksi" value="<?= $transaksi['id_transaksi'] ;?>">
						<div class="form-group">
							<label for="id_kamar">ID_KAMAR</label>
							<input type="number" class="form-control" id="id_kamar" name="id_kamar"
								value="<?= $transaksi['id_kamar'] ;?>">
						</div>
						<div class="form-group">
							<label for="id_user">ID_USER</label>
							<input type="number" class="form-control" id="id_user" name="id_user"
								value="<?= $transaksi['id_user'] ;?>">
						</div>
						<div class="form-group">
							<label for="checkin">CHECKIN</label>
							<input type="date" class="form-control" id="checkin" name="checkin"
								value="<?= $transaksi['checkin'] ;?>">
						</div>
						<div class="form-group">
							<label for="checkout">CHECKOUT</label>
							<input type="date" class="form-control" id="checkout" name="checkout"
								value="<?= $transaksi['checkout'] ;?>">
						</div>
						<div class="form-group">
							<label for="total">TOTAL</label>
							<input type="number" class="form-control" id="total" name="total"
								value="<?= $transaksi['total'] ;?>">
                        </div>
						<button type="submit" name="submit" class="btn btn-success float-right">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
