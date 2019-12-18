<div class="cc">
    <h1 class="mt-2 mb-3 font-weight-bold">Transaksi</h1>
  <div class="tableSize">
    <table class="table" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col" style="width:10%">ID_KAMAR</th>
          <th scope="col" style="width:10%">ID_USER</th>
          <th scope="col" style="width:20%">CHECKIN</th>
          <th scope="col" style="width:20%">CHECKOUT</th>
          <th scope="col" style="width:20%">TOTAL</th>
          <th scope="col" style="width:20%">ACTION</th>
        </tr>
      </thead>
    
      <tbody>
        <?php foreach($dataTransaksi->data as $t) :?>
          <tr>
            <td><?= $t->id_kamar ?></td>
            <td><?= $t->id_user ?></td>
            <td><?= $t->checkin ?></td>
            <td><?= $t->checkout ?></td>
            <td><?= $t->total ?></td>
            <td></td>
          </tr>
        <?php endforeach;?>
      </tbody>
    
    </table>
  </div>

</div>