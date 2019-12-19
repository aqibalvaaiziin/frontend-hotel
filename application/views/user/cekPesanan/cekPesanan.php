<img src="<?= base_url().'/assets/image/big_image_1.jpg' ?>" width="100%" alt=""
	style="position:absolute;top:0;background-position:-25px -25px;object-fit: none;height:65%">
<div class="textImageCover text-center">
	<div style="margin-top:15%">
		<p class="robotoDesc pdfLight" style="font-size:65px;color:white">Cek Pesanan</p>
		<p class="robotoDesc rubikLight" style="font-size:20px;color:white">Lakukan Pengecekan pada pesanan anda</p>
	</div>
</div>


<div class="container" style="margin-top:38%;margin-bottom:100px">

    <h1 class="text-center mb-5 pdfMedium">Riwayat Pesanan</h1>
    <?php if($this->session->userdata('idUser')) { ?>
        <?php foreach($dataTransaksi->data as $d):?>
            <div class="card inputSearch p-4 mb-2" style="width:100%;height:186px">
                <p>Id Transaksi : <?= $d->id_transaksi ;?> </p>
                <p>Id Kamar : <?= $d->id_kamar ;?> </p>
                <p>Check In : <?= $d->checkin ;?></p>
                <p>Check out : <?= $d->checkout ;?> </p>
                <p>Total : <?= $d->total ;?> </p>
                <p>No Kamar : <?= $d->no_kamar ;?> </p>
            </div>
        <?php endforeach;?>
    <?php } else{?>
        <div class="card inputSearch text-center p-4 mb-2" style="width:100%;height:186px">
            <h1 class="mt-5">Tidak Ada Riwayat Transaksi</h1>
        </div>
        <?php } ?>
</div>
