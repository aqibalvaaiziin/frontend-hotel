<div class="cc">
  <div class="row mt-3">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h2>Form Tambah Data User</h2>
        </div>
        <div class="card-body">
        <?php echo form_open('admin/user/prosesPost'); ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="noTelp">No Telephone</label>
              <input type="text" class="form-control" id="noTelp" name="noTelp">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
              <label for="role">Role</label>
              <input type="text" class="form-control" id="role" name="role">
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