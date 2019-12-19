<div class="cc">
	<h1 class="mt-2 mb-3 font-weight-bold">Transaksi</h1>
	<div class="tableSize">


		<?php if(empty($dataTransaksi)){ ?>
		<h1>Data Transaksi Kosong</h1>
		<?php }else{?>
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
					<td>
						<a href="<?= base_url().'admin/order/edit/'.$t->id_transaksi; ?>" class="btn btn-warning"><i
								class="fa fa-edit" style="font-size:15px"></i></a>
						<a href="<?= base_url().'admin/order/delete/'.$t->id_transaksi; ?> " class="btn btn-danger"
							onclick="return confirm('Yakin Data Ini Akan Dihapus');"> <i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>

		</table>
		<?php } ?>
	</div>

</div>
