<img src="<?= base_url().'/assets/image/big_image_1.jpg' ?>" width="100%" alt=""
	style="position:absolute;top:0;background-position:-25px -25px;object-fit: none;height:65%">
<div class="textImageCover text-center">
	<div style="margin-top:15%">
		<p class="robotoDesc pdfLight" style="font-size:65px;color:white">Kamar Hotel</p>
		<p class="robotoDesc rubikLight" style="font-size:20px;color:white">Banyak opsi kamar sesuai dengan kebutuhan
			anda</p>
	</div>
</div>

<div class="container d-flex flex-wrap justify-content-around" style="margin-top:43%;margin-bottom:100px">
	<?php foreach($koleksiKamar->data as $kamar): ?>
	<div class="card mb-3" style="width: 22rem">
		<img src="<?= base_url().'/assets/image/kamar1.jpg' ?>" alt="..." style="width: 350px;height:233px">
		<div class="card-body">
			<h5 class="card-title pdfLight mb-2" style="font-size:1.75rem;color:#B99365">Kamar <?= $kamar->tipe ?></h5>
			<p class="card-text mb-2 rubikMedium"> 
				Rp. <?= $kamar->harga; ?> 
				<span class="ml-5"> <?= $kamar->jml_ranjang ?> &nbsp;<i class="fa fa-bed" aria-hidden="true"></i></span>
			</p>
			<p class="card-text mb-4 rubikLight" style="width:310px;height:144px"><?= $kamar->deskripsi ?></p>
			<?php if($this->session->userdata('idUser')){ ?>
				<a href="<?= base_url().'user/pesan?tipe='.$kamar->tipe ?>" class="btnOrder px-4 py-2 rounded">Pesan Sekarang</a>
				<?php }else{ ?>
					<a href="<?= base_url().'login' ?>" class="btnOrder px-4 py-2 rounded">Pesan Sekarang</a>
			<?php } ?>
		</div>
	</div>
	<?php endforeach; ?>
</div>


