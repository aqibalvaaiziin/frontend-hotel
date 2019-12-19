<div class="cc">
    <h1 class="mt-2 mb-3 font-weight-bold">Kamar</h1>
    <div class="mb-3">
        <a href="<?= base_url().'admin/room/tambah'; ?>" class="btnAddData rounded py-2 px-3">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Tambah Data
        </a>
    </div>
  <div class="tableSize">
    <table class="table" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col" style="width:20%">NO_KAMAR</th>
          <th scope="col" style="width:20%">TIPE</th>
          <th scope="col" style="width:20%">HARGA</th>
          <th scope="col" style="width:20%">STATUS</th>
          <th scope="col" style="width:20%">ACTION</th>
        </tr>
      </thead>
    
      <tbody>
        <?php foreach($dataKamar->data as $k): ?>
          <tr>
            <td><?= $k->no_kamar ?></td>
            <td><?= $k->tipe ?></td>
            <td><?= $k->harga ?></td>
            <td><?= $k->status ?></td>
            <td>
              <a href="<?= base_url().'admin/room/edit/'.$k->id_kamar.'/'.$k->tipe; ?>" class="btn btn-warning"><i
                  class="fa fa-edit" style="font-size:15px"></i></a>
              <a href="<?= base_url().'admin/room/delete/'.$k->id_kamar ?> " class="btn btn-danger"
                onclick="return confirm('Yakin Data Ini Akan Dihapus');"> <i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <?php endforeach; ?>
      </tbody>
    
    </table>
  </div>

</div>