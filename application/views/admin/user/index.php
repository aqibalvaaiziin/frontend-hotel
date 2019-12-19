<div class="cc">
    <h1 class="mt-2 mb-3 font-weight-bold">User</h1>
    <div class="mb-3">
        <a href="<?= base_url().'admin/user/tambah'; ?>" class="btnAddData rounded py-2 px-3">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Tambah Data
        </a>
    </div>
  <div class="tableSize">
    <table class="table" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col" style="width:15%">NAMA</th>
          <th scope="col" style="width:15%">EMAIL</th>
          <th scope="col" style="width:20%">USERNAME</th>
          <th scope="col" style="width:15%">PASSWORD</th>
          <th scope="col" style="width:15%">ROLE</th>
          <th scope="col" style="width:20%">ACTION</th>
        </tr>
      </thead>
    
      <tbody>
        <?php foreach($dataUser->data as $d): ?>
          <tr>
            <td><?= $d->nama ?></td>
            <td><?= $d->email ?></td>
            <td><?= $d->username ?></td>
            <td><?= $d->password ?></td>
            <td><?= $d->role ?></td>
            <td>
              <a href="<?= base_url().'admin/user/edit/'.$d->id_user; ?>" class="btn btn-warning"><i class="fa fa-edit" style="font-size:15px"></i></a>
              <a href="<?= base_url().'admin/user/delete/'.$d->id_user; ?> "class="btn btn-danger" onclick="return confirm('Yakin Data Ini Akan Dihapus');"> <i class="fa fa-trash"></i></a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    
    </table>
  </div>

</div>