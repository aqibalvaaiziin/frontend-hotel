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
            <td></td>
          </tr>
          <?php endforeach; ?>
      </tbody>
    
    </table>
  </div>

</div>