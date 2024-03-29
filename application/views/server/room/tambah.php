<div class="cc">
  <div class="row mt-3">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h2>Form Tambah Data Kamar</h2>
        </div>
        <div class="card-body">
						<?php echo form_open_multipart('server/room/prosesPost') ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="no_kamar">No Kamar</label>
              <input type="number" class="form-control" id="no_kamar" name="no_kamar">
            </div>
            <div class="form-group">
              <label for="tipe">Tipe</label>
              <select name="tipe" class="form-control">
                <option value="Regular">Regular</option>
                <option value="Deluxe">Deluxe</option>
                <option value="Royal">Royal</option>
              </select>
            </div>
            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="number" class="form-control" id="harga" name="harga">
            </div>
            <div class="form-group">
              <label for="jml_ranjang">Jumlah Ranjang</label>
              <input type="number" class="form-control" id="jml_ranjang" name="jml_ranjang">
            </div>
            <div class="form-group">
              <label for="lokasi">Lokasi</label>
              <input type="text" class="form-control" id="lokasi" name="lokasi">
            </div>
            <label for="" class="mt-1">Description</label>
							<div class="form-group mb-1 mb-3">
								<textarea name="desc" id="" class="form-control" cols="30" rows="10"></textarea>
							</div>
            <div class="form-group">
              <label for="gambar">Gambar</label>
              <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <button type="submit" name="submit" class="btnAddData rounded py-2 px-3 float-right"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp;Simpan</button>
          </form>
          <?php 
          form_close();
          ?>
        </div>
      </div>
    </div>
  </div>
</div>