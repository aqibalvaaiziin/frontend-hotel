<div class="cc">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h2>Form Edit Data Kamar</h2>
				</div>
				<div class="card-body">
					<?php if(validation_errors()): ?>
					<div class="alert alert-danger" role="alert">
						<?= validation_errors() ?>
					</div>
					<?php endif; ?>
					<?php 
					form_open('admin/room/prosesPut');
					?>
					<form action="<?= base_url().'admin/room/prosesPut' ?>" method="post">
						<?php foreach($dataKamar->data as $kamar):?>
						<input type="hidden" name="id_kamar" value="<?= $kamar->id_kamar ;?>">
						<div class="form-group">
							<label for="no_kamar">NO KAMAR</label>
							<input type="number" class="form-control" id="no_kamar" name="no_kamar"
								value="<?= $kamar->no_kamar ;?>">
						</div>
						<div class="form-group">
							<label for="tipe">TIPE</label>
							<input type="text" class="form-control" id="tipe" name="tipe"
								value="<?= $kamar->tipe ;?>">
						</div>
						<div class="form-group">
							<label for="harga">HARGA</label>
							<input type="number" class="form-control" id="harga" name="harga"
								value="<?= $kamar->harga ;?>">
						</div>
						<div class="form-group">
							<label for="jml_ranjang">JUMLAH_RANJANG</label>
							<input type="number" class="form-control" id="jml_ranjang" name="jml_ranjang"
								value="<?= $kamar->jml_ranjang ;?>">
						</div>
						<div class="form-group">
							<label for="status">STATUS</label>
							<input type="number" class="form-control" id="status" name="status"
								value="<?= $kamar->status ;?>">
                        </div>
						<div class="form-group">
							<label for="gambar">GAMBAR</label>
							<input type="text" class="form-control" id="gambar" name="gambar"
								value="<?= $kamar->gambar ;?>">
                        </div>
						<button type="submit" name="submit" class="btn btn-success float-right">Submit</button>
						<?php endforeach; ?>
					</form>
						<?php 
						form_close();
						?>
				</div>
			</div>
		</div>
	</div>
</div>